<template>
    <div class="col-12 col-sm-6 col-md-6 col-md-3 col-lg-3 pl-1 pr-1">
        <div class="card">
            <router-link
                    :to="{ name: 'product', params: { title: product.title } }"
                    class="mx-auto p-2 pt-4"
                >
                <picture>
                    <img
                        :src="'/img/' + product.img"
                        alt="image"
                        class="card-img-top"
                    />
                </picture>
              </router-link>
            <div class="card-body">
                <p class="card-subtext text-center font-weight-bold">
                    Брэнд: {{ product.brands.name }}
                </p>
                <p  class="card-text text-center font-weight-bold">
                    Цена: {{ product.price | toFix | formattedPrice }}
                </p>
                <h5 class="card-title text-center font-weight-bold">
                    {{ product.name }}
                </h5>
                <router-link
                    :to="{ name: 'product', params: { title: product.title } }"
                    class="mx-auto btn-main p-2"
                >
                    Подробнее
                    <picture>
                        <img
                            :src="`storage/img/cart.svg`"
                            alt=""
                            class="btn-image"
                        />
                    </picture>
                </router-link>
            </div>
        </div>
    </div>
</template>

<script>
import toFix from "./../../filters/toFix";
import formattedPrice from "./../../filters/price-format";
export default {
    props: {
        product: Array
    },
    filters: {
        toFix,
        formattedPrice
    }
};
</script>
