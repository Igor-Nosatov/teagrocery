<template>
    <footer class="footer">
        <div class="wrapper">
            <div class="footer-top pb-2">
                <div class="row no-gutters">
                    <div class="col-sm-12 col-md-12 col-lg-3 pl-3 pr-1">
                        <div
                            class="footer__brand d-flex flex-row justify-content-start"
                        >
                            <router-link
                                :to="{ name: 'home' }"
                                class="footer__navbar-brand "
                            >
                                <picture>
                                    <img
                                        :src="'/img/logo.png'"
                                        alt="logo"
                                        class="logo"
                                    />
                                </picture>
                            </router-link>
                            <h3 class="text-white font-weight-bold pt-5">
                                Чайный дом
                            </h3>
                        </div>
                        <br />
                        <h6 class=" pb-2 footer__title">Новостная рассылка</h6>
                        <form @submit.prevent="addToNews">
                            <div class="form-row ">
                                <div class="col-auto">
                                    <div
                                        class="input-group mb-2 d-flex flex-row"
                                    >
                                        <input
                                            type="email"
                                            class="footer__form-control"
                                            placeholder="Подпишись ....."
                                            name="email"
                                            v-model.trim="email"
                                            required
                                        />
                                        <div class="input-group-prepend">
                                            <button
                                                type="submit"
                                                class="subscribe-btn"
                                            >
                                                <picture>
                                                    <img
                                                        :src="
                                                            '/img/subscribe.svg'
                                                        "
                                                        alt="subscribe-icon"
                                                        class="subscribe-icon"
                                                    />
                                                </picture>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-sm-6  col-md-6 col-lg-2 pt-4 pl-3 pr-1">
                        <h6 class=" pb-2 footer__title">Информация</h6>
                        <ul class="nav footer__navbar flex-column">
                            <li class="nav-item">
                                <router-link
                                    class="nav-link"
                                    :to="{ name: 'about' }"
                                    >О компании
                                </router-link>
                            </li>
                            <li class="nav-item">
                                <router-link
                                    class="nav-link"
                                    :to="{ name: 'guarantee' }"
                                    >Оплата товара</router-link
                                >
                            </li>
                            <li class="nav-item">
                                <router-link
                                    class="nav-link"
                                    :to="{ name: 'delivery' }"
                                    >Доставка и оплатаы</router-link
                                >
                            </li>
                            <li class="nav-item">
                                <router-link
                                    class="nav-link"
                                    :to="{ name: 'faq' }"
                                    >FAQ</router-link
                                >
                            </li>
                            <li class="nav-item">
                                <router-link
                                    class="nav-link"
                                    :to="{ name: 'posts' }"
                                    >Блог</router-link
                                >
                            </li>
                            <li class="nav-item">
                                <router-link
                                    class="nav-link"
                                    :to="{ name: 'discounts' }"
                                    >Партнерам</router-link
                                >
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-6  col-md-6 col-lg-2 pt-4 pl-3 pr-1">
                        <h6 class=" pb-2 footer__title">Категории</h6>
                        <ul class="nav footer__navbar flex-column">
                            <li
                                class="nav-item"
                                v-for="(type, index) in types"
                                :key="index"
                            >
                               <router-link
                            :to="{
                                name: 'catalog',
                                params: { slug: type.slug }
                            }"
                            class="nav-link  p-1 header-text-color"
                        >
                            {{ type.name }}
                        </router-link>
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-6  col-md-6 col-lg-2 pt-4 pl-3 pr-1">
                        <h6 class=" pb-2 footer__title">Способы оплаты</h6>
                        <div class="payment-icon justify-content-start">
                            <i class="fab fa-cc-visa fa-2x p-2"></i>
                            <i class="fab fa-cc-mastercard fa-2x p-2"></i>
                            <br />
                            <i class="fab fa-cc-stripe fa-2x p-2"></i>
                            <i class="fab fa-cc-paypal fa-2x p-2"></i> <br />
                            <i class="fab fa-cc-jcb fa-2x p-2 p-2"></i>
                            <i class="fab fa-cc-discover fa-2x p-2"></i>
                        </div>
                    </div>
                    <div
                        class="col-12 col-sm-12  col-md-6  col-lg-3 pt-4 pl-1 pr-1"
                    >
                        <h6 class="footer__title pb-2">Контакты</h6>
                        <p class="text-white font-weight-bold">
                            +3(808)-99-99-78-45 <br />
                            <span class="text-white">Бесплатно по Молдове</span>
                        </p>
                        <ul class="nav">
                            <li class="nav-item">
                                <a class="nav-link p-2" href="#"
                                    ><i class="fab fa-facebook-f fa-2x"></i
                                ></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link p-2" href="#"
                                    ><i class="fab fa-twitter fa-2x"></i
                                ></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link p-2" href="#"
                                    ><i class="fab fa-instagram fa-2x"></i
                                ></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link p-2" href="#"
                                    ><i class="fas fa-basketball-ball fa-2x"></i
                                ></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link p-2" href="#"
                                    ><i
                                        class="fas fa-share-alt-square fa-2x"
                                    ></i
                                ></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="wrapper">
            <div class="footer-bottom border-top pt-2 pb-4">
                <div
                    class="row no-gutters  d-flex flex-row justify-content-between"
                >
                    <div class="col-lg-6">
                        <ul class="nav footer__navbar  pl-3 pr-3">
                            <li class="nav-item">
                                <a class="nav-link p-2" href="#"
                                    >&#169;Tea Grocery - Все права защищены</a
                                >
                            </li>
                            <li class="nav-item">
                                <a class="nav-link p-2" href="#"
                                    >Политика конфендициальности</a
                                >
                            </li>
                            <li class="nav-item">
                                <a class="nav-link p-2" href="#">Компания</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                        <p
                            class="text-right text-white font-weight-bold pt-2 pl-4 pr-3"
                        >
                            teagrocery@gmail.com
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</template>
<script>
import { mapActions } from "vuex";
import * as actions from "./../../vuex/modules/home/types/actions";
export default {
    name: "FooterItem",
    data() {
        return {
            email: "",
            types: []
        };
    },
    async mounted() {
        this.fetchTypes();
    },
    methods: {
        ...mapActions("home", {
            addToNewsLetter: actions.ADD_TO_NEWSLETTER
        }),
        async addToNews() {
            console.log(this.email);
            await this.addToNewsLetter({
                email: this.email
            }).then(this.$router.push({ name: "subconfirm" }));
        },
        async fetchTypes() {
            await axios.get("/api/types/").then(res => {
                this.types = res.data.types;
            });
        }
    }
};
</script>
