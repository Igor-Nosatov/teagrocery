<template>
    <div class="bottom-header pt-4 pb-3 border-bottom">
        <div class="row no-gutters">
            <div class="col-lg-12">
                <ul
                    class="nav d-flex flex-row justify-content-around font-weight-bold text-secondary"
                >
                    <li
                        v-for="(type, index) in types"
                        :key="index"
                        class="nav-item"
                    >
                       
                           <router-link
                            :to="{
                                name: 'catalog',
                                params: { slug: type.slug }
                            }"
                            class="nav-link  p-1 header-text-color"
                        >
                            {{ type.name }}
                        </router-link>
                       
                    </li>
                </ul>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name:'BottomHeader',
    data() {
        return {
            types: []
        };
    },
    mounted() {
        this.fetchTypes();
    },
    methods: {
        fetchTypes() {
            axios.get("/api/types/").then(res => {
                this.types = res.data.types;
            });
        }
    }
};
</script>
