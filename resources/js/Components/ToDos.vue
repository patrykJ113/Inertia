<template>
    <div>
        <form action="">
            <fieldset>
                <legend>Add to do</legend>

                <label>
                    Title
                    <input v-model="toDo.title" type="text" />
                </label>
                <label>
                    Description
                    <input v-model="toDo.description" type="text" />
                </label>
                <button @click="addToDo">Add</button>
            </fieldset>
        </form>
        <ul v-if="toDosArr.length !== 0">
            <TodoItem v-for="toDo in toDosArr" :key="toDo.id" :data="toDo" />
        </ul>
    </div>
</template>

<script>
import TodoItem from "./todo-item.vue";

export default {
    name: "Todos",
    data() {
        return {
            toDo: {},
            baseUrl: "/todo",
        };
    },
    methods: {
        addToDo() {
            router.post(this.baseUrl, { ...this.data });
        }
    },
    props: {
        toDosArr: Array,
    },
    components: {
        TodoItem
    }
};
</script>

