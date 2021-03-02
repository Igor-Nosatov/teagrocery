import requestService from './../requestService.js';

const apiEndpoint = '/blog';

const postService = {
    async fetchAllPosts() {
        const response = await requestService.get(
            apiEndpoint
        );
        return response?.data?.posts
    }, 
    async fetchPost(params) {
        const response = await requestService.get(
            apiEndpoint + params
        );
        return response?.data?.post
    }
}
export default postService;