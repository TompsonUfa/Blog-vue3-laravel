<template>
    <div class="sidebar">
        <PopularList></PopularList>
    </div>
</template>

<script>
import PopularList from "@/components/PopularList.vue"
export default {
    name: "AppSidebar",
    components: {
        PopularList,
    }
}
</script>

<style scoped lang="scss">
    .sidebar {
        box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
    }
</style>
