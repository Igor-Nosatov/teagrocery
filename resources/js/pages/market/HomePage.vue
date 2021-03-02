<template>
<main class="main">
    <div class="banner-section w-100">
        <BannerItem />
    </div>
    <div class="category-section">
        <CategoryArea />
    </div>
    <div class="popular-goods-section">
        <div class="row no-gutters">
            <div class="col-12">
                <h3 class="text-center section-title">Популярные товары</h3>
            </div>
            <CatalogItem v-for="product in new_products" :product="product" :key="product.id">
            </CatalogItem>
        </div>
    </div>
    <div class="subscribe-section mt-5">
        <SubscribeItem />
    </div>
    <div class="discount-section">
        <div class="row no-gutters">
            <div class="col-12">
                <h3 class="text-center section-title">Новое поступление</h3>
            </div>
            <CatalogItem v-for="product in expensive_products" :product="product" :key="product.id">
            </CatalogItem>
        </div>
    </div>
    <div class="blog-section mt-4 mb-4">
        <div class="row justify-content-md-center no-gutters">
            <div class="col-12">
                <h3 class="text-center section-title">Статьи и Новости</h3>
            </div>
        </div>
        <div class="row no-gutters">
            <BlogItem v-for="post in random_posts" :post="post" :key="post.id" class="col-10 col-sm-10 col-md-5 col-lg-5 mx-auto"></BlogItem>
        </div>
        <div class="row justify-content-md-center no-gutters">
            <div class="col-12 mt-5  d-flex justify-content-around">
                <router-link :to="{name: 'posts'}" class="btn-main mx-auto p-3">
                    Перейти в блог
                </router-link>
            </div>
        </div>
    </div>
</main>
</template>

<script>
import { 
    mapState,
    mapActions,
    mapGetters
} from "vuex";
import * as actions from './../../vuex/modules/home/types/actions';
import * as getters from './../../vuex/modules/home/types/getters';
import BannerItem from './../../components/home_components/BannerItem.vue';
import CategoryArea from './../../components/home_components/CategoryArea.vue';
import SubscribeItem from './../../components/home_components/SubscribeItem.vue';
import CatalogItem from './../../components/common_components/CatalogItem.vue';
import BlogItem from './../../components/common_components/BlogItem.vue';

export default {
    name:'HomePage',
    components: {
        BannerItem,
        CategoryArea,
        SubscribeItem,
        CatalogItem,
        BlogItem
    },
    async created() {
        this.fetchNewProducts();
        this.fetchExpensiveProducts();
        this.fetchRandPosts();
    },
    computed: {
        ...mapState("home", [
             'new_products',
             'expensive_products',
             'random_posts'
        ]),
        ...mapGetters("home", {
            type: getters.PRODUCT_BY_TYPE_RANDOM
        }),
       
    },
    methods: {
        ...mapActions("home", {
            fetchRandPosts: actions.GET_RANDOM_POSTS,
            fetchExpensiveProducts: actions.GET_EXPENSIVE_PRODUCTS,
            fetchNewProducts: actions.GET_NEW_PRODUCTS,
        })
    }
    
}
</script>
