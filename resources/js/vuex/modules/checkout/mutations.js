import * as mutations from './types/mutations';

export default {
  [mutations.SET_CHECKOUT_DATA]: (state, checkout_data) => {
    state.checkout_data = checkout_data;
  },
} 