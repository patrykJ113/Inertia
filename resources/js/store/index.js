import { createStore } from 'vuex'

const store = createStore({
    state: {
        toDos: [],
    },
    getters: {
        getToDos(state) {
            return state.toDos
        }
    },
    mutations: {
        setToDos(state, payload) {
            return state.toDos = payload
        }
    }
})

export default store