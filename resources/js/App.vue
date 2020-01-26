<template>
    <el-container>
        <el-header>
            <!-- <span class="brand">MANDALIKA-WEATHER</span> -->
            <el-menu
            class="el-menu-demo"
            mode="horizontal"
            background-color="#545c64"
            text-color="#fff"
            active-text-color="#ffd04b">
                <el-menu-item index="1">MANDALIKA-WEATHER</el-menu-item>
                <!-- <el-submenu index="2">
                    <template slot="title">Workspace</template>
                    <el-menu-item index="2-1">item one</el-menu-item>
                    <el-menu-item index="2-2">item two</el-menu-item>
                    <el-menu-item index="2-3">item three</el-menu-item>
                    <el-submenu index="2-4">
                    <template slot="title">item four</template>
                    <el-menu-item index="2-4-1">item one</el-menu-item>
                    <el-menu-item index="2-4-2">item two</el-menu-item>
                    <el-menu-item index="2-4-3">item three</el-menu-item>
                    </el-submenu>
                </el-submenu> -->
                <el-menu-item index="3">Chart</el-menu-item>
                <el-menu-item index="3">Table</el-menu-item>
            </el-menu>
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
    /* line-height: 40px; */
    /* height: 40px !important; */
    background-color: #535b64;
    /* color: #fff; */
    /* padding: 0 20px; */
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
