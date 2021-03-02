<template>
    <div class="middle-header pt-2">
        <div class="row no-gutters">
            <div
                class="col-12 col-sm-6  col-lg-4 d-flex justify-content-around"
            >
                <router-link
                    :to="{ name: 'home' }"
                    class="navbar-brand  d-flex justify-content-around flex-row align-items-end"
                    href="#"
                >
                    <picture>
                        <img
                            :src="'/img/logo.png'"
                            alt="logo"
                            class="logo"
                        />
                    </picture>
                    <p class="font-weight-bold pt-2">Чайный дом</p>
                </router-link>
            </div>
            <div
                class="col-12  col-sm-6 col-lg-2 d-flex justify-content-around align-items-end"
            >
                <p class="text-center text-black font-weight-bold pt-2">
                    +3(808)-99-99-78-45 <br /><span class="text-secondary"
                        >Бесплатно по Молдове</span
                    >
                </p> 
            </div>
            <div
                class="col-12 col-sm-6 col-lg-3  d-flex justify-content-around align-items-end"
            >
                <p class="text-center  text-secondary font-weight-bold pt-2">
                    Пн-пт с 9:00 до 21:00 <br />
                    Сб-вс с 9:00 до 19:00
                </p>
            </div>
            <div
                class="col-12 col-sm-6 col-lg-2  d-flex justify-content-around align-items-end"
            >
                <p class="text-center  text-secondary font-weight-bold pt-2">
                    “TEA&COFFEE Grocery” <br />
                    ул.Калеа Мосилор, 12 оф.121
                </p>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name:'MiddleHeader',
}
</script>