<template>
    <main class="main pt-5 pb-5 pl-2 pr-2">
        <div class="wrapper">
            <div class="row no-gutters">
                <BreadcrumbItem :pageName="pageName" />
                <div class="text-content col-11 col-sm-11 col-md-10 col-lg-8">
                    <h3>
                        <strong
                            ><span style="color:#006400;"
                                >Оплата может быть произведена
                                двумя&nbsp;способами:</span
                            ></strong
                        >
                    </h3>
                    <h4 style="line-height: 30px;">
                        1. Наличными при доставке курьером (cash).<br />
                        Оплата производится только после того, как
                        товар&nbsp;был доставлен и соответствует &nbsp;вашему
                        заказа.
                    </h4>
                    <h4 style="line-height: 30px;">2. Банковский перевод.</h4>
                    <h4 style="line-height: 30px;">
                        В случае оплаты банковским&nbsp;переводом,доставка
                        товара осуществляется после того как деньги поступили на
                        наш счет.&nbsp;После этого с вами свяжется
                        наш&nbsp;менеджер, для того, обсудить деталий получения
                        товара.
                    </h4>
                    <h4 style="line-height: 30px;">
                        Абсолютно любой товар представленный на нашем сайте Вы
                        можете приобрести в кредит!
                    </h4>
                </div>
            </div>
        </div>
    </main>
</template>
<script>
import BreadcrumbItem from "./../../components/common_components/BreadcrumbItem.vue";

export default {
    name:'GuaranteePage',
    components: {
        BreadcrumbItem
    },
    data() {
        return {
            pageName: "Гарантия"
        };
    }
};
</script>
