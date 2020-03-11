<template>
  <el-card class="text-center">
    <strong>CURAH HUJAN</strong>
    <v-chart :options="chartOptions" class="echarts"></v-chart>
  </el-card>
</template>

<script>
import "echarts/lib/component/tooltip";
import "echarts/lib/component/legend";
import "echarts/lib/chart/bar";

export default {
  props: ["height"],
  data() {
    return {
      fetchInterval: null,
      chartOptions: {
        grid: {
          top: "20px",
          left: "70px",
          bottom: "20px"
        },
        xAxis: {
          type: "category",
          data: ["Bulan", "Tahun"]
        },
        yAxis: {
          type: "value",
          splitNumber: 5,
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
            type: "bar",
            label: {
              show: true,
              position: "top",
              color: "#000",
              fontWeight: "bold"
            },
            data: [
              { value: 0, itemStyle: { color: "#38926e" } },
              { value: 0, itemStyle: { color: "#55a9ce" } }
            ]
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
    this.getData("data30", 0);
    this.getData("data31", 1);
    this.fetchInterval = setInterval(() => {
      this.getData("data30", 0);
      this.getData("data31", 1);
    }, 60000);
  },
  destroyed() {
    clearInterval(this.fetchInterval);
  }
};
</script>

<style lang="scss" scoped>
.echarts {
  height: 150px;
  max-width: 200px;
  margin: auto;
}
</style>
