<template>
    <div class="row no-gutters justify-content-end">
        <div
            class="col-12 col-sm-12 col-md-5 col-lg-4 pt-5 pl-5 pr-5 align-self-end"
        >
            <h3 class="subscribe__title text-center">Подпишите и получите</h3>
            <h3 class="subscribe__subtitle text-center">промокод на скидку!</h3>
            <p class="subscribe__text  text-center">
                Будьте в курсе последних событий
            </p>
            <form @submit.prevent="addToNews">
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <div class="input-group mb-2">
                            <input
                                type="email"
                                class="subscribe-form-control form-control"
                                placeholder="Ваш Email....."
                                v-model.trim="email"
                                required
                                name="email"
                                autocomplete="off"
                            />
                            <div class="input-group-prepend">
                                <button type="submit"  class="btn-subscribe">
                                   <i class="fas fa-share-square"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</template>

<script>
import {  mapActions } from "vuex";
import * as actions from "./../../vuex/modules/home/types/actions";
export default {
    name:"SubscribeItem",
    data() {
        return {
            email: ""
        }
    },
    methods: {
        ...mapActions("home", {
            addToNewsLetter: actions.ADD_TO_NEWSLETTER
        }),
        async addToNews() {
             await this.addToNewsLetter({
                email: this.email
            }).then(
                this.$router.push({ name: "subconfirm" })
            );
        }
    }
};
</script>
