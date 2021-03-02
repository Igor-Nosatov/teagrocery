<template> 
<div class="body-wrapper">
    <header class="header">
        <div class="top-header pt-2 border-bottom">
            <div class="wrapper">
                <div class="row no-gutters">
                    <TopHeader1 />
                    <TopHeader2 />
                    <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                        <ul class="nav float-right pb-3">
                            <li class="nav-item ">
                                <router-link v-if="!loggedIn()" class="nav-link" :to="{name: 'login'}">
                                    <i class="fas fa-key fa-2x header-text-color"></i>Войти
                                </router-link>
                            </li>
                            <li class="nav-item">
                                <a v-if="loggedIn()" class="nav-item nav-link logout" @click="logout">
                                    <i class="fas fa-user-check fa-2x header-text-color"></i>Выйти
                                   </a>
                            </li>
                            <li class="nav-item pl-2 pr-2">
                                <router-link class="nav-link" :to="{name: 'wishlist'}">
                                    <i class="fab fa-gratipay fa-2x header-text-color"></i> 
                                </router-link>
                            </li>
                            <li class="nav-item pl-2 pr-2">
                                <router-link class="nav-link" :to="{name: 'cart'}">
                                    <i class="fas fa-shopping-cart fa-2x header-text-color">
                                    </i> 
                                </router-link>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <MiddleHeader />
        <BottomHeader />
    </header>
    <transition name="component-fade" mode="out-in">
    <router-view :key="$route.fullPath"></router-view>
    </transition>
    <FooterItem />
</div>
</template>

<script>
import axios from 'axios';

import TopHeader1 from './../components/common_components/header/TopHeader1.vue';
import TopHeader2 from './../components/common_components/header/TopHeader2.vue';
import MiddleHeader from './../components/common_components/header/MiddleHeader.vue';
import BottomHeader from './../components/common_components/header/BottomHeader.vue';
import FooterItem from './../components/common_components/FooterItem.vue';
export default {
    components: {
        TopHeader1,
        TopHeader2,
        MiddleHeader,
        BottomHeader,
        FooterItem,
    },
    methods: {
        logout() {
            return axios.get(`${window.location.origin}/api/logout`)
                .then(res => {
                    localStorage.clear();
                    location.reload();
                }).catch(err => {
                    return auth.resetHeaders();
                });
        },
        loggedIn() {
            if (!localStorage) return null;
            return localStorage.getItem('token');
        },
    }

}
</script>
<style >
.logout{
    cursor:pointer;
}
</style>


