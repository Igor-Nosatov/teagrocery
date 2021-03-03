<template>
<div class="col-12 col-sm-12 col-md-12 col-lg-12 pl-5 pr-5 mt-3 mb-3">
    <div class=" product-cart-block d-flex flex-row flex-wrap justify-content-around pb-2 pt-2">
        <div class="product-cart-image">
            <picture>
                <img :src="'/img/'+product.products.img" class="cart-img" />
            </picture>
        </div>
        <div class="product-cart-name pl-2 pr-2 text-center">
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
                        <img :src="'/img/left.svg'" alt="" class="block-btn-qty__left">
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
                Цена за товар :{{ subTotal | toFix | formattedPrice }}
            </p>
        </div>
        <div class="pt-3">
            <button class="btn-cancel mt-3" @click="deleteProduct(product.id)">
                <picture>
                    <img :src="'/img/close.svg'" alt="" class="close-icon">
                </picture>
            </button>
        </div>
    </div>
</div>
</template>

<script>
import toFix from './../../filters/toFix'
import formattedPrice from "./../../filters/price-format";

export default {
    name:'CartItem',
    props: {
        product: Object,
        required: true
    },
    data() {
        return {
            count: this.product.quantity
        }
    },
    filters: {
        toFix,
        formattedPrice
    },
    computed: {
        subTotal() {
            return this.product.quantity * this.product.products.price
        }
    },
    methods: {
        deleteProduct() {
            this.$emit('deleteItem', this.product.id);
        },
        decrementItem() {
            this.$emit('decrement', this.product.id)
        },
        incrementItem() {
            this.$emit('increment', this.product.id)
        }

    }
}
</script>
