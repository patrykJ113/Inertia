<template>
    <div class="todos">
        <h2 class="todo__title">To-Do List</h2>
        <TodoForm />
        <TodoList :toDosArr="toDosArr" />
    </div>
</template>

<script>
import "../../css/Components/todos.css";
import TodoForm from "./todo-form.vue";
import TodoList from "./todo-list.vue";

export default {
    name: "Todos",
    data() {
        return {
            baseUrl: "/todo",
        };
    },
    props: {
        toDosArr: Array,
    },
    components: {
        TodoForm,
        TodoList,
    },
};
</script>
