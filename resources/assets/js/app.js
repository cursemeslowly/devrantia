require('./bootstrap');

// window.Vue = require('vue');

import Vue from 'vue'
import Buefy from 'buefy'
import 'buefy/lib/buefy.css'

Vue.use(Buefy)

Vue.component('example-component', require('./components/ExampleComponent.vue'));

var App = new Vue({
    el: '#app',
    data: {
        switchState: true,
        checkboxState: true
    }
})
