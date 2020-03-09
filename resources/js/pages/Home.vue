<template>
  <div>
    <div class="d-flex">
      <Angin class="flex-fill mr-1" :height="i" v-for="i in [100, 70, 40, 10, 2]" :key="'angin'+i" />
    </div>

    <el-row :gutter="5">
      <el-col :span="8" v-for="i in [100, 10, 2]" :key="'udara'+i">
        <Udara :height="i" />
      </el-col>
    </el-row>

    <el-row :gutter="5" style="margin-bottom:5px;">
      <el-col :span="6">
        <PrakiraanCuaca />
      </el-col>
      <el-col :span="6">
        <Kelembaban />
      </el-col>
      <el-col :span="6">
        <Uv />
      </el-col>
      <el-col :span="6">
        <RadiasiMatahari />
      </el-col>
    </el-row>

    <el-row :gutter="5" style="margin-bottom:5px;">
      <el-col :span="8">
        <CurahHujan />
      </el-col>
      <el-col :span="8">
        <HujanSaatIni />
      </el-col>
      <el-col :span="8">
        <Penguapan />
      </el-col>
    </el-row>
  </div>
</template>

<script>
import Angin from "../components/angin/Index";
import Udara from "../components/udara/Index";
import Kelembaban from "../components/udara/Kelembaban";
import CurahHujan from "../components/udara/CurahHujan";
import Penguapan from "../components/udara/Penguapan";
import RadiasiMatahari from "../components/RadiasiMatahari";
import Uv from "../components/Uv";
import HujanSaatIni from "../components/HujanSaatIni";
import PrakiraanCuaca from "../components/PrakiraanCuaca";

export default {
  components: {
    Angin,
    Udara,
    Kelembaban,
    CurahHujan,
    Penguapan,
    RadiasiMatahari,
    Uv,
    HujanSaatIni,
    PrakiraanCuaca
  }
};
</script>

<style lang="scss" scoped>
</style>
