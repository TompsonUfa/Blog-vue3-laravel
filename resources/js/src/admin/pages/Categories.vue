<template>
    <div class="content__box">
        <div class="row">
            <div class="col-12">
                <h1 class="content__title">Категории</h1>
            </div>
            <div class="col-12">
                <button class="btn btn-success mb-3">Создать</button>
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
                                    <div class="btn btn-primary">Редактировать</div>
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
    <ModalRemove @close-modal="closeModal" @delete-item="deleteItem" :item=selectedItem :src="'categories'"></ModalRemove>
</template>

<script>
import ModalRemove from "@/admin/components/ModalRemove.vue";
import {mapActions, mapGetters} from "vuex";
import { Modal } from 'bootstrap'

export default {
    name: "Categories",
    components:{
        ModalRemove,
    },
    computed:{
      ...mapGetters(['categories']),
    },
    data(){
        return{
            selectedItem: null,
        }
    },
    methods: {
        ...mapActions(['getCategories', 'deleteCategory']),
        showDeleteModal(item){
           this.selectedItem = item;
           const myModal = new Modal(document.getElementById('modal-remove'))
           myModal.show()
        },
        deleteItem(){
            this.deleteCategory(this.selectedItem);
        },
    },
    mounted() {
        this.getCategories();
    }
}
</script>

<style scoped lang="scss">

</style>
