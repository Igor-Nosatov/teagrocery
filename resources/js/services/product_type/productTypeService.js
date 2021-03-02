import requestService from '../requestService.js';

const apiEndpoint = '/types';

const productTypeService = {
    async fetchProductTypes() {
        const response = await requestService.get(
            apiEndpoint
        );
        return response?.data?.types
    },
}
export default productTypeService;