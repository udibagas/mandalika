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
      chartOptions: {
        grid: {
          left: "70px",
          bottom: "20px"
        },
        title: {
          text: "HUJAN SAAT INI",
          textStyle: {
            fontSize: 13
          }
        },
        xAxis: {
          type: "category",
          data: ["Hari Ini", "Badai", "Rata2"]
          //   axisLabel: {
          //     interval: 0,
          //     rotate: 40
          //   }
        },
        yAxis: {
          type: "value",
          splitNumber: 5,
          min: 0,
          max: 5,
          axisLabel: {
            formatter: "{value} in³/jam"
          }
        },
        axisLine: {
          lineStyle: {
            type: "dashed",
            opacity: 0
          }
        },
        series: [
          {
            label: {
              show: true,
              position: "top",
              color: "#000",
              fontWeight: "bold"
            },
            data: [
              { value: 0, itemStyle: { color: "#38926e" } },
              { value: 0, itemStyle: { color: "#55a9ce" } },
              { value: 0, itemStyle: { color: "#e77f20" } }
            ],
            type: "bar",
            color: "#54a8cd"
            // barWidth: '50%'
          }
        ]
      }
    };
  },
  methods: {
    getData(data, index) {
      const params = { parameter: data };

      axios
        .get("sensorLog/getLastData", { params })
        .then(r => {
          this.chartOptions.series[0].data[index].value = r.data.value;
        })
        .catch(e => {
          this.chartOptions.series[0].data[index].value = 0;
        });
    }
  },
  created() {
    this.getData("data29", 0);
    this.getData("data27", 1);
    this.getData("data24", 2);
    this.fetchInterval = setInterval(() => {
      this.getData("data29", 0);
      this.getData("data27", 1);
      this.getData("data24", 2);
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
