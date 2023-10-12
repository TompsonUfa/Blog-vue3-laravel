<template>
    <article class="post">
        <div class="post__header">
            <img :src="post.img" :alt="post.title" class="post__img">
        </div>
        <div class="post__content">
            <div class="post__meta">
                <span>{{ post.author }}</span>, {{post.date}}
            </div>
            <a :href="'/posts/' + post.id" class="post__link">
                <h2 class="post__title">
                    {{post.title}}
                </h2>
            </a>
            <p class="post__desc">
                {{post.desc}}
            </p>
            <div class="post__meta post__meta-two">
                <div class="post__categories">
                    {{post.categories}}
                </div>
            </div>
        </div>
    </article>
</template>

<script>
export default {
    name: "BlogPost",
    props: {
        'post': Array,
    }
}
</script>

<style scoped lang="scss">
    .post {
        box-shadow: 0px 15px 45px -9px rgba(0,0,0,.2);
        margin-bottom: calc(var(--bs-gutter-x) * 1);
        &__header{
            width: 100%;
            height: 100%;
        }
        &__img{
            width: inherit;
            height: inherit;
            object-fit: cover;
        }
        &__content {
            padding-left: 13%;
            padding-right: 13%;
            padding-top: 32px;
        }
        &__meta {
            font-size: 12px;
            color: #8d8d8d;
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
            font-size: 28px;
            margin-top: 12px;
            margin-bottom: 14px;
        }
        &__desc{
            padding-bottom: 28px;
            word-break: break-word;
            font-size: 14px;
        }
        &__meta-two {
            margin-left: -18%;
            margin-right: 92px;
            padding: 19px 0 19px 18%;
            position: relative;
            border-top: 1px solid #e9e9e9;
        }
        &__categories {
            font-size: 13px;
            text-transform: uppercase;
            color: #8d8d8d;
        }
    }
</style>
