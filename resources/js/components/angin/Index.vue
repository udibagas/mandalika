<template>
  <div>
    <Kecepatan :height="height" style="margin-bottom:5px;" />
    <Arah :height="height" style="margin-bottom:5px;" />
  </div>
</template>

<script>
import Arah from "./Arah";
import Kecepatan from "./Kecepatan";
import Log from "./Log";

export default {
  props: ["height"],
  components: { Arah, Kecepatan, Log }
};
</script>

<style lang="scss" scoped>
</style>
