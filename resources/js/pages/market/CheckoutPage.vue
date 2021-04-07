<template>
    <main class="main pb-5 pt-3">
        <div class="wrapper">
            <div class="row no-gutters">
                <Breadcrumb :pageName="pageName" />
                <div class="col-12 pl-5 pr-5">
                    <form @submit.prevent="orderProduct">
                        <div class="form-row mt-3 mb-3">
                            <div class="col-12">
                                <h3 class="order-title">Контактные данные</h3>
                            </div>
                        </div>
                        <div class="checkout-block">
                            <div class="form-row">
                                <div
                                    class="col-12 col-sm-6 col-md-4 col-lg-4 p-2"
                                >
                                    <input
                                        type="text"
                                        class="form-control"
                                        v-model.trim="checkout.first_name"
                                        placeholder="Ваше имя"
                                        required
                                    />
                                    <small>{{message}}</small>
                                </div>
                                <div
                                    class="col-12 col-sm-6 col-md-4 col-lg-4 p-2"
                                >
                                    <input
                                        type="text"
                                        class="form-control"
                                        v-model.trim="checkout.phone"
                                        placeholder="Ваш номер телефона"
                                        required
                                    />
                                </div>
                                <div
                                    class="col-12 col-sm-6 col-md-4 col-lg-4 p-2"
                                >
                                    <input
                                        type="email"
                                        class="form-control"
                                        v-model.trim="checkout.email"
                                        placeholder="Ваш емейл"
                                        required
                                    />
                                </div>
                                <div
                                    class="col-12 col-sm-6 col-md-4 col-lg-4 p-2"
                                >
                                    <input
                                        type="text"
                                        class="form-control"
                                        v-model.trim="checkout.client_receiver"
                                        placeholder="Имя получателя"
                                        required
                                    />
                                </div>
                                <div
                                    class="col-12 col-sm-6 col-md-4 col-lg-4 p-2"
                                >
                                    <input
                                        type="text"
                                        class="form-control"
                                        v-model.trim="checkout.phone_receiver"
                                        placeholder="Номер телефона получателя"
                                        required
                                    />
                                </div>
                            </div>
                        </div>

                        <div class="row no-gutters">
                            <div
                                class="col-12 col-sm-12 col-md-6 col-lg-6  p-2"
                            >
                                <div class="form-row mt-3 mb-3">
                                    <div class="col-12">
                                        <h3 class="order-title">Доставка</h3>
                                    </div>
                                </div>
                                <div class="checkout-block">
                                    <div class="form-row">
                                        <div
                                            class="col-12 col-sm-6 col-md-3 col-lg-3  p-2 "
                                        >
                                            <div class="form-check">
                                                <input
                                                    class="form-check-input"
                                                    type="radio"
                                                    v-model="checkout.delivery"
                                                    name="delivery"
                                                    id="delivery1"
                                                    value="option1"
                                                    checked
                                                />
                                                <label
                                                    class="form-check-label"
                                                    for="delivery1"
                                                >
                                                    Доставка курьером
                                                </label>
                                            </div>
                                        </div>
                                        <div
                                            class="col-12 col-sm-6 col-md-3 col-lg-3  p-2"
                                        >
                                            <div class="form-check">
                                                <input
                                                    class="form-check-input"
                                                    type="radio"
                                                    v-model="checkout.delivery"
                                                    name="delivery"
                                                    id="delivery2"
                                                    value="option2"
                                                />
                                                <label
                                                    class="form-check-label"
                                                    for="delivery2"
                                                >
                                                    Самовывоз
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div
                                            class="col-12 col-sm-6 col-md-4 col-lg-3  p-2"
                                        >
                                            <input
                                                type="text"
                                                class="form-control"
                                                v-model.trim="checkout.city"
                                                placeholder="Город"
                                                required
                                            />
                                        </div>
                                        <div
                                            class="col-12 col-sm-6 col-md-4 col-lg-3  p-2"
                                        >
                                            <input
                                                type="text"
                                                class="form-control"
                                                v-model.trim="checkout.street"
                                                placeholder="Улица"
                                            />
                                        </div>
                                        <div
                                            class="col-12 col-sm-6 col-md-4 col-lg-2  p-2"
                                        >
                                            <input
                                                type="text"
                                                class="form-control"
                                                v-model.trim="checkout.house"
                                                placeholder="Дом"
                                                required
                                            />
                                        </div>
                                        <div
                                            class="col-12 col-sm-6 col-md-4 col-lg-2  p-2"
                                        >
                                            <input
                                                type="text"
                                                class="form-control"
                                                v-model.trim="
                                                    checkout.apartment
                                                "
                                                placeholder="Кв."
                                            />
                                        </div>
                                        <div
                                            class="col-12 col-sm-6 col-md-4 col-lg-2  p-2"
                                        >
                                            <input
                                                type="text"
                                                class="form-control"
                                                v-model.trim="checkout.floor"
                                                placeholder="Этаж"
                                                required
                                            />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="col-12 col-sm-12 col-md-6 col-lg-6  p-2"
                            >
                                <div class="form-row mt-3  mb-3">
                                    <div class="col-12">
                                        <h3 class="order-title">Оплата</h3>
                                    </div>
                                </div>
                                <div class="checkout-block">
                                    <div class="form-row">
                                        <div
                                            class="col-12 col-sm-6 col-md-4 col-lg-4  p-2"
                                        >
                                            <div class="form-check">
                                                <input
                                                    class="form-check-input"
                                                    v-model="
                                                        checkout.payment_type
                                                    "
                                                    type="radio"
                                                    name="payment"
                                                    id="payment1"
                                                    value="option1"
                                                    checked
                                                />
                                                <label
                                                    class="form-check-label"
                                                    for="payment1"
                                                >
                                                    Банковской картой
                                                </label>
                                            </div>
                                        </div>
                                        <div
                                            class="col-12 col-sm-6 col-md-4 col-lg-4  p-2"
                                        >
                                            <div class="form-check">
                                                <input
                                                    class="form-check-input"
                                                    v-model="
                                                        checkout.payment_type
                                                    "
                                                    type="radio"
                                                    name="payment"
                                                    id="payment2"
                                                    value="option2"
                                                />
                                                <label
                                                    class="form-check-label"
                                                    for="payment2"
                                                >
                                                    Наличными курьеру
                                                </label>
                                            </div>
                                        </div>
                                        <div
                                            class="col-12 col-sm-6 col-md-4 col-lg-4  p-2"
                                        >
                                            <div class="form-check">
                                                <input
                                                    class="form-check-input"
                                                    v-model="
                                                        checkout.payment_type
                                                    "
                                                    type="radio"
                                                    name="payment"
                                                    id="payment3"
                                                    value="option3"
                                                />
                                                <label
                                                    class="form-check-label"
                                                    for="payment3"
                                                >
                                                    Наложным платежем
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-row mt-3 mb-3">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                <h3 class="order-title  mt-3 mb-3">
                                    Комментарий к заказу
                                </h3>
                                <div class="checkout-block">
                                    <textarea
                                        v-model.trim="checkout.comment"
                                        class="form-control"
                                        rows="9"
                                        required
                                    ></textarea>
                                </div>
                            </div>

                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                <h3 class="order-title mt-3 mb-3">Итого</h3>
                                <div
                                    class="row no-gutters total-price checkout-block "
                                >
                                    <div class="col-12">
                                        <div class="order-product">
                                            <ul class="nav flex-column">
                                                <OrderProduct
                                                    v-for="cart in carts"
                                                    :cart="cart"
                                                    :key="cart.id"
                                                />
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="total-price pt-3">
                                            <h5 class="font-weight-bold">
                                                Всего товаров на сумму:
                                                <span>{{ cartTotal }}</span>
                                            </h5>
                                            <h5 class="font-weight-bold">
                                                Доставка: <span>0 L</span>
                                            </h5>
                                            <h5 class="font-weight-bold">
                                                К оплате:
                                                <span>{{ cartTotal }}</span>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                                <button
                                    type="submit"
                                    class="btn-main pl-5 pr-5 pt-3 pb-3 mt-4"
                                >
                                    Потвердить заказ
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
</template>

