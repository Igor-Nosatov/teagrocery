import axios from 'axios';
import router from './../../routing/router';
import auth from './auth';

const api = {
    apiUrl: `/api`,
    post(path, body) {
        return axios.post(`${this.apiUrl}${path}`, body).catch(api.handleError);
    },
    get(path) {
        return axios.get(`${this.apiUrl}${path}`).catch(api.handleError);
    },
    handleError(err) {
        const code = err.response.status;
        if (code === 403) {
            console.log('forbidden');
        }
        if (code === 401) {
            console.log('unauthorized');
            auth.resetHeaders();
            router.push({ name: 'home' });
        }
        return Promise.reject(err);
    },
    user: {
        get() {
            return api.get(`/user`);
        }
    }
};

export default api;