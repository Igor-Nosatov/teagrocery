<template>
    <main class="main pt-5 pb-5">
        <div class="wrapper">
            <div class="row no-gutters">
                <Breadcrumb />
                <Product />
                <div class="col-12 pt-5">
                    <div class="row no-gutters">
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                            <ul
                                class="nav nav-pills mb-3"
                                id="pills-tab"
                                role="tablist"
                            >
                                <li class="nav-item" role="presentation">
                                    <a
                                        class="nav-link  btn-main ml-2 mr-2 active"
                                        id="pills-desc-tab"
                                        data-toggle="pill"
                                        href="#pills-desc"
                                        role="tab"
                                        aria-controls="pills-desc"
                                        aria-selected="true"
                                        >Описание</a
                                    >
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a
                                        class="nav-link btn-main ml-2 mr-2"
                                        id="pills-feedback-tab"
                                        data-toggle="pill"
                                        href="#pills-feedback"
                                        role="tab"
                                        aria-controls="pills-feedback"
                                        aria-selected="false"
                                        >Отзывы</a
                                    >
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a
                                        class="nav-link btn-main ml-2 mr-2"
                                        id="pills-delivery-tab"
                                        data-toggle="pill"
                                        href="#pills-delivery"
                                        role="tab"
                                        aria-controls="pills-delivery"
                                        aria-selected="false"
                                        >Доставка</a
                                    >
                                </li>
                            </ul>
                            <div class="tab-content" id="pills-tabContent">
                                <div
                                    class="tab-pane fade show active w-100"
                                    id="pills-desc"
                                    role="tabpanel"
                                    aria-labelledby="pills-desc-tab"
                                >
                                    <Description/>
                                </div>
                                <div
                                    class="tab-pane fade"
                                    id="pills-feedback"
                                    role="tabpanel"
                                    aria-labelledby="pills-feedback-tab"
                                >
                                    <div class="row no-gutters">
                                        <Comments/>
                                    </div>
                                </div>
                                <div
                                    class="tab-pane fade"
                                    id="pills-delivery"
                                    role="tabpanel"
                                    aria-labelledby="pills-delivery-tab"
                                >
                                    <PaymentInfo />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <CatalogItem v-for="product in new_products" :product="product" :key="product.id">
            </CatalogItem>
            </div>
        </div>
    </main>
</template>

<script>
import { 
    mapState,
    mapActions,
    mapGetters
} from "vuex";
import * as actionsHome from './../../vuex/modules/home/types/actions';
import * as actions from './../../vuex/modules/product/types/actions';
import * as getters from './../../vuex/modules/home/types/getters';
import Breadcrumb from "./../../components/product_components/ProductBreadcrumb.vue";
import Product from "./../../components/product_components/Product.vue";
import PaymentInfo from "./../../components/product_components/PaymentInfo.vue";
import Comments from "./../../components/product_components/Comments.vue";
import Description from "./../../components/product_components/Description.vue";
import CatalogItem from "./../../components/catalog_components/CatalogItem.vue";

export default {
    name:'ProductPage',
    components: {
        Breadcrumb,
        Product,
        CatalogItem,
        PaymentInfo,
        Description,
        Comments
    },
    async created() {
        await this.fetchNewProducts();
    },
    computed: {
        ...mapState("home", [
             'new_products',
        ]),
    },
    methods: {
        ...mapActions("home", {
            fetchNewProducts: actionsHome.GET_NEW_PRODUCTS,
        }),
    }
};
</script>


