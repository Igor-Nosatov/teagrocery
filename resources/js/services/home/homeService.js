import requestService from '../requestService.js';

const apiEndpoint = '/';
const apiSubscribeEndpoint = '/note/add';

const homeService = {
    async fetchNewProducts() {
        const response = await requestService.get(
            apiEndpoint
        );
        return response?.data?.products
    },

    async fetchExpensiveProducts() {
        const response = await requestService.get(
            apiEndpoint
        );
        return response?.data?.products
    },

    async fetchRandomPosts() {
        const response = await requestService.get(
            apiEndpoint
        );
        return response?.data?.posts
    },
    async shopNewsSubscribe(data) {
        const response = await requestService.post(
            apiSubscribeEndpoint,
            data
        );
        return response 
    }
}
export default homeService;