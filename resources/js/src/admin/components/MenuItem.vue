<template>
    <button
        class="menu-item"
        @click="action"
        :title="title"
    >
        <i :class=icon></i>
    </button>
</template>

<script>
import 'remixicon/fonts/remixicon.css'
export default {
    name: "MenuItem",
    props: {
        icon: {
            type: String,
            required: true,
        },

        title: {
            type: String,
            required: true,
        },

        action: {
            type: Function,
            required: true,
        },

        isActive: {
            type: Function,
            default: null,
        },
    },
}
</script>

<style scoped lang="scss">
.menu-item {
    background: transparent;
    border: none;
    border-radius: 0.4rem;
    color: #fff;
    cursor: pointer;
    height: 1.75rem;
    padding: 0.25rem;
    margin-right: 0.25rem;
    width: 1.75rem;

    svg {
        fill: currentColor;
        height: 100%;
        width: 100%;
    }

    &.is-active,
    &:hover {
        background-color: #303030;
    }
}
</style>
