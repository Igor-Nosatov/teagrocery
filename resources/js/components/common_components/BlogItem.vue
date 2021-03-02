<template>
    <div class="card">
        <div class="row no-gutters">
            <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                <picture>
                    <img
                        :src="'/storage/img/' + post.img_url"
                        class="post-image"
                    />
                </picture>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                <div class="card-body">
                    <h4 class="text-center font-weight-bold">
                        {{ post.name }}
                    </h4>
                    <p class="text-justify pl-3 pr-3 card-post-text">
                        {{ post.description | truncate(75, "...") }}
                    </p>
                    <div
                        class="d-flex flex-column flex-wrap justify-content-between  pl-3 pr-3"
                    >
                        <p class="block-post__date card-post-text">
                            {{ post.created_at }}
                        </p>
                        <p class="block-post__link card-post-text">
                            <router-link
                                :to="{
                                    name: 'post',
                                    params: { title: post.title }
                                }"
                                >Читать далее
                                <picture>
                                    <img
                                        :src="`storage/img/link.svg`"
                                        alt="post.title"
                                    />
                                </picture>
                            </router-link>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "BlogItem",
    props: {
        post: Object,
        required: true
    }
};
</script>
