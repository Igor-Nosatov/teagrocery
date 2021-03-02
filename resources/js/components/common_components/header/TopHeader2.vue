<template>
    <div class="col-12 col-sm-12 col-md-4 col-lg-4">
        <ul
            class="nav d-flex flex-row justify-content-around  font-weight-bold text-secondary"
        >
            <li class="nav-item">
                <router-link
                    class="nav-link p-1 header-text-color"
                    :to="{ name: 'faq' }"
                    >FAQ</router-link
                >
            </li>
            <li class="nav-item">
               <router-link
                    class="nav-link p-1 header-text-color"
                    :to="{ name: 'posts' }"
                    >Блог</router-link>
            </li>
            <li class="nav-item">
               <router-link
                    class="nav-link p-1 header-text-color"
                    :to="{ name: 'contact' }"
                    >Контакты</router-link>
            </li>
        </ul>
    </div>
</template>

<script>
export default {
    name:'TopHeader2',
}
</script>
