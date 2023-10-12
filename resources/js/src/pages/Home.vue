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
                <swiper-slide>
                    <a href="/" style="background-image: url('/storage/images/1.jpeg');" class="swiper-slide__link">
                        <div class="swiper-slide__content row">
                            <div class="col-6">
                                <div class="swiper-slide__categories">
                                    Life
                                </div>
                                <div class="swiper-slide__meta meta">
                                    <div class="meta__author">
                                        <img src="/storage/images/4.jpeg" class="meta__img" alt="Roman">
                                        Roman
                                    </div>
                                    <div class="meta__date">
                                        Октябрь 12, 2023
                                    </div>
                                </div>
                                <h3 class="swiper-slide__title">
                                    Смысл жизни в ней!
                                </h3>
                                <p class="swiper-slide__desc">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab adipisci aperiam asperiores cumque
                                    debitis distinctio doloribus laudantium
                                </p>
                            </div>
                        </div>
                    </a>
                </swiper-slide>
                <swiper-slide>
                    <a href="/" style="background-image: url('/storage/images/2.jpeg');" class="swiper-slide__link">
                        <div class="swiper-slide__content row">
                            <div class="col-6">
                                <div class="swiper-slide__categories">
                                    Life
                                </div>
                                <div class="swiper-slide__meta meta">
                                    <div class="meta__author">
                                        <img src="/storage/images/4.jpeg" class="meta__img" alt="Roman">
                                        Roman
                                    </div>
                                    <div class="meta__date">
                                        Октябрь 12, 2023
                                    </div>
                                </div>
                                <h3 class="swiper-slide__title">
                                    Смысл жизни в ней!
                                </h3>
                                <p class="swiper-slide__desc">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab adipisci aperiam asperiores cumque
                                    debitis distinctio doloribus laudantium
                                </p>
                            </div>
                        </div>
                    </a>
                </swiper-slide>
                <swiper-slide>
                    <a href="/" style="background-image: url('/storage/images/3.jpeg');" class="swiper-slide__link">
                        <div class="swiper-slide__content row">
                            <div class="col-6">
                                <div class="swiper-slide__categories">
                                    Life
                                </div>
                                <div class="swiper-slide__meta meta">
                                    <div class="meta__author">
                                        <img src="/storage/images/4.jpeg" class="meta__img" alt="Roman">
                                        Roman
                                    </div>
                                    <div class="meta__date">
                                        Октябрь 12, 2023
                                    </div>
                                </div>
                                <h3 class="swiper-slide__title">
                                    Смысл жизни в ней!
                                </h3>
                                <p class="swiper-slide__desc">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab adipisci aperiam asperiores cumque
                                    debitis distinctio doloribus laudantium
                                </p>
                            </div>
                        </div>
                    </a>
                </swiper-slide>
            </swiper>
        </div>
    </div>
    <div class="row">
        <div class="col-9">
            <blog-list/>
        </div>
        <div class="col-3">
            2
        </div>
    </div>
</template>
<script>
import BlogList from "@/components/BlogList.vue";
import {Swiper, SwiperSlide} from "swiper/vue";
import {Autoplay, Pagination } from 'swiper/modules';
import 'swiper/css';
import 'swiper/css/pagination';

export default {
    name: "Home",
    components: {
        Swiper,
        SwiperSlide,
        BlogList
    },
    setup() {
        return {
            modules: [Autoplay, Pagination],
        };
    },
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
