import * as actions from './types/actions';
import * as mutations from './types/mutations';
import checkoutService from '../../../services/checkout/checkoutService'

export default {
  [actions.ADD_CHECKOUT_DATA]: async ({ commit }, data) => {
    try {
      const checkout_data = await checkoutService.productCheckout(data)
      commit(mutations.SET_CHECKOUT_DATA, checkout_data);
      return checkout_data;
    } catch (error) {
      console.log(error); 
    } 
  },
}