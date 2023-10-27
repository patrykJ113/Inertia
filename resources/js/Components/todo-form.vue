<template>
    <form @submit.prevent="addToDo" class="todo-form">
        <label class="todo-form__lable">
            Title
            <input v-model="toDo.title" type="text" required class="todo-form__title"/>
        </label>
        <label class="todo-form__lable">
            Description
            <textarea v-model="toDo.description" type="text" required class="todo-form__description"></textarea>
        </label>
        <button class="todo-form__btn">Add</button>
    </form>
</template>

<script>
import '../../css/Components/todo-form.css'
import { router } from '@inertiajs/vue3'

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
