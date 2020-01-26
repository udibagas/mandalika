<template>
    <el-card>
        <v-chart :options="chartOptions" class="echarts"></v-chart>
    </el-card>
</template>

<script>
import 'echarts/lib/component/tooltip'
import 'echarts/lib/component/legend'
import 'echarts/lib/component/title'
import 'echarts/lib/chart/gauge'
import 'echarts/lib/component/polar'

export default {
    props: ['height'],
    data() {
        return {
            chartOptions: {
                grid: {
                    bottom: '0px'
                },
                angleAxis: {
                    type: 'category',
                    // startAngle: 90,
                    data: ['N', 'NE', 'E', 'SE', 'S', 'SW', 'W', 'NW']
                },
                radiusAxis: {},
                polar: {},
                title: {
                    text: 'ARAH ANGIN',
                    subtext: this.height + 'm',
                    textStyle: {
                        fontSize: 13
                    },
                    subtextStyle: {
                        color: '#333',
                        fontSize: 13,
                        fontWeight: 'bold'
                    }
                },
                series: [{
                    type: 'bar',
                    data: [1, 2, 3, 4, 3, 5, 1, 2],
                    coordinateSystem: 'polar',
                    name: 'A',
                    // stack: 'a'
                }]
            }
        }
    }

}
</script>

<style lang="scss" scoped>
.echarts {
    height:200px;
}
</style>
