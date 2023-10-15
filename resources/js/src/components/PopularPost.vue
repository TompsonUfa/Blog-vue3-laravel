<template>
    <div class="popular-post row">
        <div class="col-3 p-0">
            <div class="popular-post__thumb">
                <img :src=post.img :alt=post.title class="popular-post__img">
            </div>
        </div>
        <div class="col-9">
            <span class="popular-post__meta">
                {{post.categories}}
            </span>
            <a href="/" class="popular-post__link">
                <h6 class="popular-post__title"> {{post.title}}</h6>
            </a>
        </div>
    </div>
</template>

<script>
export default {
    name: "PopularPost",
    props: {
        "post": Array,
    }
}
</script>

<style scoped lang="scss">
.popular-post{
    padding-bottom: 15px;
    margin-bottom: 25px;
    border-bottom: 1px solid #e3e3e3;
    &:last-child{
        padding-bottom: 0;
        margin-bottom: 0;
        border: none;
    }
    &__thumb {
        width: 100%;
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    &__img{
        width: 55px;
        height: 55px;
        border-radius: 50%;
        object-fit: cover;
    }
    &__meta {
        font-size: 14px;
        color: #8d8d8d;
        text-transform: uppercase;
    }
    &__link {
        color: #000;
        text-decoration: none;
        transition: .3s all ease-in-out;
        &:hover{
            color: #6610f2;
        }
    }
    &__title {
        font-size: 17px;
    }
}
</style>
