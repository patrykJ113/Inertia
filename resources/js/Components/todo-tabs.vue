<template>
    <button @click="comp = 'TodoList'">All</button>
    <button @click="comp = 'TodoFlagged'">Flagged</button>
<<<<<<< HEAD
    <keep-alive>
        <Transition name="fade" tag="div" mode="out-in" appear>
            <component :is="comp" />
        </Transition>
    </keep-alive>
=======
    <Transition name="fade" tag="div" mode="out-in" appear>
        <component :is="comp" />
    </Transition>
>>>>>>> main
</template>

<script>
import TodoList from "./todo-list.vue";
import TodoFlagged from "./todo-flagged.vue";
import "../../css/Components/todo-tabs.css";
<<<<<<< HEAD

=======
>>>>>>> main
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
