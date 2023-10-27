<template>
    <button @click="comp = 'TodoList'">All</button>
    <button @click="comp = 'TodoFlagged'">Flagged</button>
    <keep-alive>
        <component :is="comp" />
    </keep-alive>
</template>

<script>
import TodoList from "./todo-list.vue";
import TodoFlagged from "./todo-flagged.vue";
export default {
    name: 'TodoTabs',
    data() {
        return {
            baseUrl: "/todo",
            comp: "TodoList",
        };
    },
    components: {
        TodoList,
        TodoFlagged,
    },
};
</script>
