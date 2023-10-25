<template>
    <form @submit.prevent="addToDo" class="todo-form">
        <label>
            Title
            <input v-model="toDo.title" type="text" required class="todo-form__title"/>
        </label>
        <label>
            Description
            <input v-model="toDo.description" type="text" required class="todo-form__description"/>
        </label>
        <button>Add</button>
    </form>
</template>

<script>
import '../../css/Components/todo-form.css'
import { router } from '@inertiajs/vue2'

export default {
    name: "TodoForm",
    data() {
        return {
            toDo: {},
            baseUrl: "/todo",
        };
    },
    methods: {
        addToDo() {
            router.post(this.baseUrl, {...this.toDo});
        },
    },
    props: {
        data: Object
    }
};
</script>
