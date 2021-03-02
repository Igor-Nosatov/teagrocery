import * as actions from './types/actions';
import * as mutations from './types/mutations';
import contactService from './../../../services/contact/contactService'

export default { 
  [actions.CLIENT_SEND_CONTACT]: async ({ commit }, data) => {
    try {
      const contact_data = await contactService.clientSendContact(data)
      commit(mutations.SET_CLIENT_SEND_CONTACT, contact_data);
      return contact_data;
    } catch (error) {
      console.log(error); 
    } 
  },
}