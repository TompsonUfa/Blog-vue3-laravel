<template>
    <div class="popular">
        <h3 class="popular__title text-center">Популярные посты</h3>
        <div class="popular__list">
            <PopularPost class="popular__item" :post="post" v-for="post in popularPosts" :key="post.id"></PopularPost>
        </div>
    </div>
</template>

<script>
import PopularPost from "@/components/PopularPost.vue";
 export default {
     components: {
         PopularPost,
     },
     data(){
         return {
             'popularPosts': [
                 {id: 1, title: "Жить как хочется", categories: 'Жизнь', img: '/storage/images/3.jpeg'},
                 {id: 2, title: "Я был влюблен", categories: 'Жизнь', img: '/storage/images/2.jpg'},
                 {id: 3, title: "Как я переехал в Питер", categories: 'Путешествие', img: '/storage/images/1.jpg'},
             ],
         }
     }
 }
</script>

<style scoped lang="scss">
    .popular {
        &__title {
            margin-bottom: 25px;
        }
    }
</style>
