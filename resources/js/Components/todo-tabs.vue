<template>
    <button @click="comp = 'TodoList'">All</button>
    <button @click="comp = 'TodoFlagged'">Flagged</button>
    <Transition name="fade" tag="div" mode="out-in" appear>
        <component :is="comp" />
    </Transition>
</template>

<script>
import TodoList from "./todo-list.vue";
import TodoFlagged from "./todo-flagged.vue";
import '../../css/Components/todo-tabs.css'
export default {
    name: "TodoTabs",
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
