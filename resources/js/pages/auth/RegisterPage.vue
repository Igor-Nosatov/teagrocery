<template>
    <main class="main pb-4 pl-2 pr-2">
        <div class="wrapper">
            <div class="row no-gutters  justify-content-center">
                <BreadcrumbItem :pageName="pageName" />
                <div class="col-12 col-sm-12 col-lg-8 pt-5">
                    <h2 class="text-center  mt-2 mb-2">Регистрация</h2>
                    <form
                        @submit.prevent="submit"
                        class="flex flex-col pt-3 md:pt-8"
                    >
                        <div class=" flex flex-col pt-4">
                            <label for="email" class="text-lg">Почта</label>
                            <input
                                v-model.trim="email"
                                type="email"
                                name="email"
                                class="form-control rounded-0"
                                required
                            />
                        </div>
                        <div class="flex flex-col pt-4">
                            <label for="name" class="text-lg">Имя</label>
                            <input
                                v-model.trim="name"
                                type="text"
                                name="name"
                                class="form-control rounded-0"
                                required
                            />
                        </div>
                        <div class="flex flex-col pt-4">
                            <label for="password" class="text-lg">Пароль</label>
                            <input
                                v-model.trim="password"
                                type="password"
                                name="password"
                                class="form-control rounded-0"
                                required
                            />
                        </div>
                        <button class="btn-main p-3 mt-3" type="submit">
                            Регистрация
                        </button>
                        <h4 class="mt-3">
                            <router-link
                                class="nav-link"
                                :to="{ name: 'login' }"
                            >
                                <i
                                    class="fas fa-key fa-2x header-text-color"
                                ></i>
                                Если есть учетная запись ---> Вход в учётную
                                запись
                            </router-link>
                        </h4>
                    </form>
                </div>
            </div>
        </div>
    </main>
</template>

<script>
import auth from "./../../services/auth/auth";
import BreadcrumbItem from "./../../components/common_components/BreadcrumbItem.vue";

export default {
    name: "RegisterPage",
    components: {
        BreadcrumbItem
    },
    data: function() {
        return {
            errors: "",
            name: "",
            email: "",
            password: "",
            pageName: "Регистрация аккаунта"
        };
    },

    methods: {
        submit() {
            auth.register(this.name, this.email, this.password)
                .then(response => {
                    this.$router.push("/");
                })
                .catch(err => {
                    this.emailErrors.push("У вас уже есть такой email");
                    this.loading = false;
                });
        }
    }
};
</script>
