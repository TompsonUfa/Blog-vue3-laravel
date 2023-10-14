<template>
    <div class="container">
        <app-header/>
        <div class="main">
            <router-view></router-view>
        </div>
    </div>
</template>

<script>
import AppHeader from "@/components/AppHeader.vue";
export default {
    components: {
        AppHeader,
    },
}
</script>
<style scoped lang="scss">
    .main {
        padding-top: 30px;
    }
</style>
