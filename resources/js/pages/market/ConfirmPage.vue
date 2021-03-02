<template>
<main class="main pt-5 pb-5">
    <div class="wrapper">
        <div class="row justify-content-md-center no-gutters">
            <div class="col-8">
                <h1 class="display-4 text-center">Вы сделали заказ! С вами свяжеться наш колцентр!</h1>
               
                <router-link :to="{ name: 'home' }" class="btn-main p-3 font-weight-bold text-uppercase text-white  mx-auto"> Вернуться на главную страницу</router-link>
            </div>
        </div>
    </div>
</main>
</template>

<script>
export default {
    name:'ConfirmPage',
};
</script>

<style scoped>
.confirm-image {
    height: 300px;
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 50%;
}
.card-btn {
    display: block;
    margin-left: auto;
    margin-right: auto;
    margin-top: 20px;
    width: 40%;
}
</style>
