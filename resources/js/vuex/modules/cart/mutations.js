import * as mutations from './types/mutations';

export default {
    [mutations.SET_PRODUCT_CART]: (state, product_cart_data) => {
        state.product_cart_data = product_cart_data
    },
    [mutations.DELETE_PRODUCT_FROM_CART]: (state, data) => {
        let i = state.product_cart_data.map(product => product.id).indexOf(data);
              state.product_cart_data.splice(i, 1);
    },

    [mutations.CART_INCREMENT]: (state, data) => {
        state.product_cart_data[data].quantity++
      },

    [mutations.CART_DECREMENT]: (state, index) => {
        if (state.product_cart_data[index].quantity > 1) {
          state.product_cart_data[index].quantity--
        }
      }
}


