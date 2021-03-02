<template>
<li class="nav-item1">
    <picture>
        <img :src="'/img/'+cart.products.img" class="checkout-img" />
    </picture> <br>
    <span class="font-weight-bold">{{cart.products.name}}</span>
    <img :src="`storage/img/close.svg`" alt=""> <span>{{cart.quantity}}шт.</span>
    <hr/>
</li>

</template>

<script>
export default {
    name:'OrderProduct',
    props: {
        cart: Object,
        required: true
    },
}
</script>

<style>
.checkout-img {
    width: 50px;
    height: 70px;
    margin:5px 3px;
}
</style>
