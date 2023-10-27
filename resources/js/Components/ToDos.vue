<template>
    <div class="todos">
        <h2 class="todo__title">To-Do List</h2>
        <TodoForm />
        <button @click="comp = 'TodoList'">All</button>
        <button @click="comp = 'TodoFlagged'">Flagged</button>
        <keep-alive>
            <component :is="comp" />
        </keep-alive>
    </div>
</template>

<script>
import "../../css/Components/todos.css";
import TodoForm from "./todo-form.vue";
import TodoList from "./todo-list.vue";
import TodoFlagged from "./todo-flagged.vue";

export default {
    name: "Todos",
    data() {
        return {
            baseUrl: "/todo",
            comp: 'TodoList'
        };
    },
    components: {
        TodoForm,
        TodoList,
        TodoFlagged
    },
};
</script>
