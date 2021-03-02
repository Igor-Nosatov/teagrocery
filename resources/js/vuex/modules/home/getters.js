import * as getters from './types/getters';

export default {
    [getters.PRODUCT_BY_TYPE_RANDOM]: (state) => {
        return state.types[Math.floor(Math.random() * state.types.length)];
      }
}


