require('./bootstrap');

window.Vue = require('vue');

Vue.component('newsletter-component', require('./components/NewsletterComponent.vue').default);

const app = new Vue({
    el: '#app',
});
