import * as actions from './types/actions';
import * as mutations from './types/mutations';
import postService from '../../../services/post/postService'

export default {
  [actions.GET_POSTS]: async ({ commit }) => {
    try {
      const posts = await postService.fetchAllPosts()
      commit(mutations.SET_POSTS_TO_STATE, posts);
      return posts;
    } catch (error) {
      console.log(error);
    }
  },
}