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
                    <input v-model="value" :class='!valid?"is-invalid":null' type="text" id="exampleFormControlInput" class="form-control">
                </div>
                <div class="modal-footer">
                    <button @click="addItem" class="btn btn-primary">Добавить</button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "ModalAdd",
    data(){
        return {
            value: null,
            valid: true,
        }
    },
    props: {
      addModal : Object,
    },
    methods: {
        addItem()
        {
            if (!this.value){
                this.valid = false;
            } else {

                this.value = null;
                this.valid = true;
                this.addModal.toggle();
            }
        }
    }
}
</script>

<style scoped lang="scss">
</style>
