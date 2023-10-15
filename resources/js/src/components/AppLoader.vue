<template>
    <div class="loader">
        <span class="loader__spinner"></span>
    </div>
</template>

<script>
export default {
    name: "AppLoader"
}
</script>

<style scoped lang="scss">
    .loader {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100vh;
        overflow-y: hidden;
        background-color: #fff;
        z-index: 1000;
        display: flex;
        justify-content: center;
        align-items: center;
        &__spinner {
            width: 48px;
            height: 48px;
            border: 5px solid var(--first-color);
            border-bottom-color: transparent;
            border-radius: 50%;
            display: inline-block;
            box-sizing: border-box;
            animation: rotation 1s linear infinite;
        }
        @keyframes rotation {
            0% {
                transform: rotate(0deg);
            }
            100% {
                transform: rotate(360deg);
            }
        }
    }
</style>
