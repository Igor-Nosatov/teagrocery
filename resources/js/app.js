require('./bootstrap');
window.Vue = require('vue');

import App from './pages/App.vue';
import router from './routing/router'; 
import store from './vuex/index';

Vue.filter('truncate', function(text, length, suffix) {
    if (text.length > length) {
        return text.substring(0, length) + suffix;
    } else {
        return text;
    }
});

const app = new Vue({
    el: '#app',
    router: router,
    store:store,
    render: h => h(App),
});