<script>
import _ from "lodash";
import Breadcrumb from "./../../components/common_components/BreadcrumbItem.vue";
import OrderProduct from "./../../components/checkout_components/OrderProduct.vue";
import toFix from "./../../filters/toFix";
import formattedPrice from "./../../filters/price-format";
import { mapActions, mapGetters } from "vuex";
import * as actions from "./../../vuex/modules/checkout/types/actions";
import * as actionsCart from "./../../vuex/modules/cart/types/actions";
import * as gettersCart from "./../../vuex/modules/cart/types/getters";

export default {
    name: "CheckoutPage",
    components: {
        Breadcrumb,
        OrderProduct
    },
    data() {
        return {
            carts: [],
            pageName: "Заказ Товара",
            message:"",
            checkout: {
                first_name: "",
                phone: "",
                email: "",
                client_receiver: "",
                phone_receiver: "",
                delivery: "",
                city: "",
                street: "",
                house: "",
                floor: "",
                apartment: "",
                payment_type: "",
                comment: ""
            }
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
            cartTotal: gettersCart.CART_TOTAL_SUM
        })
    },
    methods: {
        ...mapActions("cart", {
            fetchProductCart: actionsCart.FETCH_PRODUCT_CART
        }),
        ...mapActions("checkout", {
            checkoutProduct: actions.ADD_CHECKOUT_DATA
        }),
        async orderProduct() {
            await this.checkoutProduct(this.checkout).then(response =>
                this.$router.push({ name: "confirm" })
            );
        }
    }
};
</script>
