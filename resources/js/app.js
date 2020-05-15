require('./bootstrap');

window.Vue = require('vue');

import Vue from 'vue';

//Vue.use(Buefy);

let app = new Vue({
    el: '#app',
    data: {}
});

$(document).ready(function () {
    $('button.dropdown').hover(function(e) {
        $(this).toggleClass('is-open');
    });
});
