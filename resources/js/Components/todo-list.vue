<template>
    <ul v-if="toDosArr.length !== 0" class="todo-list">
        <TodoItem v-for="toDo in toDosArr" :key="toDo.id" :data="toDo" />
    </ul>
</template>

<script>
import TodoItem from "./todo-item.vue";

export default {
    name: "TodoList",
    props: {
        toDosArr: Array,
    },
    components: {
        TodoItem
    },
};
</script>
