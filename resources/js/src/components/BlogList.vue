<template>
    <div class="blog-list row">
        <div class="col-6">
            <blog-post/>
        </div>
        <div class="col-6">
            <blog-post/>
        </div>
        <div class="col-6">
            <blog-post/>
        </div>
    </div>
</template>

<script>
import BlogPost from "@/components/BlogPost.vue";
export default {
    name: "BlogList",
    components: {
        BlogPost,
    }
}
</script>

<style scoped lang="scss">

</style>
