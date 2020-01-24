<template>
    <div>
        <v-chart :options="chartOptions" class="echarts"></v-chart>
    </div>
</template>

<script>
import 'echarts/lib/component/tooltip'
import 'echarts/lib/component/legend'
import 'echarts/lib/component/title'
import 'echarts/lib/chart/gauge'

export default {
    props: ['header', 'unit', 'min', 'max', 'start-angle', 'end-angle'],
    data() {
        return {
            chartOptions: {
                title: {
                    show: true,
                    text: this.header
                },
                tooltip: {
                    formatter: '{a} <br/>{b} : {c}%'
                },
                radius: '30%',
                toolbox: {
                    feature: {
                        restore: {},
                        saveAsImage: {}
                    }
                },
                series: [
                    {
                        name: '速度',
                        type: 'gauge',
                        center: ['25%', '50%'],
                        z: 3,
                        min: this.min,
                        max: this.max,
                        // splitNumber: 11,
                        // radius: '50%',
                        axisLine: {            // 坐标轴线
                            lineStyle: {       // 属性lineStyle控制线条样式
                                width: 3
                            }
                        },
                        axisTick: {            // 坐标轴小标记
                            length: 6,        // 属性length控制线长
                            lineStyle: {       // 属性lineStyle控制线条样式
                                color: 'auto'
                            }
                        },
                        splitLine: {           // 分隔线
                            length: 9,         // 属性length控制线长
                            lineStyle: {       // 属性lineStyle（详见lineStyle）控制线条样式
                                color: 'auto'
                            }
                        },
                        // axisLabel: {
                        //     backgroundColor: 'auto',
                        //     borderRadius: 2,
                        //     color: '#eee',
                        //     padding: 3,
                        //     textShadowBlur: 2,
                        //     textShadowOffsetX: 1,
                        //     textShadowOffsetY: 1,
                        //     textShadowColor: '#222'
                        // },
                        title: {
                            // 其余属性默认使用全局文本样式，详见TEXTSTYLE
                            fontWeight: 'bolder',
                            fontSize: 12,
                            // fontStyle: 'italic'
                        },
                        pointer: {
                            width:2
                        },
                        detail: {
                            formatter: function (value) {
                                value = (value + '').split('.');
                                value.length < 2 && (value.push('00'));
                                return ('00' + value[0]).slice(-2)
                                    + '.' + (value[1] + '00').slice(0, 2);
                            },
                            fontSize: 14,
                            fontWeight: 'bolder',
                            // borderRadius: 3,
                            // backgroundColor: '#444',
                            // borderColor: '#aaa',
                            // shadowBlur: 5,
                            // shadowColor: '#333',
                            // shadowOffsetX: 0,
                            // shadowOffsetY: 3,
                            // borderWidth: 2,
                            // textBorderColor: '#000',
                            // textBorderWidth: 2,
                            // textShadowBlur: 2,
                            // textShadowColor: '#fff',
                            // textShadowOffsetX: 0,
                            // textShadowOffsetY: 0,
                            // fontFamily: 'Arial',
                            // width: 100,
                            // color: '#eee',
                            // rich: {}
                        },
                        data: [{value: 40, name: this.unit}]
                    }
                ]
            },
        }
    },
    mounted() {
        setInterval(() => {
            this.chartOptions.series[0].data[0].value = (Math.random() * 100).toFixed(2) - 0;
        },2000);
    }
}
</script>

<style lang="scss" scoped>
.echarts {
    height: 210px;
}
</style>
