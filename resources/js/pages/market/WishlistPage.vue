<template>
<main class="main pt-5 pb-5">
    <div class="wrapper">
        <div class="row no-gutters">
            <BreadcrumbItem :pageName="pageName" class="pl-4"/>
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <div class="product-cart">
                    <CartItem v-for="(product, index) in wishes" :product="product" :key="index"  @deleteWishlist="deleteWishlist" @increment="increment" @decrement="decrement" />
                </div>
            </div>
            <div v-if="wishes.length">
                <div class="total-price-block mt-4 mb-4 pl-5 pr-5 w-100">
                    <div class="cart-wrapper">
                        <div class="row no-gutters total-price-info pt-4">
                            <div class="col-12 col-sm-12 col-md-5 col-lg-5">
                                <h5 class="pl-3 product-total-price font-weight-bold">
                                    Итого товаров на сумму :
                                    {{ cartTotal }}
                                </h5>
                            </div>
                            <div class="col-12 col-sm-12 col-md-7 col-lg-7 p-2">
                                <div class="order-action mx-auto">
                                    <router-link :to="{ name: 'home' }">Продолжить покупки
                                        <picture>
                                            <img :src="
                                                        `storage/img/link.svg`
                                                    " alt="" />
                                        </picture>
                                    </router-link>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div v-if="!wishes.length">
                <div class="total-price-block mt-4 mb-4 pl-5 pr-5 mx-auto">
                    <h2>
                        Товара списке желаний нет, вернитесь назад или
                        перейдите в каталог или на главную страницу
                    </h2>
                    <router-link :to="{ name: 'home' }" class="btn-main w-25 mt-2 p-3">Главная страница</router-link>
                </div>
            </div>
        </div>
    </div>
</main>
</template>

<script>
import { mapActions, mapGetters } from "vuex";
import * as actions from "./../../vuex/modules/wishlist/types/actions";
import * as getters from "./../../vuex/modules/wishlist/types/getters";
import BreadcrumbItem from "./../../components/common_components/BreadcrumbItem.vue";
import CartItem from "./../../components/wishlist_components/CartItem.vue";

export default {
    name: "WishlistPage",
    components: {
        BreadcrumbItem,
        CartItem
    },
    data() {
        return {
            pageName: "Понравившиеся товары",
            wishes: []
        };
    },
    async created() {
        this.wishes = await this.fetchProductWishlist();
    },
    computed: {
        ...mapGetters("wishlist", {
            cartTotal: getters.WISHLIST_TOTAL_SUM
        })
    },
    methods: {
        ...mapActions("wishlist", {
            fetchProductWishlist: actions.FETCH_PRODUCT_WISHLIST,
            deleteProductFromWishlist: actions.DELETE_PRODUCT_BY_ID,
            incrementWishlist: actions.INCREMENT_WISHLIST_PRODUCT,
            decrementWishlist: actions.DECREMENT_WISHLIST_PRODUCT,
        }),
        async deleteWishlist(data) {
            await this.deleteProductFromWishlist(data);
        },
        async increment(data) {
            return await this.incrementWishlist(data);
        },
        async decrement(data) {
            return await this.decrementWishlist(data);
        },
    }
};
</script>
