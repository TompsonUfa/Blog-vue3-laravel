<template>
    <div class="modal fade" id="modal-edit" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Редактировать запись</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <label for="exampleFormControlInput" class="form-label">Название</label>
                    <input :class='!valid?"is-invalid":null' type="text" id="exampleFormControlInput" class="form-control" v-model=this.value>
                </div>
                <div class="modal-footer">
                    <button @click="editItem" class="btn btn-primary">Изменить</button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "ModalEdit",
    data(){
        return {
            value: null,
            valid: true,
        }
    },
    props: {
      editModal : Object, item: Object,
    },
    emits: [
        'editItem'
    ],
    methods: {
        editItem()
        {
            if (!this.value){
                this.valid = false;
            } else {
                this.$emit('editItem', {'id': this.item.id, 'newValue': this.value});
                this.value = null;
                this.valid = true;
                this.editModal.toggle();
            }
        }
    },
    watch: {
        item(newVal, oldVal) {
            this.value = newVal.title;
        }
    },
}
</script>

<style scoped lang="scss">
</style>
