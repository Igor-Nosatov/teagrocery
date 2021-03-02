<template>
<nav class="mt-3">
    <ul class="pagination pagination-lg">

        <li class="page-item" :class="{ 'disabled': meta_data.prev_page_url === null }">
            <a href="#" class="page-link" @click="next(meta_data.current_page-1)">
                &laquo;
            </a>
        </li>

        <li class="page-item" v-for="page in pages" :key="page" :class="{ 'active':meta_data.current_page === page }">
            <a href="#" @click.prevent="next(page)" class="page-link">
                {{ page }}
            </a>
        </li>

        <li class="page-item" :class="{ 'disabled': meta_data.current_page === meta_data.last_page }">
            <a href="#" class="page-link" @click="next(meta_data.current_page+1)">
                &raquo;
            </a>
        </li>
    </ul>
</nav>
</template>

<script>
export default {
    props: ['meta_data'],
    data() {
        return {
            offset: 2
        }
    },
    computed: {
        pages: function () {
            let pages = [];
            for (let i = this.rangeStart; i <= this.rangeEnd; i++) {
                pages.push(i);
            }
            return pages
        },
        rangeStart: function () {
            let start = this.meta_data.current_page - this.offset
            return (start > 0) ? start : 1
        },
        rangeEnd: function () {
          return Math.ceil(this.meta_data.total / this.meta_data.per_page);
        }

    },
    methods: {
        next(page) {
            this.$emit('next', page);
        }
    }
}
</script>
