<template>
    <Transition name="fade" tag="div" mode="out-in" appear>
        <TransitionGroup
            name="list"
            tag="ul"
            v-if="compToDos.length !== 0"
            class="todo-list"
        >
            <TodoItem v-for="toDo in compToDos" :key="toDo.id" :data="toDo" />
        </TransitionGroup>
        <div v-else>
            <h2>{{ noToDosText }}</h2>
        </div>
    </Transition>
</template>

<script>
import "../../css/Components/todo-list.css";
import TodoItem from "./todo-item.vue";
import useList from "../composables/useList";

export default {
    name: "TodoList",
    inject: ["toDos"],
    data() {
        return {
            flagged: false,
        };
    },
    components: {
        TodoItem
    },
    computed: {
        compToDos() {
            return this.flagged
                ? this.toDos.filter((toDo) => toDo.flag)
                : this.toDos;
        },
        noToDosText() {
            return this.flagged ? `No Flagged To-Do's Yet` : `No To-Do's Yet`;
        },
    },
};
</script>
