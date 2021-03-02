<template>
    <main class="main pb-4">
        <div class="wrapper">
            <div class="row no-gutters justify-content-center">
                <div class="col-12 col-sm-12 col-lg-4 pl-4 pr-4 pt-4">
                    <img :src="'/img/404.jpeg'" alt="" class="img-fluid" />
                    <router-link
                        class="btn-main p-3 mt-3"
                        :to="{ name: 'home' }"
                    >
                        Вы ошиблись здесь ничего нет --->Перейдите на главную
                        страницу
                    </router-link>
                </div>
            </div>
        </div>
    </main>
</template>
<script>
export default {
    name: "PageNotFound"
};
</script>
