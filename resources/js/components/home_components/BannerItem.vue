<template>
<div class="row no-gutters">
    <div class="col-lg-12">
        <div id="carouselBannerIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselBannerIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselBannerIndicators" data-slide-to="1"></li>
                <li data-target="#carouselBannerIndicators" data-slide-to="2"></li>
            </ol>
            <div class="banner-inner carousel-inner">
                <div class="carousel-item active">
                    <picture>
                        <img :src="`storage/img/banner1.jpg`" class="d-block w-100" alt="banner image">
                    </picture>
                    <div class="carousel-caption d-none d-md-block">
                        <h5 class="banner-title">Зеленый классический чай</h5>
                        <p class="banner-subtitle">Колекция зеленого чая 2020 года</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <picture>
                        <img :src="`storage/img/banner2.jpg`" class="d-block w-100" alt="banner image">
                    </picture>
                    <div class="carousel-caption d-none d-md-block">
                        <h5 class="banner-title">Белый чай</h5>
                        <p class="banner-subtitle">Колекция белого чая 2020 года</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <picture>
                        <img :src="`storage/img/banner1.jpg`" class="d-block w-100" alt="banner image">
                    </picture>
                    <div class="carousel-caption d-none d-md-block">
                        <h5 class="banner-title">Черный чай</h5>
                        <p class="banner-subtitle">Колекция черного чая 2020 года</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselBannerIndicators" role="button" data-slide="prev">
                <picture>
                    <img :src="`storage/img/left.svg`" alt="" class="arrow-icon">
                </picture> <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselBannerIndicators" role="button" data-slide="next">
                <picture>
                    <img :src="`storage/img/right.svg`" alt="" class="arrow-icon">
                </picture> <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>
</template>

<script>
export default {
    name: "BannerItem"
};
</script>