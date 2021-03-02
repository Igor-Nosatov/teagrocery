import * as getters from './types/getters';

export default {
    [getters.GET_CATALOG_PRODUCTS]: (state) =>  {
        return state.catalog_products;
    }
}



