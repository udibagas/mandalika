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
                    left: '50px'
                },
                title: {
                    text: 'SUHU UDARA',
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
                xAxis: {
                    type: 'category',
                    data: ['Outside Temp', 'Wind Chill', 'Heat Index', 'Dew Point', 'Inside Temp'],
                    axisLabel: {
                        interval: 0,
                        rotate: 40
                    },
                    splitLine: {
                        show: false
                    }
                },
                yAxis: {
                    type: 'value',
                    splitNumber: 5,
                    min: 0,
                    max: 100,
                    axisLabel: {
                        formatter: '{value} °F'
                    }
                },
                axisLine: {
                    lineStyle: { opacity: 0 }
                },
                series: [{
                    type: 'bar',
                    barWidth: '75%',
                    label: { show: true, position: 'top', color: '#000', fontWeight: 'bold' },
                    data: [
                        { value: 70, itemStyle: { color: '#c52728' } },
                        { value: 67, itemStyle: { color: '#3387c3' } },
                        { value: 71, itemStyle: { color: '#e88021' } },
                        { value: 64, itemStyle: { color: '#38926e' } },
                        { value: 66, itemStyle: { color: '#55a9ce' } },
                    ],
                }]
            }
        }
    }

}
</script>

<style lang="scss" scoped>
.echarts {
    max-width: 400px;
    height: 250px;
}
</style>
