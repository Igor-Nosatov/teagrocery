import requestService from './../requestService.js';

const apiEndpoint = '/checkout/add';

const checkoutService = {
    async productCheckout(data) {
        return await requestService.post(
            apiEndpoint,
            data
        );  
    }
}
export default checkoutService;