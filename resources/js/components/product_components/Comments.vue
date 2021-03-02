<template>
    <div class="row no-gutters">
        <div class="col-lg-12" v-for="feed in feeds" :key="feed.id">
            <h4 class="font-weight-bold pt-3 pb-3">Отзывы</h4>
            <div class="review_item">
                <div class="media">
                    <div class="d-flex">
                        <picture>
                            <img
                                :src="
                                    `storage/img/product/single-product/review-3.png`
                                "
                                alt=""
                            />
                        </picture>
                    </div>
                    <div class="media-body">
                        <h5 class="color-primary">Клиент: {{ feed.name }}</h5>
                        <hr>
                        <h6>Рейтинг: </h6>
                        <div v-if="feed.star === 1">
                            <picture v-for="index in 1" :key="index">
                                <img :src="'/img/star1.svg'" />
                            </picture>
                        </div>
                        <div v-else-if="feed.star === 2">
                            <picture v-for="index in 2" :key="index">
                                <img :src="'/img/star1.svg'" />
                            </picture>
                        </div>
                        <div v-else-if="feed.star === 3">
                            <picture v-for="index in 3" :key="index">
                                <img :src="'/img/star1.svg'" />
                            </picture>
                        </div>
                        <div v-else-if="feed.star === 4">
                            <picture v-for="index in 4" :key="index">
                                <img :src="'/img/star1.svg'" />
                            </picture>
                        </div>
                        <div v-else>
                            <picture v-for="index in 5" :key="index">
                                <img :src="'/img/star1.svg'" />
                            </picture>
                        </div>
                    </div>
                </div>
                <hr>
                <p>Отзыв о товаре: {{ feed.message }}</p>
                <hr>
            </div>
        </div>
        <div class="col-12">
            <div class="review_box">
                <h4 class="font-weight-bold pt-3 pb-3">
                    Добавить отзыв
                </h4>
                <form
                    class="row contact_form"
                    @submit.prevent="addFeedback(product_id)"
                >
                    <div class="col-lg-12">
                        <div class="rating">
                            <input
                                type="radio"
                                name="star"
                                id="rating-0"
                                value="0"
                                checked
                                v-model="feedback.star"
                            />
                            <label for="rating-1"></label>
                            <input
                                type="radio"
                                name="star"
                                id="rating-1"
                                value="1"
                                v-model="feedback.star"
                            />
                            <label for="rating-2"></label>
                            <input
                                type="radio"
                                name="star"
                                id="rating-2"
                                value="2"
                                v-model="feedback.star"
                            />
                            <label for="rating-3"></label>
                            <input
                                type="radio"
                                name="star"
                                id="rating-3"
                                value="3"
                                v-model="feedback.star"
                            />
                            <label for="rating-4"></label>
                            <input
                                type="radio"
                                name="star"
                                id="rating-4"
                                value="4"
                                v-model="feedback.star"
                            />
                            <label for="rating-5"></label>
                            <input
                                type="radio"
                                name="star"
                                id="rating-5"
                                value="5"
                                v-model="feedback.star"
                            />
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <input
                                type="text"
                                class="form-control border border-dark"
                                v-model.trim="feedback.name"
                                name="name"
                                placeholder="Полное Имя"
                                required
                            />
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <input
                                type="email"
                                class="form-control border border-dark"
                                v-model.trim="feedback.email"
                                name="email"
                                placeholder="Емейл"
                                required
                            />
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <input
                                type="text"
                                class="form-control border border-dark"
                                v-model.trim="feedback.phone"
                                name="phone"
                                placeholder="Телефон"
                                required
                            />
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <textarea
                                class="form-control border border-dark"
                                name="message"
                                v-model.trim="feedback.message"
                                rows="5"
                                placeholder="Ваш отзыв"
                                required
                            ></textarea>
                        </div>
                    </div>
                    <div class="col-md-12 text-right">
                        <button
                            type="submit"
                            value="submit"
                            class="btn btn-main p-3"
                        >
                            Отправить
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
import { mapActions } from "vuex";
import * as actions from "./../../vuex/modules/product/types/actions";
export default {

    data() {
        return {
             feeds: [],   
            product_id: "",
            feedback: {
                star: 1,
                name: "",
                email: "",
                phone: "",
                message: "",
                product_id: ""
            }
        };
    },
    async created() {
        await this.fetchProductApi();
         await this.fetchFeeds();
    },
    methods: {
        ...mapActions("product", {
            fetchSingleProduct: actions.FETCH_SINGLE_PRODUCT,
            addFeeds: actions.ADD_FEEDS,
            getFeeds: actions.FETCH_FEEDS,
        }),
        async fetchProductApi() {
            await this.fetchSingleProduct(`${this.$route.params.title}`).then(
                res => (this.product_id = res.data.product.id)
            );
        },
         async fetchFeeds() {
            await this.getFeeds(this.product_id).then(
                res => (this.feeds = res.data.feedback)
            );
        },
        async addFeedback(product_id) {
            this.feedback.product_id = product_id;
            await this.addFeeds(this.feedback)
                .then(location.reload())
                .catch(error => console.log(error));
        }
    }
};
</script>
