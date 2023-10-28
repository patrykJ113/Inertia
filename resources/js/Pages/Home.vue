<template>
    <div>
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
