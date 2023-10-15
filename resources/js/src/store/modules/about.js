import axios from "axios";
export default {
    actions: {
        getAbout(ctx){
            axios
                .get('/data/about')
                .then(res =>{
                    const about = JSON.parse(res.data.about)
                    ctx.commit('updateAbout', about.body)
                })
                .catch(err => {
                    console.log('error: ' + err)
                })
        },
        updateAbout(ctx, data){
            axios
                .post('/about', {'data': data})
                .then(res => {
                    ctx.commit('updateAbout', data)
                })
                .catch(err => {
                    console.log('error: ' + err)
                })
        }
    },
    mutations: {
        updateAbout(state, data){
            state.about = data;
        }
    },
    state: {
        about: null,
    },
    getters: {
        about(state){
            return state.about;
        }
    },
}
