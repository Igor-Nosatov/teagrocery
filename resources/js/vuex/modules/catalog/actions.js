import * as actions from './types/actions';
import * as mutations from './types/mutations';
import catalogService from './../../../services/catalog/catalogService';

export default {
    [actions.FETCH_CATALOG_PRODUCT]: async ({ commit }, params, body) => {
        try {
            const catalog = await catalogService.fetchProductsByType(params, body);
            const catalog_products = catalog.data.products.data;
            commit(mutations.SET_CATALOG_PRODUCT, catalog_products);
            return catalog;
        } catch (error) {
            console.log(error);
        }
    },
    [actions.FETCH_CATEGORIES]: async ({ commit }, params, body) => {
        try {
            const categories = await catalogService.fetchCategories(params, body);
            commit(mutations.SET_CATEGORIES, categories);
            return categories;
        } catch (error) {
            console.log(error);
        }
    },
    [actions.FETCH_PRICE_FOR_PRODUCTS]: async ({ commit },params, body) => {
        try {
            const prices = await catalogService.fetchPrices(params, body);
            commit(mutations.SET_PRICE_FOR_PRODUCTS, prices);
            return prices;
        } catch (error) {
            console.log(error);
        }
    },
    [actions.FETCH_PRODUCERS]: async ({ commit },params, body) => {
        try {
            const  producers = await catalogService.fetchProducers(params, body);
            commit(mutations.SET_PRODUCERS,  producers);
            return  producers;
        } catch (error) {
            console.log(error);
        }
    },
}


