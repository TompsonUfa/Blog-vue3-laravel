<template>
    <div class="container">
        <app-header/>
        <div class="main">
            <div class="row">
                <div class="col-9">
                    <router-view></router-view>
                </div>
                <div class="col-3">
                    <AppSidebar class="p-4"></AppSidebar>
                </div>
            </div>
        </div>
    </div>

</template>
<script>
import AppHeader from "@/components/AppHeader.vue";
import AppSidebar from "@/components/AppSidebar.vue";
import AppLoader from "@/components/AppLoader.vue";
import {mapActions} from "vuex";

export default {
    components: {
        AppSidebar,
        AppHeader,
    },
    methods: {
        ...mapActions(['getCategories']),
    },
    mounted() {
       this.getCategories();
    }
}
</script>
<style scoped lang="scss">
    .main {
        padding: 30px;
    }
</style>
