<template>
  <el-card>
    <v-chart :options="chartOptions" class="echarts"></v-chart>
  </el-card>
</template>

<script>
import "echarts/lib/component/tooltip";
import "echarts/lib/component/legend";
import "echarts/lib/component/title";
import "echarts/lib/chart/gauge";

export default {
  props: ["height"],
  data() {
    return {
      fetchInterval: null,
      chartOptions: {
        title: {
          text: "KELEMBABAN UDARA",
          textStyle: {
            fontSize: 13
          }
        },
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
            radius: "70",
            // center: ["15%", "70%"],
            detail: {
              formatter: "{value}%",
              fontSize: 22,
              fontWeight: "bold",
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
      const data = {
        100: "data4",
        10: "data13",
        2: "data21" // dalam console, luar console : data23
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
  height: 250px;
  max-width: 300px;
}
</style>
