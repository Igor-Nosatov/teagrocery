import requestService from './../requestService.js';

const apiEndpoint = '/cart';
const apiAddEndpoint = '/cart/add';
const apiDeleteEndpoint = '/cart/delete';
const apiUpdateEndpoint = '/cart/update';

const cartService = {
    async addToCart(product, quantity){
        return await requestService.post(
            apiAddEndpoint, product, quantity
        );
    },
    async fetchCart() {
        const response = await requestService.get(
            apiEndpoint
        );
        return response?.data?.carts
    },
    async deleteProductByCartId(data) {
        return await requestService.delete(apiDeleteEndpoint + `/${data}`);
    },
    async qtyProduct(data, body) {
        return await requestService.post(apiUpdateEndpoint + `/${data}`, body);
    },
    async sendToCartFromWishlist(product, quantity){
        return await requestService.post(
            apiAddEndpoint,product, quantity
        );  
    }
}
export default cartService; 