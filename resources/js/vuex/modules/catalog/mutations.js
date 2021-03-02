import * as mutations from './types/mutations';

export default {
    [mutations.SET_CATALOG_PRODUCT]: (state, catalog_products) => {
        state.catalog_products = catalog_products;
    },
    [mutations.SET_CATEGORIES]: (state, categories) => {
        state.categories = categories;
    },
    [mutations.SET_PRICE_FOR_PRODUCTS]: (state, prices) => {
        state.prices = prices;
    },
    [mutations.SET_PRODUCERS]: (state, producers) => {
        state.producers = producers;
    },
}

