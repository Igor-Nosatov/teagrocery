<template>
    <main class="main pt-5 pb-5 pl-2 pr-2">
        <div class="wrapper">
            <div class="row no-gutters">
                <BreadcrumbItem :pageName="pageName" />
                <div class="col-11 col-sm-11 col-md-10 col-lg-8">
<div class="ContentPage">
                    <div class="h1">Поставщикам</div>

                    <p>
                        Уважаемые партнеры! Мы&nbsp;открыты для предложений
                        по&nbsp;сотрудничеству и&nbsp;расширению ассортимента
                        товаров на&nbsp;нашем сайте. Сотрудничество
                        с&nbsp;pandashop позволит вам увеличить свои продажи
                        и&nbsp;доход, повысить привлекательность
                        и&nbsp;популярность вашего товара или бренда
                        в&nbsp;целом.
                    </p>

                    <ul class="ContentPage-list">
                        <li>
                            <p>
                                Вы&nbsp;получаете возможность присутствовать
                                на&nbsp;надежной торговой платформе, а&nbsp;ваши
                                товары появятся в&nbsp;топе поисковых запросов;
                            </p>
                        </li>
                        <li>
                            <p>
                                Мы&nbsp;проводим всевозможные акции для ваших
                                новинок и&nbsp;эксклюзивных товаров
                                на&nbsp;рынке;
                            </p>
                        </li>
                        <li>
                            <p>
                                Мы&nbsp;продвигаем новые категории и&nbsp;виды
                                товаров.
                            </p>
                        </li>
                    </ul>

                    <p class="mt-25px">
                        <b
                            >Для начала сотрудничества необходимо предоставить
                            следующую информацию:</b
                        >
                    </p>

                    <ul class="tplContentPage-list">
                        <li>
                            <p>
                                Характеристики бренда, сильные и&nbsp;слабые
                                стороны;
                            </p>
                        </li>
                        <li>
                            <p>
                                Прайс-лист с&nbsp;рекомендованной розничной
                                и&nbsp;оптовой ценой, наличие остатков
                                на&nbsp;складе, их&nbsp;объем;
                            </p>
                        </li>
                        <li>
                            <p>
                                Описание товаров, технические характеристики,
                                фотографии в&nbsp;хорошем качестве.
                            </p>
                        </li>
                        <li>
                            <p>
                                Условия и&nbsp;форма оплаты, возможность
                                отсрочки платежа;
                            </p>
                        </li>
                        <li>
                            <p>
                                Условия гарантии, возврата и&nbsp;сервисного
                                обслуживания товара;
                            </p>
                        </li>
                        <li>
                            <p>Возможности обучения для наших сотрудников.</p>
                        </li>
                    </ul>

                    <p>
                        Если вы являетесь поставщиком товаров и хотите стать
                        нашим партнером, присылайте ваши предложения на e-mail:
                        <a href="mailto:tea&grocery@tea&grocery.md"
                            >tea&grocery@tea&grocery.md</a
                        >.
                    </p>
                </div>
                </div>
            </div>
        </div>
    </main>
</template>

<script>
import BreadcrumbItem from "./../../components/common_components/BreadcrumbItem.vue";

export default {
    name:'DiscountsPage',
    components: {
        BreadcrumbItem
    },
    data() {
        return {
            pageName: "Дисконт"
        };
    }
};
</script>
