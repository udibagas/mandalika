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

export default {
    props: ['height'],
    data() {
        return {
            chartOptions: {
                title: {
                    text: 'KECEPATAN ANGIN',
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
                series: [
                    {
                        min: 0,
                        max: 250,
                        name: 'kecepatan',
                        type: 'gauge',
                        // startAngle: 180,
                        // endAngle: 0,
                        pointer: { width: 3 },
                        splitNumber: 5,
                        axisLine: {
                            lineStyle: {
                                // color: [[0.2, '#28b573'], [0.8, '#28b573'], [1, '#28b573']],
                                width: 7
                            }
                        },
                        axisTick: {
                            length: 9,
                            lineStyle: {
                                color: 'auto'
                            }
                        },
                        splitLine: {
                            length: 10,
                            lineStyle: {
                                color: 'auto'
                            }
                        },
                        radius: '70',
                        center: ['15%', '70%'],
                        // detail: {formatter: '{value}%'},
                        data: [{value: 50, name: 'mph'}]
                    }
                ]
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
