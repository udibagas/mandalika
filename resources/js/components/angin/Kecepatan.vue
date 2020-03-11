<template>
  <el-card class="text-center">
    <strong>KECEPATAN ANGIN</strong>
    <br />
    {{height}}m
    <br />
    <v-chart :options="chartOptions" class="echarts"></v-chart>
  </el-card>
</template>

<script>
import "echarts/lib/component/tooltip";
import "echarts/lib/component/legend";
// import "echarts/lib/component/title";
import "echarts/lib/chart/gauge";

export default {
  props: ["height"],
  data() {
    return {
      fetchInterval: null,
      chartOptions: {
        grid: {
          bottom: "0px",
          left: "0px"
        },
        // title: {
        //   text: "KECEPATAN ANGIN",
        //   subtext: this.height + "m",
        //   textStyle: {
        //     fontSize: 13
        //   },
        //   subtextStyle: {
        //     color: "#333",
        //     fontSize: 13,
        //     fontWeight: "bold"
        //   }
        // },
        series: [
          {
            min: 0,
            max: 250,
            name: "kecepatan",
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
              fontSize: 24,
              fontWeight: "bold",
              color: "#000"
            },
            title: {
              offsetCenter: [0, "70%"],
              fontSize: 12
            },
            data: [{ value: 0, name: "mph" }]
          }
        ]
      }
    };
  },
  methods: {
    getData() {
      const data = {
        100: "data2",
        70: "data7",
        40: "data9",
        10: "data11",
        2: "data18"
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
  height: 150px;
  max-width: 150px;
  margin: auto;
}
</style>
