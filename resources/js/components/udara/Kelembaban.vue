<template>
  <el-card class="text-center">
    <strong>KELEMBABAN UDARA</strong>
    <br />
    {{parameters[parameter]}}
    <br />
    <br />
    <v-chart :options="chartOptions" class="echarts"></v-chart>
  </el-card>
</template>

<script>
import "echarts/lib/component/tooltip";
import "echarts/lib/component/legend";
import "echarts/lib/chart/gauge";

export default {
  props: ["parameter"],
  data() {
    return {
      parameters: {
        data4: "100m",
        data13: "10m",
        data21: "2m (dalam console)",
        data23: "2m (luar console)"
      },
      fetchInterval: null,
      chartOptions: {
        series: [
          {
            min: 0,
            max: 100,
            type: "gauge",
            startAngle: 200,
            endAngle: -20,
            pointer: { width: 3 },
            splitNumber: 5,
            axisLine: {
              lineStyle: {
                // color: [[0.2, '#28b573'], [0.8, '#28b573'], [1, '#28b573']],
                width: 7
              }
            },
            axisTick: {
              length: 9,
              lineStyle: {
                color: "auto"
              }
            },
            splitLine: {
              length: 10,
              lineStyle: {
                color: "auto"
              }
            },
            radius: "60",
            detail: {
              formatter: "{value}%",
              fontSize: 16,
              //   fontWeight: "bold",
              color: "#000"
            },
            data: [{ value: 0 }]
          }
        ]
      }
    };
  },
  methods: {
    getData() {
      const params = { parameter: this.parameter };

      axios
        .get("sensorLog/getLastData", { params })
        .then(r => {
          this.chartOptions.series[0].data[0].value = r.data.value;
        })
        .catch(e => {
          this.chartOptions.series[0].data[0].value = 0;
        });
    }
  },
  created() {
    this.getData();
    this.fetchInterval = setInterval(this.getData, 60000);
  },
  destroyed() {
    clearInterval(this.fetchInterval);
  }
};
</script>

<style lang="scss" scoped>
.echarts {
  height: 150px;
  max-width: 150px;
  margin: auto;
}
</style>
