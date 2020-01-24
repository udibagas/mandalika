<template>
    <el-container>
        <el-header>
            <span class="brand">MANDALIKA-WEATHER</span>
        </el-header>
        <el-main>
            <router-view></router-view>
        </el-main>
    </el-container>
</template>

<script>
export default {
}
</script>

<style lang="css" scoped>
.el-header {
    line-height: 40px;
    height: 40px !important;
    background-color: #3d464d;
    color: #fff;
    padding: 0 20px;
}

.el-main {
    height: calc(100vh - 60px);
    overflow: auto;
}

.brand {
    font-weight: bold;
    font-size: 16px;
}
</style>
