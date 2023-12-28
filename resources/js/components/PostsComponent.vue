<!-- resources/js/components/PostsComponent.vue -->

<template>
    <div class="wrapper">
        <div class="container">
            <h1 class="title">All Posts</h1>
            <div class="inner-wrapper">
                <post-component
                    v-for="post in posts"
                    :key="post.id"
                    :post="post"
                ></post-component>
            </div>
            <div class="pagination">{{ pagination }}</div>
        </div>
    </div>
</template>

<script>
export default {
    props: ["posts", "pagination"],
};
</script>

<style scoped>
/* Your component-specific styles go here */
</style>
