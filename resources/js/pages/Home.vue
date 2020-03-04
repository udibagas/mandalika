<template>
  <div class="d-flex flex-wrap justify-content-center align-items-start">
    <Angin class="flex-fill" v-for="i in [100, 70, 40, 10, 2]" :key="i" :height="i" />
    <Udara class="flex-fill" v-for="i in [100, 10, 2]" :key="i" :height="i" />
    <Kelembaban class="flex-fill" />
    <CurahHujan class="flex-fill" />
    <HujanSaatIni class="flex-fill" />
    <Penguapan class="flex-fill" />
    <Uv class="flex-fill" />
    <RadiasiMatahari class="flex-fill" />
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

export default {
  components: {
    Angin,
    Udara,
    Kelembaban,
    CurahHujan,
    Penguapan,
    RadiasiMatahari,
    Uv,
    HujanSaatIni
  }
};
</script>

<style lang="scss" scoped>
</style>
