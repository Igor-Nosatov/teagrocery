<template>
    <main role="main" class="pt-5 pb-5">
        <div class="wrapper">
            <div class="row no-gutters justify-content-md-center">
                <div class="col-lg-12">
                    <h3 class="page-title">Название поста: {{ post.name }}</h3>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <router-link :to="{ name: 'home' }"
                                    >Главная</router-link
                                >
                            </li>
                            <li class="breadcrumb-item">
                                <router-link :to="{ name: 'posts' }"
                                    >Блог</router-link
                                >
                            </li>
                            <li
                                class="breadcrumb-item active"
                                aria-current="page"
                            >
                                Название поста -> {{ post.name }}
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="container">
                <div class="row no-gutters justify-content-md-center">
                    <div class="col-md-8 blog-main">
                        <h2 class="mt-4 pb-4 mb-4 font-italic border-bottom">
                            {{ post.name }}
                        </h2>
                        <img
                            :src="'/storage/img/' + post.img_url"
                            class="post-image"
                        />
                        <div class="blog-post">
                            <h2 class="blog-post-title mt-5 mb-5">
                                {{ post.name }}
                            </h2>
                            <p class="text-justify mb-5">
                                {{ post.description }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-md-center no-gutters">
                <div class="col-6 mt-2 mb-3">
                    <router-link
                        :to="{ name: 'posts' }"
                        class="btn-main mx-auto p-3"
                    >
                        Перейти к другим постам
                    </router-link>
                </div>
            </div>
        </div>
    </main>
</template>

<script>
import { mapActions, mapGetters } from "vuex";
import * as actions from "./../../vuex/modules/post/types/actions";
import * as getters from "./../../vuex/modules/post/types/getters";
export default {
    name: "SinglePost",
    async mounted() {
        await this.fetchPosts();
    },
    computed: {
        ...mapGetters("posts", {
            getPostByTitle: getters.POST_BY_TITLE
        }),
        post() {
            const title = `${this.$route.params.title}`;
            return this.getPostByTitle(title);
        }
    },
    methods: {
        ...mapActions("posts", {
            fetchPosts: actions.GET_POSTS
        })
    }
};
</script>
