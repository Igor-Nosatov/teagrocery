import * as getters from './types/getters';

export default {
  [getters.POSTS]: (state) => {
    return state.posts;
  },
  [getters.POST_BY_TITLE]: (state) => (title) => {
    return state.posts.find(posts => posts.title === title)
  }
}


