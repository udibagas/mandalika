<template>
  <div class="d-flex">
    <Kecepatan class="flex-fill" :height="height" />
    <Arah class="flex-fill" :height="height" />
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
