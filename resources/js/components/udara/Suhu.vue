<template>
  <el-card>
    <div class="text-right">
      <el-radio-group v-model="unit" size="mini">
        <el-radio-button label="F"></el-radio-button>
        <el-radio-button label="C"></el-radio-button>
      </el-radio-group>
    </div>
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
  watch: {
    unit(v, o) {
      this.chartOptions.series[0].data = this.chartOptions.series[0].data.map(
        d => {
          if (v == "C" && o == "F") {
            d.value = Math.round((d.value - 32) * (5 / 9));
          } else {
            d.value = Math.round(d.value * (9 / 5) + 32);
          }
          return d;
        }
      );

      if (v == "C" && o == "F") {
        this.chartOptions.yAxis.axisLabel.formatter = "{value} °C";
      } else {
        this.chartOptions.yAxis.axisLabel.formatter = "{value} °F";
      }
    }
  },
  data() {
    return {
      unit: "F",
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
            rotate: this.height == 2 ? 40 : 0
          },
          splitLine: {
            show: false
          }
        },
        yAxis: {
          type: "value",
          splitNumber: 5,
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
    convert() {},
    getData() {
      const data = {
        100: "data3",
        10: "data12",
        2: "data22" // luar console, dalam console : data17
      };

      const params = {
        parameter: data[this.height]
      };

      axios
        .get("sensorLog/getLastData", { params })
        .then(r => {
          this.chartOptions.series[0].data[0].value = r.data.value;
        })
        .catch(e => {
          this.chartOptions.series[0].data[0].value = 0;
        });
    },
    getInsideTemperatur() {
      const params = { parameter: "data17" };
      axios
        .get("sensorLog/getLastData", { params })
        .then(r => {
          this.chartOptions.series[0].data[3].value = r.data.value;
        })
        .catch(e => {
          this.chartOptions.series[0].data[3].value = 0;
        });
    },
    getDewPoint() {
      const params = { parameter: "data35" };
      axios
        .get("sensorLog/getLastData", { params })
        .then(r => {
          this.chartOptions.series[0].data[4].value = r.data.value;
        })
        .catch(e => {
          this.chartOptions.series[0].data[4].value = 0;
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

    if (this.height == 2) {
      this.chartOptions.xAxis.data = [
        "Outside Temp",
        "Wind Chill",
        "Heat Index",
        "Dew Point",
        "Inside Temp"
      ];

      this.getDewPoint();
      this.getHeatIndex();
      this.getWindChill();
      this.getInsideTemperatur();
    } else {
      this.chartOptions.xAxis.data = ["Outside Temp"];
    }

    this.fetchInterval = setInterval(() => {
      this.getData();
      if (this.height == 2) {
        this.getDewPoint();
        this.getHeatIndex();
        this.getWindChill();
        this.getInsideTemperatur();
      }
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
  margin: auto;
}
</style>
