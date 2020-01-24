<template>
    <el-card>
        <v-chart :options="chartOptions" class="echarts"></v-chart>
    </el-card>
</template>

<script>
import 'echarts/lib/component/tooltip'
import 'echarts/lib/component/legend'
import 'echarts/lib/component/title'
import 'echarts/lib/chart/bar'

export default {
    props: ['height'],
    data() {
        return {
            chartOptions: {
                title: {
                    text: 'PENGUAPAN AIR',
                    textStyle: {
                        fontSize: 13
                    },
                },
                xAxis: {
                    type: 'category',
                    data: ['Mon', 'Tue', 'Wed']
                },
                yAxis: {
                    type: 'value'
                },
                axisLine: {
                    lineStyle: {
                        type: 'dashed',
                        opacity: 0
                    }
                },
                series: [{
                    data: [820, 932, 901],
                    type: 'bar',
                    color: '#54a8cd'
                }]
            }
        }
    }

}
</script>

<style lang="scss" scoped>
.echarts {
    height: 200px;
}
</style>
