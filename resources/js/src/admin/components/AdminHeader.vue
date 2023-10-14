<template>
    <header class="header">
        <div class="header__profile"></div>
    </header>
</template>

<script>
export default {
    name: "AdminHeader",
}
</script>

<style scoped lang="scss">
    .header {
        position: fixed;
        top: 0;
        left: 0;
        display: flex;
        align-items: center;
        justify-content: space-between;
        background-color: #fff;
        width: 100%;
        height: var(--header-height);
        padding: 0 2rem 0 calc(var(--nav-width) + 2rem);
        z-index: var(--z-fixed);
        transition: .5s;
    }
    @media screen and (max-width: 992px) {
        .header {
            padding: 0;
        }
    }
</style>
