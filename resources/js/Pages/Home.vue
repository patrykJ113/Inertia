<template>
    <div>
        <h1>To do app</h1>
        <Todos />
    </div>
</template>

<script>
import Todos from "../Components/todos.vue";
import { computed } from "vue";

export default {
    components: {
        Todos,
    },
    props: {
        toDoArray: Array,
    },
    provide() {
        return {
            toDos: computed(() => this.toDoArray),
        };
    },
};
</script>
