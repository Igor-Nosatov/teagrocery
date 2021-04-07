<template>
    <main class="main pt-5 pb-5">
        <div class="wrapper">
            <div class="row no-gutters">
                <BreadcrumbItem :pageName="pageName" />
                <div class="text-content col-11 col-sm-10 col-md-9 col-lg-8">
                    <h2 class="text-center">
                        <strong
                            ><span class="text-success">О нас...</span></strong
                        >
                    </h2>
                    <h3 class="text-center">
                        Интернет-магазин TEA&COFFEE Grocery появился на
                        Молдавском рынке для того, чтобы облегчить пользователям
                        совершать онлайн покупки легко и доступно, предлагая
                        низкие цены и качественную продукцию. Опираясь на
                        накопленный опыт мы всегда пытаемся улучшить наши услуги
                        и предлагать больше товаров и интересных акций нашим
                        клиентам.
                    </h3>
                    <p class="pt-4">Данные компании:</p>
                    <p>
                        <strong
                            >SRL “TEA&COFFEE Grocery”, мун. Кишинев,&nbsp;улица
                            Калеа Мосилор, 12 оф. 121,&nbsp;ФК:&nbsp;</strong
                        >
                        1223600039896&nbsp;;
                        ИБАН:&nbsp;MD54VI08884290887758MDL;&nbsp;НДС 0501119;
                        Филиал №4; VICBMD2X864
                    </p>
                    <p>
                        ЭЛЕКТРОННАЯ ПОЧТА: tea&coffee.md@gmail.com; почтовый
                        индекс: MD-9111; Извещение о начале торговой
                        деятельности: Nr. 12123 от 12.12.2010
                    </p>
                    <p>ТЕЛЕФОН</p>
                    <p>
                        + (373) 66 211 999<br />
                        + (373) 23 661 911<br />
                        + (373) 56 366 379<br />
                        ПРОГРАММА РАБОТЫ:
                    </p>
                    <p>
                        Понедельник-пятница: с 09:00 до 21:00.<br />
                        Суббота: 09: 00-18: 00,<br />
                        Воскресенье: выходной
                    </p>
                </div>
            </div>
        </div>
    </main>
</template>
<script>
import BreadcrumbItem from "./../../components/common_components/BreadcrumbItem.vue";

export default {
    name:'AboutPage',
    components: {
        BreadcrumbItem
    },
    data() {
        return {
            pageName: "О нас"
        };
    }
};
</script>
