<template>
    <main class="main pt-5 pb-5">
        <div class="wrapper">
            <div
                class="row no-gutters mb-2   justify-content-center  mt-5 mb-5"
            >
                <BreadcrumbItem :pageName="pageName" class="pl-4" />
                <BlogItem
                    v-for="(post, index) in posts"
                    :post="post"
                    :key="index"
                    class="col-11 col-sm-11 col-md-5 col-lg-5 mx-auto"
                ></BlogItem>
            </div>
        </div>
    </main>
</template> 

<script>
import { mapState, mapActions } from "vuex";
import * as actions from "./../../vuex/modules/post/types/actions";
import BlogItem from "./../../components/common_components/BlogItem.vue";
import BreadcrumbItem from "./../../components/common_components/BreadcrumbItem.vue";

export default {
    name: "PostPage",
    components: {
        BlogItem,
        BreadcrumbItem
    },
    data() {
        return {
            pageName: "Блог"
        };
    },
    async created() {
        await this.fetchPosts();
    },
    computed: {
        ...mapState("posts", ["posts"])
    },
    methods: {
        ...mapActions("posts", {
            fetchPosts: actions.GET_POSTS
        })
    }
};
</script>
