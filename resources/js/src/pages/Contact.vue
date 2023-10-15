<template>
    <div class="contact">
        <div class="row">
            <div class="col-12">
                <h1 class="contact__title">Свяжитесь со мной</h1>
            </div>
            <div class="col-12">
                <form class="contact__form">
                    <div class="mb-3">
                        <label for="inputName" class="form-label">Имя</label>
                        <input type="text" class="form-control" name="name" id="inputName">
                    </div>
                    <div class="mb-3">
                        <label for="inputPhone" class="form-label">Телефон</label>
                        <input type="text" class="form-control" name="phone" id="inputPhone">
                    </div>
                    <div class="mb-3">
                        <label for="inputEmail" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" id="inputEmail">
                    </div>
                    <div class="mb-3">
                        <label for="inputText" class="form-label">Сообщение</label>
                        <textarea class="form-control" placeholder="Хочу чтобы вы разработали мне проект" id="inputText"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Отправить</button>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "Contact"
}
</script>



<style scoped lang="scss">
    .contact{
        padding: 25px 40px;
        background-color: #fff;
        box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
    }
</style>
