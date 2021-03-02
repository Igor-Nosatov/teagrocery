import * as mutations from './types/mutations';

export default {
  [mutations.SET_POSTS_TO_STATE]: (state, posts) => {
    state.posts = posts;
  },
}