import requestService from './../requestService.js';

const apiEndpoint = '/contact/add';

const contactService = {
    async clientSendContact(data) {
        return await requestService.post(
            apiEndpoint,
            data
        );  
    }
}
export default contactService;