import * as getters from './types/getters';

export default {
  [getters.GET_SINGLE_PRODUCT]: (state) => {
    return state.product;
  },
}


