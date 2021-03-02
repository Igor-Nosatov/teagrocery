import Vue from 'vue';
import Vuex from 'vuex';
import posts from './modules/post/index';
import home from './modules/home/index';
import contact from './modules/contact/index';
import checkout from './modules/checkout/index';
import cart from './modules/cart/index'
import wishlist from './modules/wishlist/index'
import catalog from './modules/catalog/index'
import product from './modules/product/index'

Vue.use(Vuex);

export default new Vuex.Store({
    modules: {
        home,
        posts,
        contact,
        checkout,
        cart,
        wishlist,
        catalog,
        product,
    }
});

