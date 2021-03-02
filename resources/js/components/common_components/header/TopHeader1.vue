<template>
    <div class="col-12 col-sm-12 col-md-4 col-lg-4">
        <ul
            class="nav d-flex flex-row justify-content-around font-weight-bold text-secondary"
        >
            <li class="nav-item">
                <router-link
                    class="nav-link  p-1 header-text-color"
                    :to="{ name: 'about' }"
                    >О компании</router-link
                >
            </li>
            <li class="nav-item">
                <router-link
                    class="nav-link p-1 header-text-color"
                    :to="{ name: 'discounts' }"
                    >Партнерам</router-link
                >
            </li>
            <li class="nav-item">
                <router-link
                    class="nav-link p-1 header-text-color"
                    :to="{ name: 'delivery' }"
                    >Доставка и оплата</router-link
                >
            </li>
        </ul>
    </div>
</template>
<script>
export default {
    name:'TopHeader1',
}
</script>