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
                    text: 'UV',
                    textStyle: {
                        fontSize: 13
                    }
                },
                series: [
                    {
                        min: 0,
                        max: 10,
                        type: 'gauge',
                        startAngle: 200,
                        endAngle: -20,
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
                        detail: {
                            fontSize: 24,
                            fontWeight: 'bold',
                            color: '#000',
                        },
                        title: {
                            offsetCenter: [0, '70%'],
                            fontSize: 12,
                        },
                        data: [{value: 2, name: 'index'}]
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
