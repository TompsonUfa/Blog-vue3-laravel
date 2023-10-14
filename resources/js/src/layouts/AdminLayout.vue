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
export default {
    name: "AdminLayout.vue",
    components: {
        AdminSidebar,
        AdminHeader
    }
}
</script>

<style scoped lang="scss">
    .content {
        padding: 20px 0;
        margin: var(--header-height) 0 0 var(--nav-width);
    }
    @media screen and (max-width: 992px) {
        .content{
            margin: var(--header-height) 0 0 0;
        }
    }
</style>
