<template>
  <el-card class="text-center">
    <strong>ARAH ANGIN</strong>
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
import "echarts/lib/component/polar";

export default {
  props: ["height"],
  data() {
    return {
      fetchInterval: null,
      chartOptions: {
        grid: {
          bottom: "0px"
        },
        angleAxis: {
          type: "category",
          startAngle: 110,
          data: ["U", "TL", "T", "TG", "S", "BD", "B", "BL"]
        },
        radiusAxis: {
          splitLine: {
            show: false
          }
        },
        polar: {},
        // title: {
        //   text: "ARAH ANGIN",
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
            type: "bar",
            data: [10, 0, 0, 0, 0, 0, 0, 0],
            coordinateSystem: "polar",
            name: "A"
            // stack: 'a'
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
        2: "data20"
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
  max-width: 200px;
  margin: auto;
}
</style>
