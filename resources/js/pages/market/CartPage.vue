<template>
    <main class="main pt-5 pb-5">
        <div class="wrapper">
            <div v-if="carts.length" class="row no-gutters">
                <BreadcrumbItem :pageName="pageName" class="pl-4" />
                
                <CartItem
                    v-for="(product, index) in carts"
                    :product="product"
                    :key="index"
                    @deleteItem="deleteProductId"
                    @increment="increment"
                    @decrement="decrement"
                />
                
                <div class="total-price-block mt-4 mb-4 pl-5 pr-5">
                    <div class="cart-wrapper">
                        <div class="row no-gutters total-price-info pt-4">
                            <div class="col-12 col-sm-12 col-md-2 col-lg-5">
                                <h5
                                    class="pl-3 product-total-price font-weight-bold"
                                >
                                    Итого товаров на сумму : {{ cartTotal }}
                                </h5>
                            </div>
                            <div class="col-12 col-sm-12 col-md-5 col-lg-7">
                                <div class="d-flex flex-row flex-wrap">
                                    <div class="order-info text-left pl-2">
                                        <p class="">
                                            Нажимая на кнопку "Перейти к
                                            оформлению заказа"<br />Вы
                                            соглашаетесь с правилами обработки
                                            данных
                                        </p>
                                    </div>
                                    <div
                                        class="order-action d-flex justify-content-center flex-column  pl-5 pt-3 pb-3"
                                    >
                                        <router-link
                                            class="btn-main p-3 mb-3"
                                            :to="{ name: 'checkout' }"
                                        >
                                            Оформить Заказ</router-link
                                        >
                                        <router-link :to="{ name: 'home' }"
                                            >Продолжить покупки
                                            <picture>
                                                <img
                                                    :src="
                                                        `storage/img/link.svg`
                                                    "
                                                    alt=""
                                                />
                                            </picture>
                                        </router-link>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div v-if="!carts.length">
                <div class="total-price-block mt-4 mb-4 pl-5 pr-5 mx-auto">
                    <h2>
                        Вы ещё не добавили товар, вернитесь назад или
                        перейдите в каталог или на главную страницу
                    </h2>
                    <router-link :to="{ name: 'home' }" class="btn-main w-25 mt-2 p-3">Главная страница</router-link>
                </div>
            </div>
        </div>
    </main>
</template> 

<script>
import { mapActions, mapGetters } from "vuex";
import * as actions from "./../../vuex/modules/cart/types/actions";
import * as getters from "./../../vuex/modules/cart/types/getters";
import CartItem from "./../../components/cart_components/CartItem.vue";
import toFix from "./../../filters/toFix";
import formattedPrice from "./../../filters/price-format";
import BreadcrumbItem from "./../../components/common_components/BreadcrumbItem.vue";

export default {
    name: "CartPage",
    components: {
        BreadcrumbItem,
        CartItem
    },
    data() {
        return {
            carts: [],
            pageName: "Корзина товаров"
        };
    },
    filters: {
        toFix,
        formattedPrice
    },
    async created() {
        this.carts = await this.fetchProductCart();
    },
    computed: {
        ...mapGetters("cart", {
            cartTotal: getters.CART_TOTAL_SUM
        })
    },
    methods: {
        ...mapActions("cart", {
            fetchProductCart: actions.FETCH_PRODUCT_CART,
            deleteProductFromCart: actions.DELETE_PRODUCT_BY_ID,
            incrementCart: actions.INCREMENT_CART_PRODUCT,
            decrementCart: actions.DECREMENT_CART_PRODUCT
        }),
        async deleteProductId(data) {
            await this.deleteProductFromCart(data);
        },
        async increment(data) {
            return await this.incrementCart(data);
        },
        async decrement(data) {
            return await this.decrementCart(data);
        }
    }
};
</script>
