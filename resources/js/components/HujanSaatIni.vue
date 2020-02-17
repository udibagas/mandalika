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
                grid: {
                    left: '70px',
                    bottom: '30px'
                },
                title: {
                    text: 'HUJAN SAAT INI',
                    textStyle: {
                        fontSize: 13
                    }
                },
                xAxis: {
                    type: 'category',
                    data: ['Day', 'Storm', 'Rate'],
                    axisLabel: {
                        interval: 0,
                        rotate: 40
                    },
                },
                yAxis: {
                    type: 'value',
                    splitNumber: 5,
                    min: 0,
                    max: 5,
                    axisLabel: {
                        formatter: '{value} in³/jam'
                    }
                },
                axisLine: {
                    lineStyle: {
                        type: 'dashed',
                        opacity: 0
                    }
                },
                series: [{
                    label: { show: true, position: 'top', color: '#000', fontWeight: 'bold' },
                    data: [
                        { value: 0.60, itemStyle: { color: '#38926e' } },
                        { value: 2.43, itemStyle: { color: '#55a9ce' } },
                        { value: 3.43, itemStyle: { color: '#e77f20' } },
                    ],
                    type: 'bar',
                    color: '#54a8cd',
                    // barWidth: '50%'
                }]
            }
        }
    }

}
</script>

<style lang="scss" scoped>
.echarts {
    max-width: 180px;
    height: 200px;
}
</style>
