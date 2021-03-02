<template>
<h5 class="pt-2 pb-2 text-justify">{{product.description}}</h5>
</template>

<script>
import { mapActions } from "vuex";
import * as actions from "./../../vuex/modules/product/types/actions";

export default {
    data() {
        return {
            product: [],
        };
    },
    async created() {
         await this.fetchProductApi();
    },
    methods: {
        ...mapActions("product", {
            fetchSingleProduct: actions.FETCH_SINGLE_PRODUCT,
        }),
        async fetchProductApi() {
            await this.fetchSingleProduct(`${this.$route.params.title}`).then(
                response => 
                    this.product = response.data.product
            );
        },
    }
};
</script>


