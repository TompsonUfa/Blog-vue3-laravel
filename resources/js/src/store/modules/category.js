import axios from "axios";
export default {
    actions: {
        getCategories(ctx){
            axios
                .get('/data/categories')
                .then(res =>{
                    const categories = res.data.categories;
                    ctx.commit('updateCategories', categories)
                })
                .catch(err => {
                    console.log('error: ' + err)
                })
        },
        deleteCategory(ctx, item) {
            axios
                .delete('/categories/' + item.id)
                .then(res =>{
                    ctx.dispatch('getCategories');
                })
                .catch(err => {
                    console.log('error: ' + err)
                })

        },
        addCategory(ctx, item){
            axios
                .post('/categories', {'item': item})
                .then(res => {
                    ctx.dispatch('getCategories');
                })
                .catch(err => {
                    console.log('error: ' + err)
                })
        }
    },
    mutations: {
        updateCategories(state, data){
            state.categories = data;
        }
    },
    state: {
        categories: [],
    },
    getters: {
        categories(state){
            return state.categories;
        }
    },
}
