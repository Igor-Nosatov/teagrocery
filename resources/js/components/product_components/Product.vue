<template>
    <div class="col-12">
        <div class="row no-gutters">
            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                <img :src="'/img/' + product.img" class="singl-product-img" />
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                <div class="d-flex flex-row flex-wrap justify-content-between">
                    <h2 class="product-name">{{ product.name }}</h2>
                </div>
                <div class="table-responsive">
                    <table class="table">
                        <tr>
                            <td class="character-title">Брэнд:</td>
                            <td class="character-description">
                                {{ brand.name }}
                            </td>
                        </tr>
                        <tr>
                            <td class="character-title">Код товара:</td>
                            <td class="character-description">
                                {{ product.code }}
                            </td>
                        </tr>
                        <tr>
                            <td class="character-title">Категория:</td>
                            <td class="character-description">
                                {{ category.name }}
                            </td>
                        </tr>
                    </table>
                </div>
                <div v-if="isNaN(product.price)" class="product-price  pt-4">
                  
                </div>
                <div v-else class="product-price  pt-4">
                    <h3>
                        Цена:
                        {{ product.price | toFix | formattedPrice }}
                    </h3>
                </div>
                <div class="d-flex flex-row justify-content-left">
                    <form
                        @submit.prevent="addToCart(product.id)"
                        class="pl-2 pr-2"
                    >
                        <button class="btn-main pl-5 pr-5 pt-3 pb-3 mt-1">
                            В корзину
                        </button>
                    </form>
                    <form
                        @submit.prevent="addToWishlist(product.id)"
                        class="pl-2 pr-2"
                    >
                        <button type="submit" class="btn-like">
                            <i class="far fa-heart fa-2x"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import toFix from "./../../filters/toFix";
import formattedPrice from "./../../filters/price-format";
import { mapActions } from "vuex";
import * as actionsCart from "./../../vuex/modules/cart/types/actions";
import * as actionsWishlist from "./../../vuex/modules/wishlist/types/actions";
import * as actions from "./../../vuex/modules/product/types/actions";

export default {
    data() {
        return {
            carts: [],
            product: {},
            brand: {},
            category: {},
            wishlist: []
        };
    },
    filters: {
        toFix,
        formattedPrice
    },
    async created() {
        await this.fetchProductApi();
        await this.fetchCategoryApi();
        await this.fetchBrandApi();
        await this.fetchCart();
        await this.fetchWishlist();
    },
    methods: {
        ...mapActions("cart", {
            fetchProductCart: actionsCart.FETCH_PRODUCT_CART
        }),
        ...mapActions("wishlist", {
            fetchProductWishlist: actionsWishlist.FETCH_PRODUCT_WISHLIST
        }),
        ...mapActions("product", {
            fetchSingleProduct: actions.FETCH_SINGLE_PRODUCT,
            addCart: actions.ADD_TO_CART,
            addWishlist: actions.ADD_TO_WISHLIST
        }),
        async fetchProductApi() {
            await this.fetchSingleProduct(`${this.$route.params.title}`).then(
                res => (this.product = res.data.product)
            );
        },
        async fetchCategoryApi() {
            await this.fetchSingleProduct(`${this.$route.params.title}`).then(
                res => (this.category = res.data.product.categories)
            );
        },
        async fetchBrandApi() {
            await this.fetchSingleProduct(`${this.$route.params.title}`).then(
                res => (this.brand = res.data.product.brands)
            );
        },
        async fetchCart() {
            this.fetchProductCart().then(response => {
                this.carts = response;
            });
        },
        async fetchWishlist() {
            this.fetchProductWishlist().then(response => {
                this.wishlist = response;
            });
        },

        async addToCart(product_id) {
            let quantity = 1;
            let result = this.carts.filter(c => c.product_id === product_id);

            if (this.carts.length === 0) {
                await this.addCart({ quantity, product_id }).then(
                    this.$router.push({
                        name: "cart"
                    })
                );
            } else if (!result.length) {
                await this.addCart({ quantity, product_id }).then(
                    this.$router.push({
                        name: "cart"
                    })
                );
            } else {
                this.$router.push({
                    name: "cart"
                });
            }
        },

        async addToWishlist(product_id) {
            let quantity = 1;
            let result = this.wishlist.filter(w => w.product_id === product_id);

            if (this.wishlist.length == 0) {
                await this.addWishlist({ quantity, product_id }).then(
                    this.$router.push({
                        name: "wishlist"
                    })
                );
            } else if (!result.length) {
                await this.addWishlist({ quantity, product_id }).then(
                    this.$router.push({
                        name: "wishlist"
                    })
                );
            } else {
                this.$router.push({
                    name: "wishlist"
                });
            }
        }
    }
};
</script>

<style scoped>
.btn-like {
    border-radius: 100%;
    height: 65px;
    width: 65px;
    border: 1px #007bff solid;
    background-color: #007bff;
    outline: 0 !important;
    box-shadow: 0 8px 24px -2px #717482;
}
.fa-heart {
    color: #323a42;
    -webkit-transition: all 0.5s;
    -o-transition: all 0.5s;
    transition: all 0.5s;
}
</style>
