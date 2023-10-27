<template>
    <div class="todos">
        <h2 class="todo__title">To-Do List</h2>
        <TodoForm />
        <TodoTabs />
    </div>
</template>

<script>
import "../../css/Components/todos.css";
import TodoForm from "./todo-form.vue";
import TodoTabs from "./todo-tabs.vue";

export default {
    name: "Todos",
    data() {
        return {
            baseUrl: "/todo",
        };
    },
    components: {
        TodoForm,
        TodoTabs,
    },
};
</script>
