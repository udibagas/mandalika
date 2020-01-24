<template>
    <el-row :gutter="5">
        <el-col :span="12">
            <Log :height="height" style="margin-bottom:5px" />
        </el-col>
        <el-col :span="12">
            <Kecepatan :height="height" style="margin-bottom:5px" />
            <Arah :height="height" style="margin-bottom:5px" />
        </el-col>
    </el-row>
</template>

<script>
import Arah from './Arah'
import Kecepatan from './Kecepatan'
import Log from './Log'

export default {
    props: ['height'],
    components: { Arah, Kecepatan, Log }
}
</script>

<style lang="scss" scoped>

</style>
