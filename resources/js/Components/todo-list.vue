<template>
    <TransitionGroup name="list" tag="ul" v-if="hasToDos" class="todo-list">
        <TodoItem
            v-for="toDo in toDos"
            :key="toDo.id"
            :data="toDo"
            :flagged="flagged"
        />
        
    </TransitionGroup>
    <div v-else>
        <h2>{{ noToDosText }}</h2>
    </div>
</template>

<script>
import "../../css/Components/todo-list.css";
import TodoItem from "./todo-item.vue";
import useList from "../composables/useList";

export default {
    name: "TodoList",
    components: {
        TodoItem
    },
    setup() {

        const { toDos, noToDosText, hasToDos} = useList()
        let { flagged } = useList()


       return {
            toDos,
            flagged,
            noToDosText,
            hasToDos
        };
    },
};
</script>
