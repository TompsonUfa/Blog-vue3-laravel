<template>
    <div class="sidebar">
        <nav class="nav">
            <router-link to="/" class="nav__logo">EB</router-link>
            <div class="nav__list">
                    <router-link :to="'/admin' + link.src" v-for="link in this.links" :key="link.id"
                                 class="nav__link">
                        {{link.name}}
                    </router-link>
            </div>
        </nav>
    </div>
</template>

<script>
export default {
    name: "AdminSidebar",
    data(){
        return {
            links: [
                {
                    id: 1, name: "Обо мне", src: '/about',
                },
                {
                    id: 2, name: "Контакты", src: '/contact',
                },
                {
                    id: 3, name: "Категории", src: '/categories',
                },
                {
                    id: 4, name: "Посты", src: '/posts',
                },
            ],
        }
    }
}
</script>

<style scoped lang="scss">
    .sidebar {
        position: fixed;
        top: 0;
        left: 0;
        width: var(--nav-width);
        height: 100vh;
        background-color: var(--first-color);
        transition: .5s;
        z-index: var(--z-fixed);
        padding: 1rem 1rem 0 0;
        width: var(--nav-width);
    }
    .nav {
        flex-direction: column;
        &__logo {
            display: flex;
            justify-content: center;
            align-items: center;
            color: #fff;
            text-decoration: none;
            font-size: 35px;
            margin-bottom: 30px;
        }
        &__link {
            display: flex;
            justify-content: center;
            align-items: center;
            text-decoration: none;
            color: var(--first-color-light);
            font-size: 25px;
            transition: 0.5s;
            margin-bottom: 20px;
            &.active, &:hover {
                color: #fff;
            }
        }
    }
    @media screen and (max-width: 992px) {
        .sidebar {
            display: none;
        }
    }
</style>
