window.axios = require('axios');
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

import Vue from 'vue'
import ElementUI from 'element-ui'
import locale from 'element-ui/lib/locale/lang/en'
import router from './router'
import store from './store'
import App from './App'

Vue.use(ElementUI, { locale });
Vue.component('v-chart', require('vue-echarts/components/ECharts').default)

const app = new Vue({
    el: '#app',
    router, store,
    render: (h) => h(App)
});
