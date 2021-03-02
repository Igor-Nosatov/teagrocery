import * as mutations from './types/mutations';

export default {
  [mutations.SET_SINGLE_PRODUCT]: (state, product) => {
    state.product = product;
  },
  [mutations.SET_TO_CART]: (state, cart_product) => {
    state.cart_product = cart_product;
  },
  [mutations.SET_TO_WISHLIST]: (state, wishlist_product) => {
    state.wishlist_product = wishlist_product;
  },
  [mutations.SET_FEEDS]: (state, feeds) => {
    state.feeds = feeds;
  },
  [mutations.SET_PRODUCT_FEEDS]: (state, feed_product) => {
    state.feed_product = feed_product;
  },
}




