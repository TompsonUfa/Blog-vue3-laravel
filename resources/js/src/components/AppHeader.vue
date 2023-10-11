<template>
    <header class="header">
        <div class="row">
            <div class="col-12">
                <div class="header__logo logo text-center">
                    <router-link to="/" class="logo__link">
                        EmptyBlog
                    </router-link>
                </div>
            </div>
            <div class="col-12">
                <nav class="navbar header__navbar navbar-expand-lg bg-body-tertiary">
                    <div class="container-fluid">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <router-link to="/" class="nav-link">Главная</router-link>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Категории
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><router-link to="/categories/technologies" class="dropdown-item">Технологии</router-link></li>
                                        <li><router-link to="/categories/life" class="dropdown-item">Жизнь</router-link></li>
                                        <li><router-link to="/categories/cooking" class="dropdown-item">Кулинария</router-link></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <router-link to="/about" class="nav-link">Обо мне</router-link>
                                </li>
                                <li class="nav-item">
                                    <router-link to="/contact" class="nav-link">Контакты</router-link>
                                </li>
                            </ul>
                            <form class="d-flex" role="search">
                                <input class="form-control me-2" type="search" placeholder="Парижские сны..." aria-label="Search">
                                <button class="btn btn-outline-success" type="submit">Поиск</button>
                            </form>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>
</template>

<script>
export default {
    name: "AppHeader"
}
</script>

<style scoped lang="scss">
    .header{
        .logo{
            &__link{
                font-size: 90px;
                color: black;
                text-decoration: none;
            }
        }
        &__navbar {
            border-bottom: 1px solid #e6e6e6;
            a {
                text-transform: uppercase;
            }
        }
    }
</style>
