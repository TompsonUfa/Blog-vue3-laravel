<template>
    <div class="modal fade" id="modal-remove" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Удалить запись</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p v-if="item">Вы уверены, что хотите удалить "{{ item.title}}"?</p>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" @click="$emit('deleteItem')" data-bs-dismiss="modal">Удалить</button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "ModalRemove",
    props: {
        item : Object,
    },
    emits: ['deleteItem']
}
</script>

<style scoped lang="scss">
</style>
