<template>
    <form>
        <label>
            Title
            <input v-model="toDo.title" type="text" />
        </label>
        <label>
            Description
            <input v-model="toDo.description" type="text" />
        </label>
        <button @click="addToDo">Add</button>
    </form>
</template>

<script>
export default {
    name: "TodoForm",
    data() {
        return {
            toDo: {},
            baseUrl: "/todo",
        };
    },
    methods: {
        addToDo() {
            router.post(this.baseUrl, { ...this.data });
        },
    },
};
</script>
