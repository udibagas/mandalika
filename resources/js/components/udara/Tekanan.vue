<template>
    <el-card>
        <v-chart :options="chartOptions" class="echarts"></v-chart>
    </el-card>
</template>

<script>
import 'echarts/lib/component/tooltip'
import 'echarts/lib/component/legend'
import 'echarts/lib/component/title'
import 'echarts/lib/chart/line'

export default {
    props: ['height'],
    data() {
        return {
            chartOptions: {
                xAxis: {
                    type: 'category',
                    data: ['1', '2', '3'],
                },
                yAxis: {
                    type: 'value',
                    min: 20,
                    max: 32
                },
                axisLine: {
                    lineStyle: {
                        opacity: 0
                    }
                },
                series: [{
                    name: '100m',
                    data: [30, 29, 28],
                    type: 'line',
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
