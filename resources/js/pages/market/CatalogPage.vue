<template>
<main class="main">
    <div class="row no-gutters">
        <div class="col-12 pl-3">
            <nav aria-label="breadcrumb ml-4">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Главная</a></li>
                    <li class="breadcrumb-item"><a href="#">Каталог</a></li>
                    <li class="breadcrumb-item active" aria-current="page"></li>
                </ol>
            </nav>
            <h3 class="font-weight-bold pl-4">Чай</h3>
        </div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-3">
            <aside class="aside">
                <form>
                    <div class="product-category form-row pl-1 pr-1 pt-1">
                        <div class="product-producer form-row pl-1 pr-1 pt-1">
                        <div class="col-12">
                            <div class="d-flex flex-row">
                                <h5>Поиск</h5>
                                <div class="line"></div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <input type="text" name="search" class="form-control" id="catalogSearch" placeholder="Введите название товара ..." v-model="selected.search">
                            </div>
                        </div>
                    </div>
                        <div class="col-12">
                            <div class="d-flex flex-row">
                                <h5>Категория</h5>
                                <div class="line"></div>
                            </div>
                        </div>
                        <div class="col-12" >
                            <label class="container" v-for="(category, index) in categories" :key="index" >
                                <span class="checkbox-text">{{ category.name }} ({{ category.products_count }})</span>
                                <input type="checkbox" name="category" :value="category.id" :id="'category'+index" v-model="selected.categories">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </div>
                    <div class="price-filter form-row pl-1 pr-1 ">
                        <div class="col-12">
                            <div class="d-flex flex-row">
                                <h5>Цена</h5>
                                <div class="line"></div>
                            </div>
                        </div>
                        <div class="col-12">
                             <label class="container" v-for="(price, index) in prices" :key="index">
                                <span class="checkbox-text"> {{ price.name }}</span>
                                <input type="checkbox" name="category" :value="index" :id="'price'+index" v-model="selected.prices">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </div>
                    <div class="product-brand form-row pl-1 pr-1 pt-1">
                        <div class="col-12">
                            <div class="d-flex flex-row">
                                <h5>Бренды</h5>
                                <div class="line"></div>
                            </div>
                        </div>
                        <div class="col-12">
                            <label class="container" v-for="(brand, index) in brands" :key="index">
                                <span class="checkbox-text">{{ brand.name }} ({{ brand.products_count }})</span>
                                <input type="checkbox" name="brand" :value="brand.id" :id="'brand'+index" v-model="selected.brands">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </div>
                </form>
            </aside>
        </div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-9">
            <div class="row no-gutters">
                <div class="col-12">
                    <div class="d-flex flex-row flex-wrap justify-content-between">
                        <div class="product-qty  w-25">
                            <input type="text" name="search" class="form-control" id="productSearch" placeholder="Поиск ..." v-model="selected.custom_search">
                            <p class="font-weight-bold pt-2 pl-2">В наличии ({{ this.meta_data.total }}) шт.</p>
                        </div>
                        <div class="product-sort d-flex  ">
                            <div class="dropdown">
                                <button class="btn-sort p-3" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Сортировать по цене:
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="btn-sort m-1" @click="change_sort('max')">По увеличению</a>
                                    <a class="btn-sort m-1" @click="change_sort('min')">По убыванию</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row no-gutters">
                <CatalogItem v-for="product in catalog_products" :product="product" :key="product.id">
                </CatalogItem>
            </div>
            <div class="row no-gutters mt-2 pr-4 pb-5">
                <div class="col-12">
                    <nav aria-label="Page navigation product  ">
                        <pagination :meta_data="meta_data" v-on:next="fetchProducts">
                        </pagination>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</main>
</template>

<script>
import _ from 'lodash'
import axios from 'axios';
import { mapActions } from "vuex";
import * as actions from "./../../vuex/modules/catalog/types/actions";
import CatalogItem from './../../components/catalog_components/CatalogItem.vue';
import Pagination from './../../components/catalog_components/Pagination.vue';
export default {
    name:'CatalogPage',
    components: {
        CatalogItem,
        Pagination
    },
    data() {
        return {
            prices: [],
            catalog_products: [],
            categories: [],
            brands: [],
            selected: {
                type: Object,
                sortBy: null,
                prices: [],
                categories: [],
                brands: [],
                search: '',
                custom_search: '',
                sort_field: 'name',
                sort_direction: 'desc',
            },
            meta_data: {
                last_page: null,
                current_page: 1,
                prev_page_url: null,
                per_page: null,
                total: ''
            }
        }
    },
    async mounted() {
        this.fetchProducts();
        this.fetchPrices();
        this.fetchCategories();
        this.fetchBrands();
    },
    watch: {
        selected: {
            handler: function () {
                this.fetchProducts();
                this.fetchCategories();
                this.fetchBrands();
                this.fetchPrices();
                this.meta_data.total;
            },
            deep: true
        },
        search: function () {
            if (this.this.meta_data.current_page + 1 > this.this.meta_data.last_page)
                this.this.meta_data.current_page = this.meta_data.last_page - 1;
        },
        custom_search: function () {
            if (this.this.meta_data.current_page + 1 > this.this.meta_data.last_page)
                this.this.meta_data.current_page = this.meta_data.last_page - 1;
        }
    },

    methods: {
        ...mapActions("catalog", {
            getProducts: actions.FETCH_CATALOG_PRODUCT,
            getCategories: actions.FETCH_CATEGORIES,
            getPrice: actions.FETCH_PRICE_FOR_PRODUCTS
        }),
        change_sort(field) {
            switch (field) {
                case 'min':
                    this.selected.sort_field = 'price';
                    this.selected.sort_direction = 'asc';
                    break;
                case 'max':
                    this.selected.sort_field = 'price';
                    this.selected.sort_direction = 'desc';
                    break;
            }
        },

        fetchProducts(page = 1) {
            axios.get(`/api/catalog/${this.$route.params.slug}`, {
                params: {
                    ...this.selected,
                    page
                }
            }).then((res) => {
                this.catalog_products = res.data.products.data;
                this.meta_data.last_page = res.data.products.last_page;
                this.meta_data.current_page = res.data.products.current_page;
                this.meta_data.prev_page_url = res.data.products.prev_page_url;
                this.meta_data.total = res.data.products.total;
                this.meta_data.per_page = res.data.products.per_page;
            });
        },

        async fetchBrands() {
           await axios.get(`/api/catalog/${this.$route.params.slug}`, {
                    params: _.omit(this.selected, 'brands')
                })
                .then((res) => {
                    this.brands = res.data.brands;
                });
        },
        async fetchCategories() {
            await axios.get(`/api/catalog/${this.$route.params.slug}`,
                {
                    params: _.omit(this.selected, "categories")
                }
            ).then((res) => {
                    this.categories = res.data.categories;
                });
        },
        async fetchPrices() {
            this.prices = await this.getPrice(`${this.$route.params.slug}`, {
                params: _.omit(this.selected, "prices")
            });
        },
    }
}
</script>
