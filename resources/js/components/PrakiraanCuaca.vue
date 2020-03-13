<template>
  <el-card class="text-center" style="width:200px">
    <strong>PRAKIRAAN CUACA</strong>
    <div style="margin-top:20px">
      <i :class="icon[nilai] || 'el-icon-error'" style="font-size:40px;"></i>
      <br />
      <br />
      {{cuaca[nilai] || 'tidak ada data'}}
    </div>
  </el-card>
</template>

<script>
export default {
  data() {
    return {
      nilai: 0,
      cuaca: {
        0: "tidak ada data",
        1: "hujan",
        2: "berawan",
        3: "sebagian besar berawan & hujan dalam 12 jam",
        4: "sebagian berawan",
        6: "cerah dan berawan",
        7: "sedikit berawan & hujan dalam 12 jam",
        8: "cerah",
        16: "turun salju",
        18: "berawan & salju dalam 12 jam",
        19: "kebanyakan berawan, hujan atau salju dalam 12 jam",
        22: "berawan salju dalam 12 jam",
        23: "berawan salju dalam 12 jam"
      },
      icon: {
        0: "el-icon-warning-outline",
        1: "el-icon-heavy-rain",
        2: "el-icon-cloudy",
        3: "el-icon-cloudy",
        4: "el-icon-cloudy-and-sunny",
        6: "el-icon-sunny",
        7: "el-icon-light-rain",
        8: "el-icon-sunny",
        16: "el-icon-light-rain",
        18: "el-icon-light-rain",
        19: "el-icon-light-rain",
        22: "el-icon-light-rain",
        23: "el-icon-light-rain"
      }
    };
  },
  methods: {
    getData() {
      const params = { parameter: "data38" };
      axios
        .get("sensorLog/getLastData", { params })
        .then(r => {
          this.nilai = r.data.value;
        })
        .catch(e => {
          this.nilai = 0;
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
</style>
