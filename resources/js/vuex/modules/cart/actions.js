import * as actions from './types/actions';
import * as mutations from './types/mutations';
import cartService from './../../../services/cart/cartService'

export default {
    [actions.FETCH_PRODUCT_CART]: async ({ commit }) => {
        try {
            const product_cart_data = await cartService.fetchCart();
            commit(mutations.SET_PRODUCT_CART, product_cart_data);
            return product_cart_data;
        } catch (error) {
            console.log(error);
        }
    },
    [actions.DELETE_PRODUCT_BY_ID]: async ({ commit }, data) => {
        try {
            await cartService.deleteProductByCartId(data)
            commit(mutations.DELETE_PRODUCT_FROM_CART, data)
        } catch (error) {
            console.log(error);
        }
    },
    [actions.INCREMENT_CART_PRODUCT]: async ({getters}, data) => {
        try{
            let cart = getters.GET_CART_PRODUCTS
            let result = cart.filter(product => product.id === data);
            let quantity = result[0].quantity +=1;
            return await cartService.qtyProduct(data, {quantity});
        }catch(error){
            console.log(error);
        }
    },
    [actions.DECREMENT_CART_PRODUCT]: async ({getters}, data) => {
        try{ 
            let cart = getters.GET_CART_PRODUCTS
            let result = cart.filter(product => product.id === data);
            let quantity = result[0].quantity;
            if (quantity > 1) {
                quantity = result[0].quantity -=1;
            }
            return await cartService.qtyProduct(data, {quantity});
        }catch(error){
            console.log(error);
        }
    },
}
