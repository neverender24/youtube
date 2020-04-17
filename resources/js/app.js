require('./bootstrap');

window.Vue = require('vue');


import Compare from "./components/Compare";

const app = new Vue({
    el: '#app',
    components:  {Compare} 
});
