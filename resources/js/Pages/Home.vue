<template>
    <div>
        <h1>To do app</h1>
        <Todos />
    </div>
</template>

<script>
import Todos from "../Components/todos.vue";

export default {
    components: {
        Todos,
    },
    props: {
        toDoArray: Array,
    },
    created() {
        this.$store.commit("setToDos", this.toDoArray);
    }
};
</script>
