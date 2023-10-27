<template>
    <TransitionGroup
        name="list"
        tag="ul"
        v-if="toDos.length !== 0"
        class="todo-list"
    >
        <TodoItem v-for="toDo in toDos" :key="toDo.id" :data="toDo" />
    </TransitionGroup>
</template>

<script>
import "../../css/Components/todo-list.css";
import TodoItem from "./todo-item.vue";

export default {
    name: "TodoList",
    inject: ['toDos'],
    components: {
        TodoItem,
    },
};
</script>
