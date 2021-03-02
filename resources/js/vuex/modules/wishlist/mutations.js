import * as mutations from './types/mutations';

export default {
    [mutations.SET_PRODUCT_WISHLIST]: (state, wishlist_data) => {
        state.wishlist_data = wishlist_data
    },
    [mutations.DELETE_PRODUCT_FROM_WISHLIST]: (state, data) => {
        let i = state.wishlist_data.map(product => product.id).indexOf(data);
              state.wishlist_data.splice(i, 1);
    },

    [mutations.WISHLIST_INCREMENT]: (state, data) => {
        state.wishlist_data[data].quantity++
      },

    [mutations.WISHLIST_DECREMENT]: (state, index) => {
        if (state.wishlist_data[index].quantity > 1) {
          state.wishlist_data[index].quantity--
        }
      },
}


