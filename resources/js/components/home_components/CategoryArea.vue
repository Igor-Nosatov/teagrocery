<template>
    <div class="row no-gutters">
        <div class="col-12">
            <h3 class="text-center section-title">Категория товаров</h3>
        </div>
        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
            <div class="row no-gutters">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 p-1">
                    <div class="tea-category align-itself-end">
                        <router-link to="/catalog/tea"
                            ><h4 class="category-section-title pl-3">
                                Чай
                            </h4></router-link
                        >
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 p-1">
                    <div class="gift-category">
                        <router-link  to="/catalog/gifts">
                            <h4 class="category-section-title pl-3">
                                Подарки
                            </h4></router-link
                        >
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 p-1">
                    <div class="plate-category ">
                        <router-link  to="/catalog/tableware"
                            ><h4 class="category-section-title pl-3">
                                Посуда
                            </h4></router-link
                        >
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
            <div class="row no-gutters">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="sweets-category">
                        <router-link to="/catalog/sweets"
                            ><h4 class="category-section-title pl-3">
                                Сладости
                            </h4></router-link
                        >
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="coffee-category">
                        <router-link to="/catalog/coffee"
                            ><h4 class="category-section-title pl-3">
                                Кофе
                            </h4></router-link
                        >
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 p-1">
                    <div class="sets-category ">
                        <router-link to="/catalog/sets">
                            <h4 class="category-section-title pl-3">
                                Чайные наборы
                            </h4></router-link
                        >
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "CategoryArea"
};
</script>