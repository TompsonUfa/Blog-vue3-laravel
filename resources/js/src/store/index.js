import { createStore } from "vuex"
import about from "@/store/modules/about.js";
import category from "@/store/modules/category.js";

const store = createStore({
    modules: {
        about,
        category
    }
})

export default store;
