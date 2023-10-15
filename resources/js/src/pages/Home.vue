<template>
    <div class="row">
        <div class="col-12">
            <swiper
                :slides-per-view="1"
                :space-between="5"
                :loop="true"
                :pagination = "{
                clickable: true,

            }"
                :autoplay="{
                delay: 2500,
                disableOnInteraction: false,
            }"
                :modules="modules"
            >
                <swiper-slide v-for="post in this.mainPosts" :key="post.id">
                    <a :href="'/posts/' + post.id"
                       :style="'background-image: url(' + post.img +')'"
                       class="swiper-slide__link"
                    >
                        <div class="swiper-slide__content row">
                            <div class="col-6">
                                <div class="swiper-slide__categories">
                                    {{ post.categories }}
                                </div>
                                <div class="swiper-slide__meta meta">
                                    <div class="meta__author">
                                        <img :src=post.authorImg class="meta__img" alt="Roman">
                                        {{ post.author }}
                                    </div>
                                    <div class="meta__date">
                                        {{ post.date }}
                                    </div>
                                </div>
                                <h3 class="swiper-slide__title">
                                    {{ post.title }}
                                </h3>
                                <p class="swiper-slide__desc">
                                    {{ post.desc }}
                                </p>
                            </div>
                        </div>
                    </a>
                </swiper-slide>
            </swiper>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <blog-list/>
        </div>
    </div>
</template>
<script>
import BlogList from "@/components/BlogList.vue";
import AppSidebar from "@/components/AppSidebar.vue";
import {Swiper, SwiperSlide} from "swiper/vue";
import {Autoplay, Pagination } from 'swiper/modules';
import 'swiper/css';
import 'swiper/css/pagination';

export default {
    name: "Home",
    components: {
        Swiper,
        SwiperSlide,
        BlogList,
        AppSidebar,
    },
    setup() {
        return {
            modules: [Autoplay, Pagination],
        };
    },
    data(){
        return {
            'mainPosts' : [
                {id: 1, name: 'Жизнь в кайф', desc: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab adipisci aperiam asperiores cumque',
                    img: "storage/images/1.jpg", categories: "Жизнь", author: "Roman", authorImg: "/storage/images/roma.jpg",
                    date: "Октрябрь 28, 2023"},
                {id: 2, name: 'Жизнь в кайф2', desc: '222 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab adipisci aperiam asperiores cumque',
                    img: "storage/images/2.jpg", categories: "Красота", author: "Roman", authorImg: "/storage/images/roma.jpg",
                    date: "Октрябрь 28, 2023"},
            ],
        }
    }
}
</script>


<style lang="scss">
    .swiper-slide {
        &__link{
            display: flex;
            justify-content: center;
            align-items: center;
            background-size: cover;
            background-position: center center;
            padding: 30px 80px;
            position: relative;
            margin-bottom: 30px;
            height: 450px;
            text-decoration: none;
        }
        &__categories{
            margin-bottom: 3rem;
            display: inline-block;
            background: #6610f2;
            padding: 8px 10px;
            line-height: 1.5;
            font-size: 12px;
            border-radius: 4px;
            text-transform: uppercase;
            color: #fff;
            letter-spacing: .2em;
        }
        &__title{
            color: #fff;
        }
        &__desc{
            color: #fff;
            font-size: 18px;
        }
    }
    .swiper-pagination{
        bottom: 10% !important;
    }
    .swiper-pagination-bullet{
        background: #fff !important;
    }
    .swiper-pagination-bullet-active {
        background: #6610f2 !important;
    }
    .meta {
        display: flex;
        align-items: center;
        gap: 10px;
        font-size: 15px;
        text-transform: uppercase;
        color: #fff;
        margin-bottom: 30px;

        &__author {
            display: flex;
            align-items: center;
            gap: 10px;
        }
        &__img {
            width: 45px;
            height: 45px;
            object-fit: cover;
            border-radius: 50%;
        }
    }
</style>
