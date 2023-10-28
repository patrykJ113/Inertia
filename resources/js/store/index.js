import { createStore } from 'vuex'

const store = createStore({
    state: {
        errors: {}
    },
    getters: {
        getErrors(state) {
            return state.errors
        }
    },
    mutations: {
        setErrors(state, { title, description}) {
            state.errors = { title, description }
        }
    }
})

export default store