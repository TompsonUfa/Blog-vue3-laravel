<template>
    <div class="content__box">
        <div class="row">
            <div class="col-12">
                <h1 class="content__title">Категории</h1>
            </div>
            <div class="col-12">
                <button class="btn btn-success mb-3" @click="showAddModal">Создать</button>
            </div>
            <div class="col-12">
                <div class="table-responsive">
                    <table class="table table-responsive table-borderless">
                    <thead>
                        <tr>
                            <th scope="col" width="5%">#</th>
                            <th scope="col" width="65%">Название</th>
                            <th scope="col" width="30%" class="text-center">Действие</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="(category, index) in categories" :key="category.id">
                            <td>
                                {{index + 1}}
                            </td>
                            <td>
                                {{category.title}}
                            </td>
                            <td>
                                <div class="d-flex gap-3 justify-content-center">
                                    <div class="btn btn-primary" @click="showEditModal(category)">Редактировать</div>
                                    <div class="btn btn-danger" @click="showDeleteModal(category)">Удалить</div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
    <ModalRemove @delete-item="deleteItem" :removeModal="removeModal" :item=selectedItem></ModalRemove>
    <ModalAdd @add-item="addItem" :addModal="addModal"></ModalAdd>
    <ModalEdit @edit-item="editItem" :editModal="editModal" :item=selectedItem></ModalEdit>
</template>

<script>
import ModalRemove from "@/admin/components/ModalRemove.vue";
import ModalAdd from "@/admin/components/ModalAdd.vue";
import ModalEdit from "@/admin/components/ModalEdit.vue";
import {mapActions, mapGetters} from "vuex";
import { Modal } from 'bootstrap'

export default {
    name: "Categories",
    components:{
        ModalAdd,
        ModalRemove,
        ModalEdit
    },
    computed:{
      ...mapGetters(['categories']),
    },
    data(){
        return{
            selectedItem: null,
            addModal: null,
            editModal: null,
            removeModal: null,
        }
    },
    methods: {
        ...mapActions(['deleteCategory', 'addCategory', 'editCategory']),
        showDeleteModal(item){
           this.selectedItem = item;
           this.removeModal.toggle();
        },
        showAddModal(){
            this.addModal.toggle()
        },
        showEditModal(item){
            this.selectedItem = item;
            this.editModal.toggle();
        },
        deleteItem(){
            this.deleteCategory(this.selectedItem);
            this.selectedItem = null;
        },
        addItem(item){
            this.addCategory(item);
        },
        editItem(item){
            this.editCategory(item);
        }
    },
    mounted() {
        this.removeModal = new Modal(document.getElementById('modal-remove'))
        this.addModal = new Modal(document.getElementById('modal-add'));
        this.editModal = new Modal(document.getElementById('modal-edit'));
    }
}
</script>

<style scoped lang="scss">

</style>
