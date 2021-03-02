<template>
<div class="col-lg-12">
    <h3 class="page-title">{{pageName}}</h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <router-link :to="{name: 'home'}">Главная</router-link>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Страница -> {{pageName}}</li>
        </ol>
    </nav>
</div>
</template>

<script>
export default {
    name:'BreadcrumbItem',
    props: {
        pageName: String
    },
}
</script>
