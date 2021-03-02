<template>
<main class="main pt-5 pb-5">
    <div class="wrapper">
        <div class="contact">
            <div class="contact-wrapper">
                <div class="row no-gutters">
                    <BreadcrumbItem :pageName="pageName" />
                    <ContactInfo />
                    <div class="col-lg-12 col-sm-12 pt-3">
                        <h2 class="text-center">Будь с нами на связи</h2>
                        <form
                            @submit.prevent="clientContact"
                            class="p-1 bg-white  pl-5 pr-5"
                        >
                            <div class="row form-group">
                                <div class="col-md-6">
                                    <label class="text-black" for="fname"
                                        >Имя</label
                                    >
                                    <input
                                        type="text"
                                        name="fname"
                                        id="fname"
                                        class="form-control rounded-0"
                                        v-model.trim="contact.first_name"
                                        placeholder="Имя....."
                                        required
                                    />
                                </div>
                                <div class="col-md-6">
                                    <label class="text-black" for="lname"
                                        >Фамилия</label
                                    >
                                    <input
                                        type="text"
                                        name="lname"
                                        id="lname"
                                        class="form-control rounded-0"
                                        v-model.trim="contact.last_name"
                                        placeholder="Фамилия....."
                                        required
                                    />
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-md-6">
                                    <label class="text-black" for="email"
                                        >Емейл</label
                                    >
                                    <input
                                        type="email"
                                        name="email"
                                        id="email"
                                        class="form-control rounded-0"
                                        v-model.trim="contact.email"
                                        placeholder="Емейл....."
                                        required
                                    />
                                </div>
                                <div class="col-md-6">
                                    <label class="text-black" for="subject"
                                        >Тема</label
                                    >
                                    <input
                                        type="subject"
                                        id="subject"
                                        name="thema"
                                        class="form-control rounded-0"
                                        v-model.trim="contact.thema"
                                        placeholder="Предмет....."
                                        required
                                    />
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-md-12">
                                    <label class="text-black" for="message"
                                        >Письмо</label
                                    >
                                    <textarea
                                        name="message"
                                        id="message"
                                        cols="30"
                                        rows="7"
                                        class="form-control rounded-0"
                                        v-model.trim="contact.message"
                                        placeholder="Напишите заметки или ворос здесь..."
                                        required
                                    ></textarea>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-md-12">
                                    <input
                                        type="submit"
                                        value="Отправить послание"
                                        class="btn btn-order"
                                    />
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </main>
</template>

<script>
import { mapActions } from "vuex";
import * as actions from "./../../vuex/modules/contact/types/actions";
import ContactInfo from "./../../components/contact_components/ContactInfo.vue";
import BreadcrumbItem from "./../../components/common_components/BreadcrumbItem.vue";

export default {
    name:'ContactPage',
    components: {
        BreadcrumbItem,
        ContactInfo
    },
    data() {
        return {
            pageName: "Контакты",
            user: {},
            contact: {
                first_name: "",
                last_name: "",
                email: "",
                thema: "",
                message: ""
            }
        };
    },
    async created() {
        this.pageName;
    },
    methods: {
        ...mapActions("contact", {
            clientSendContact: actions.CLIENT_SEND_CONTACT
        }),
        async clientContact() {
            await this.clientSendContact(this.contact).then(response =>
              this.$router.push({ name: "contact-confirm" })
            );
        },
    }
};
</script>
