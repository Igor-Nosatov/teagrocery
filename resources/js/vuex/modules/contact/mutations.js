import * as mutations from './types/mutations';

export default {
  [mutations.SET_CLIENT_SEND_CONTACT]: (state, contact_data) => {
    state.contact_data = contact_data;
  }, 
}