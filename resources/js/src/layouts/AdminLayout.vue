<template>
    <div class="main">
        <AdminHeader></AdminHeader>
        <AdminSidebar></AdminSidebar>
        <div class="content">
            <div class="container">
                <router-view/>
            </div>
        </div>
    </div>
</template>

<script>
import AdminHeader from "@/admin/components/AdminHeader.vue";
import AdminSidebar from "@/admin/components/AdminSidebar.vue";
import {mapActions} from "vuex";
export default {
    name: "AdminLayout.vue",
    components: {
        AdminSidebar,
        AdminHeader
    },
    methods: {
      ...mapActions(['getCategories']),
    },
    mounted() {
        this.getCategories();
    }
}
</script>

<style  lang="scss">

    .content {
        padding: 20px 0;
        margin: var(--header-height) 0 0 var(--nav-width);

        &__box{
            background-color: #fff;
            box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
            padding: 30px;
            border-radius: 10px;
        }
        &__title {
            margin-bottom: 30px;
        }
    }
    @media screen and (max-width: 992px) {
        .content{
            margin: var(--header-height) 0 0 0;
        }
    }
</style>
