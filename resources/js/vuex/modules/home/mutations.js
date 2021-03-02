import * as mutations from './types/mutations';

export default {
  [mutations.SET_PRODUCT_TYPES]: (state, types) => {
    state.types = types;
  },
  [mutations.SET_NEW_PRODUCTS]: (state, new_products) => {
    state.new_products = new_products;
  },
  [mutations.SET_EXPENSIVE_PRODUCTS]: (state, expensive_products) => {
    state.expensive_products = expensive_products;
  }, 
  [mutations.SET_RANDOM_POSTS_TO_STATE]: (state, random_posts) => {
    state.random_posts = random_posts;
  },
  [mutations.SET_TO_NEWSLETTER]: (state, neswletter) => {
    state.neswletter = neswletter;
  }
}