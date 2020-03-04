<template>
  <el-card>
    <v-chart :options="chartOptions" class="echarts"></v-chart>
  </el-card>
</template>

<script>
import "echarts/lib/component/tooltip";
import "echarts/lib/component/legend";
import "echarts/lib/component/title";
import "echarts/lib/chart/bar";

export default {
  props: ["height"],
  data() {
    return {
      fetchInterval: null,
      chartOptions: {
        grid: {
          left: "50px"
        },
        title: {
          text: "SUHU UDARA",
          subtext: this.height + "m",
          textStyle: {
            fontSize: 13
          },
          subtextStyle: {
            color: "#333",
            fontSize: 13,
            fontWeight: "bold"
          }
        },
        xAxis: {
          type: "category",
          data: [
            "Outside Temp",
            "Wind Chill",
            "Heat Index",
            "Dew Point",
            "Inside Temp"
          ],
          axisLabel: {
            interval: 0,
            rotate: 40
          },
          splitLine: {
            show: false
          }
        },
        yAxis: {
          type: "value",
          splitNumber: 5,
          min: 0,
          max: 100,
          axisLabel: {
            formatter: "{value} °F"
          }
        },
        axisLine: {
          lineStyle: { opacity: 0 }
        },
        series: [
          {
            type: "bar",
            barWidth: "75%",
            label: {
              show: true,
              position: "top",
              color: "#000",
              fontWeight: "bold"
            },
            data: [
              { value: 0, itemStyle: { color: "#c52728" } },
              { value: 0, itemStyle: { color: "#3387c3" } },
              { value: 0, itemStyle: { color: "#e88021" } },
              { value: 0, itemStyle: { color: "#38926e" } },
              { value: 0, itemStyle: { color: "#55a9ce" } }
            ]
          }
        ]
      }
    };
  },
  methods: {
    getData() {
      const data = {
        100: "data3",
        10: "data12",
        2: "data17" // dalam console, luar console : data22
      };

      const params = {
        parameter: data[this.height]
      };

      axios
        .get("sensorLog/getLastData", { params })
        .then(r => {
          this.chartOptions.series[0].data[0].value = r.data.value;
          this.chartOptions.series[0].data[4].value = r.data.value;
        })
        .catch(e => {
          this.chartOptions.series[0].data[0].value = 0;
          this.chartOptions.series[0].data[4].value = 0;
        });
    },
    getDewPoint() {
      const params = { parameter: "data35" };
      axios
        .get("sensorLog/getLastData", { params })
        .then(r => {
          this.chartOptions.series[0].data[3].value = r.data.value;
        })
        .catch(e => {
          this.chartOptions.series[0].data[3].value = 0;
        });
    },
    getHeatIndex() {
      const params = { parameter: "data36" };
      axios
        .get("sensorLog/getLastData", { params })
        .then(r => {
          this.chartOptions.series[0].data[2].value = r.data.value;
        })
        .catch(e => {
          this.chartOptions.series[0].data[2].value = 0;
        });
    },
    getWindChill() {
      const params = { parameter: "data37" };
      axios
        .get("sensorLog/getLastData", { params })
        .then(r => {
          this.chartOptions.series[0].data[1].value = r.data.value;
        })
        .catch(e => {
          this.chartOptions.series[0].data[1].value = 0;
        });
    }
  },
  created() {
    this.getData();
    this.getDewPoint();
    this.getHeatIndex();
    this.getWindChill();

    this.fetchInterval = setInterval(() => {
      this.getData();
      this.getDewPoint();
      this.getHeatIndex();
      this.getWindChill();
    }, 60000);
  },
  destroyed() {
    clearInterval(this.fetchInterval);
  }
};
</script>

<style lang="scss" scoped>
.echarts {
  height: 250px;
  max-width: 300px;
}
</style>
