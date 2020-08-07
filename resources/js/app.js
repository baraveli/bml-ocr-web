require('./bootstrap');


Vue.component('bml-ocr-component', require('./components/BmlOcrComponent.vue').default);

const app = new Vue({
    el : '#app'
})