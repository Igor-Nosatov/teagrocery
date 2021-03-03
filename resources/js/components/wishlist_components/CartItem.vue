<template>
<div class="col-12 col-sm-12 col-md-12 col-lg-12 pl-4 pr-4 mt-3 mb-3">
    <div class=" product-cart-block d-flex flex-row flex-wrap justify-content-around pb-2 pt-2">
        <div class="product-cart-image">
            <picture>
                <img :src="'/img/'+product.products.img" class="cart-img" />
            </picture>
        </div>
        <div class="product-cart-btn pt-3">
            <button class="btn-main p-2 mt-4 mx-auto" @click="sendToCart">Добавить в корзину</button>
        </div>
        <div class="product-cart-name text-center">
            <p class="font-weight-bold pt-5">{{ product.products.name}} </p>
        </div>
        <div class="product-cart-weight">
            <p class="font-weight-bold pt-5">Цена: {{ product.products.price | toFix | formattedPrice }}</p>
        </div>
        <div class="pt-2 product-cart-qty">
            <div class="block-btn-qty pt-4 d-flex flex-row justify-content-center">
                <p class="font-weight-bold pt-3">Кол-во:</p>
                <div class="value-button m-1" id="decrease"  @click="decrementItem">
                    <picture>
                        <img :src="'/img/left.svg'"  alt="" class="block-btn-qty__left">
                    </picture>
                </div>
                <input type="number" id="number" :value='product.quantity' class=" m-1 value-button" min="1" required readonly />
                <div class="value-button  m-1" id="increase" @click="incrementItem">
                    <picture>
                        <img :src="'/img/right.svg'" alt="" class="block-btn-qty__right">
                    </picture>
                </div>
            </div>
        </div>
        <div class="product-cart-price">
            <p class="font-weight-bold pt-5">
                Цена за товар :{{ subTotal }}
            </p>
        </div>
        <div class="pt-3">
            <button class="btn-cancel mt-3" @click="deleteWishlist(product.id)">
                <picture>
                    <img :src="'/img/close.svg'" alt="" class="close-icon">
                </picture>
            </button>
        </div>
    </div>
</div>
</template>

<script>
import { mapActions} from "vuex";
import * as actionsProduct from "./../../vuex/modules/product/types/actions";
import * as actionsCart from "./../../vuex/modules/cart/types/actions";
import toFix from './../../filters/toFix'
import formattedPrice from "./../../filters/price-format";

export default {
    name:'CartItem',
    props: {
        product: Object
    },
    data() {
        return {
            carts: [],
            count: this.product.quantity
        }
    },
    filters: {
        toFix,
        formattedPrice
    },
     async created() {
        this.carts = await this.fetchProductCart();
    },
    computed: {
        subTotal() {
            return this.product.quantity * this.product.products.price
        }
    },
    methods: {
         ...mapActions("product", {
            addCart: actionsProduct.ADD_TO_CART,
        }),
         ...mapActions("cart", {
            fetchProductCart: actionsCart.FETCH_PRODUCT_CART
        }),
        deleteWishlist() {
            this.$emit('deleteWishlist', this.product.id);
        },
        decrementItem() {
            this.$emit('decrement', this.product.id)
        },
        incrementItem() {
            this.$emit('increment', this.product.id)
        },
       async sendToCart() {
            let quantity = 1;
            let product_id = this.product.products.id;
            let result = this.carts.filter(c => c.product_id === product_id);
            let res_length = result.length;

           if (this.carts.length === 0) {
                await this.addCart({ quantity, product_id }).then(
                    this.$router.push({
                        name: "cart"
                    })
                );
            } else if(res_length === 0)
             {
                await this.addCart({ quantity,product_id }).then(
                    this.$router.push({
                        name: "cart"
                    })
                );
            } else 
            {
                this.$router.push({
                    name: "cart"
                });
            }
        } 

    }
}
</script>
