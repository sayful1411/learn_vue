<!-- resources/js/components/PostComponent.vue -->

<template>
    <div class="card">
        <!-- Vue template code for posts -->
        <div class="inner-card">
            <div class="img-wrapper">
                <img :src="post.image" alt="" />
            </div>
            <div class="content">
                <h1>{{ post.title }}</h1>
                <p>{{ truncate(post.excerpt, 100, "...") }}</p>
            </div>
            <div class="btn-wrapper">
                <button class="view-btn" @click="openLightbox(post.image)">
                    View
                </button>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: ["post"],
    methods: {
        truncate(text, length, suffix) {
            return text.length > length
                ? text.substr(0, length) + suffix
                : text;
        },
        openLightbox(imageSrc) {
            // Implement your lightbox logic here
        },
    },
};
</script>

<style scoped>
/* Your component-specific styles go here */
</style>
