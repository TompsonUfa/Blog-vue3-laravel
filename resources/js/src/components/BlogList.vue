<template>
    <div class="blog-list row">
        <div class="blog-list__item col" v-for="post in posts" :key="post.id">
            <blog-post :post="post" ></blog-post>
        </div>
    </div>
</template>

<script>
import BlogPost from "@/components/BlogPost.vue";
export default {
    name: "BlogList",
    components: {
        BlogPost,
    },
    data(){
        return {
            posts: [
                {
                    id: 1, img: "/storage/images/1.jpg", title: "Жить как хочется", desc: "Lorem ipsum dolor sit amet, consectetur adipisicing elit",
                    date: "28 Октябрь, 2023", author: "Roman", categories: "Жизнь",
                },
                {
                    id: 2, img: "/storage/images/2.jpg", title: "Жить как хочется", desc: "Lorem ipsum dolor sit amet, consectetur adipisicing elit 22",
                    date: "13 Октябрь, 2023", author: "Roman", categories: "Город",
                },
                {
                    id: 3, img: "/storage/images/3.jpeg", title: "Жить как хочется", desc: "Lorem ipsum dolor sit amet, consectetur adipisicing elit 22",
                    date: "11 Октябрь, 2023", author: "Roman", categories: "Город",
                }

            ],
        }
    }
}
</script>

<style scoped lang="scss">

</style>
