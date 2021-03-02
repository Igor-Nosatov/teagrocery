import * as actions from './types/actions';
import * as mutations from './types/mutations';
import homeService from '../../../services/home/homeService';
import productTypeService from '../../../services/product_type/productTypeService';

export default {
  [actions.GET_PRODUCT_TYPES]: async ({ commit }) => {
    try {
      const types = await productTypeService.fetchProductTypes();
      commit(mutations.SET_PRODUCT_TYPES, types);
      return types;
    } catch (error) {
      console.log(error);
    }
  }, 
  [actions.GET_NEW_PRODUCTS]: async ({ commit }) => {
    try {
      const new_products = await homeService.fetchNewProducts();
      commit(mutations.SET_NEW_PRODUCTS, new_products);
      return new_products;
    } catch (error) {
      console.log(error);
    }
  },
  [actions.GET_EXPENSIVE_PRODUCTS]: async ({ commit }) => {
    try {
      const expensive_products = await homeService.fetchExpensiveProducts();
      commit(mutations.SET_EXPENSIVE_PRODUCTS, expensive_products);
      return expensive_products;
    } catch (error) {
      console.log(error);
    }
  },
  [actions.GET_RANDOM_POSTS]: async ({ commit }) => {
    try {
      const random_posts = await homeService.fetchRandomPosts();
      commit(mutations.SET_RANDOM_POSTS_TO_STATE, random_posts);
      return random_posts;
    } catch (error) {
      console.log(error);
    }
  },

  [actions.ADD_TO_NEWSLETTER]: async ({ commit }, data) => {
    try {
      const neswletter = await homeService.shopNewsSubscribe(data);
      commit(mutations.SET_TO_NEWSLETTER, neswletter);
      return neswletter;
    } catch (error) {
      console.log(error);
    }
  },
}