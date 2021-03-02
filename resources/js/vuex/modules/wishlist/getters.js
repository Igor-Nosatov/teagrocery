import * as getters from './types/getters';

export default {
    [getters.GET_WISHLIST_PRODUCTS]: state => {
      return state.wishlist_data;
    },

    [getters.GET_SUM_SUBTOTAL]:(state) => (id) => {
       let item = state.wishlist_data.find(product => product.id === id);
       let itemSubTotal = (item.products.price * item.quantity).toFixed(2) + " L";
       return itemSubTotal;
      },
    [getters.WISHLIST_TOTAL_SUM]: state => {
        let result = [];
            if (state.wishlist_data.length) {
                for (let item of state.wishlist_data) {
                    result.push(item.products.price * item.quantity);
                }
                result = result.reduce(function(sum, el) {
                    return sum + el;
                });
                result = result.toFixed(2) + " L";
                return result;
            } else {
                return 0;
            }
      }
    
}


