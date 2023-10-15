<template>
    <div class="modal fade" id="modal-remove" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Удалить</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Вы действительно хотите удалить <slot></slot>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary">Удалить</button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "ModalRemove"
}
</script>

<style scoped lang="scss">
</style>
