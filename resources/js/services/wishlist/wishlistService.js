import requestService from './../requestService.js';

const apiEndpoint = '/wishlist';
const apiAddEndpoint = '/wishlist/add';
const apiUpdateEndpoint = '/wishlist/update';
const apiDeleteEndpoint = '/wishlist/delete';

const wishlistService = {
    async addToWishlist(product, quantity){
        return await requestService.post(
            apiAddEndpoint, product, quantity
        );
    },
    async fetchWishlist(){
        const response = await requestService.get(
            apiEndpoint
        );
        return response?.data?.wishes
    },
    async addProductWishlist(){
        return await requestService.post(
            apiAddEndpoint,
            data
        );  
    },
    async updateProductWishlist(data, body){
        return await requestService.post(apiUpdateEndpoint + `/${data}`, body);
    },
    async deleteProductWishlist(data){
        return await requestService.delete(apiDeleteEndpoint + `/${data}`);
    }
}
export default wishlistService; 


