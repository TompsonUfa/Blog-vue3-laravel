<template>
    <div class="about">
        <div class="row">
            <div class="col-12 mb-3">
                <h1 class="title about__title">Обо мне</h1>
            </div>
            <div class="col-12">
                <div class="about__content" v-html="about">
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import {mapActions, mapGetters} from "vuex";

export default {
    name: "About",
    computed: {
        ...mapGetters(["about"]),
    },
    methods: {
      ...mapActions(['getAbout']),
    },
    mounted() {
        this.getAbout();
    }
}
</script>

<style lang="scss">
    .about {
        padding: 75px;
        background-color: #fff;
        box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;

        &__content{
            img {
                max-width: 100%;
            }
        }
    }
</style>
