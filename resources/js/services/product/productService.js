import requestService from './../requestService.js';

const apiEndpoint = '/catalog/product/';
const apiEndpointGetFeedback = '/feedback/get/';
const apiEndpointAddFeedback = '/feedback/add';

const productService = { 
    async fetchProductApi(params) {
        const response = await requestService.get(
            apiEndpoint + params
        );
        return response
    }, 
    async fetchFeedbackApi(params) {
        const response = await requestService.get(
            apiEndpointGetFeedback + params
        );
        return response
    }, 
    async addFeedbackAction(feedback){
        return await requestService.post(
            apiEndpointAddFeedback, feedback
        );
    },
}
export default productService;