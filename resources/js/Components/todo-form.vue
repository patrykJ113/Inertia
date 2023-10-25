<template>
    <form @submit.prevent="addToDo">
        <label>
            Title
            <input v-model="toDo.title" type="text" required />
        </label>
        <label>
            Description
            <input v-model="toDo.description" type="text" required />
        </label>
        <button>Add</button>
    </form>
</template>

<script>
import { router } from '@inertiajs/vue2'

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
            // console.log({ ...this.toDo });
            router.post(this.baseUrl, {...this.toDo});
        },
    },
    props: {
        data: Object
    }
};
</script>
