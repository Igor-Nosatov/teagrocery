import * as actions from './types/actions';
import * as mutations from './types/mutations';
import wishlistService from './../../../services/wishlist/wishlistService'
import cartService from './../../../services/cart/cartService';

export default {
    [actions.FETCH_PRODUCT_WISHLIST]: async ({ commit }) => {
        try {
            const wishlist_data = await wishlistService.fetchWishlist();
            commit(mutations.SET_PRODUCT_WISHLIST, wishlist_data);
            return wishlist_data;
        } catch (error) {
            console.log(error);
        }
    },
    [actions.DELETE_PRODUCT_BY_ID]: async ({ commit }, data) => {
        try {
            await wishlistService.deleteProductWishlist(data)
            commit(mutations.DELETE_PRODUCT_FROM_WISHLIST, data)
        } catch (error) {
            console.log(error);
        }
    },
    [actions.INCREMENT_WISHLIST_PRODUCT]: async ({getters}, data) => {
        try{
            let cart = getters.GET_WISHLIST_PRODUCTS
            let result = cart.filter(product => product.id === data);
            let quantity = result[0].quantity +=1;
            return await wishlistService.updateProductWishlist(data, {quantity});
        }catch(error){
            console.log(error);
        }
    },
    [actions.DECREMENT_WISHLIST_PRODUCT]: async ({getters}, data) => {
        try{
            let cart = getters.GET_WISHLIST_PRODUCTS
            let result = cart.filter(product => product.id === data);
            let quantity = result[0].quantity;
            if (quantity > 1) {
                quantity = result[0].quantity -=1;
            }
            return await wishlistService.updateProductWishlist(data, {quantity});
        }catch(error){
            console.log(error);
        }
    },

    [actions.ADD_TO_CART]: async ( product, quantity) => {
        try {
          const cart_product = await cartService.sendToCartFromWishlist(product, quantity)
          return cart_product;
        } catch (error) {
          console.log(error); 
        } 
      },
}
