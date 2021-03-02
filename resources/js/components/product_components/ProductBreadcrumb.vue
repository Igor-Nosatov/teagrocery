<template>
<div class="col-12">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <router-link :to="{name: 'home'}">Главная</router-link>
            </li>
            <li class="breadcrumb-item">{{category.name}}</li>
            <li class="breadcrumb-item active" aria-current="page">{{product.name}}</li>
        </ol>
    </nav>
    <h3 class="font-weight-bold pl-3">{{category.name}}</h3>
</div>
</template>

<script>
import { mapActions } from "vuex";
import * as actions from "./../../vuex/modules/product/types/actions";

export default {
    name:'ProductBreadcrumb',
    data() {
        return {
            product: [],
            category:[]
        };
    },
    async created() {
         await this.fetchProductApi();
         await this.fetchCategoryApi();
    },
    methods: {
        ...mapActions("product", {
            fetchSingleProduct: actions.FETCH_SINGLE_PRODUCT,
        }),
        async fetchProductApi() {
            await this.fetchSingleProduct(`${this.$route.params.title}`)
            .then(res => this.product = res.data.product)
        },
        async fetchCategoryApi() {
            await this.fetchSingleProduct(`${this.$route.params.title}`)
            .then(res => this.category = res.data.product.categories)
        },
    }
};
</script>


