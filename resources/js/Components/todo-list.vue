<template>
<<<<<<< HEAD
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
=======
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
>>>>>>> main
</template>

<script>
import "../../css/Components/todo-list.css";
import TodoItem from "./todo-item.vue";
import useList from "../composables/useList";

export default {
    name: "TodoList",
<<<<<<< HEAD
    inject: ["toDos"],
    data() {
        return {
            flagged: false,
        };
    },
=======
>>>>>>> main
    components: {
        TodoItem
    },
<<<<<<< HEAD
    computed: {
        compToDos() {
            return this.flagged
                ? this.toDos.filter((toDo) => toDo.flag)
                : this.toDos;
        },
        noToDosText() {
            return this.flagged ? `No Flagged To-Do's Yet` : `No To-Do's Yet`;
        },
=======
    setup() {

        const { toDos, noToDosText, hasToDos} = useList()
        let { flagged } = useList()


       return {
            toDos,
            flagged,
            noToDosText,
            hasToDos
        };
>>>>>>> main
    },
};
</script>
