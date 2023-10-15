import { createStore } from "vuex"
import about from "@/store/modules/about.js";

const store = createStore({
    modules: {
        about
    }
})

export default store;
