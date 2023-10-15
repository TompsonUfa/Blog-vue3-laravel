<template>
    <div class="content__box">
        <h1 class="content__title">Обо мне</h1>
        <Editor v-model="this.content" class="mb-4"></Editor>
        <button @click.prevent=this.postData class="btn btn-primary">Сохранить</button>
    </div>
</template>

<script>
import Editor from "@/admin/components/Editor.vue";
import { mapGetters, mapActions } from "vuex";

export default {
    name: "About",
    components:{
        Editor,
    },
    data(){
      return {
        content: '',
      }
    },
    computed: {
        ...mapGetters(["about"]),
    },
    watch: {
        about(){
           this.content = this.about;
        }
    },
    methods: {
        ...mapActions(["getAbout", "updateAbout"]),
        postData(){
            this.updateAbout(this.content);
        }
    },
    mounted() {
       this.getAbout();
       this.content = this.about;
    },

}
</script>

<style lang="scss">

</style>
