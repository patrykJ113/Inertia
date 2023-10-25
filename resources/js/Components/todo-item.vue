<template>
    <li>
        <input v-model="data.title" :readonly="isReadOnly" @input="wasChanged"/>
        <input v-model="data.description" :readonly="isReadOnly" @input="wasChanged"/>
        <button @click="addFlag" >Add flag</button>
        <button @click="editToDo(); togleReadOnly()"
        >
            {{ editBtnLabel }}
        </button>
        <button @click="completeToDo">Complete</button>
        <button @click="deleteToDo">Delete</button>
    </li>
</template>

<script>
import { router } from '@inertiajs/vue2'

export default {
    name: "TodoItem",
    data() {
        return {
            baseUrl: "/todo",
            isReadOnly: true,
            inputChange: false 
        }
    },
    methods: {
        deleteToDo() {
            router.delete(`${this.baseUrl}/${this.data.id}`)
        },
        editToDo() {
            if(this.inputChange) {
                router.put(`${this.baseUrl}/${this.data.id}`, { ...this.data})
            } 
        },
        togleReadOnly() {
            this.isReadOnly = !this.isReadOnly
        },
        wasChanged() {
            this.inputChange = true
        },
        addFlag() {
            this.data.flag = true
            router.put(`${this.baseUrl}/${this.data.id}`, { ...this.data})
        },
        completeToDo() {
            this.data.completed = true
            router.put(`${this.baseUrl}/${this.data.id}`, { ...this.data})
        }
    },
    computed: {
        editBtnLabel() {
            return this.isReadOnly ? 'Edit' : 'Save'
        }
    },
    props: {
        data: Object
    }
};
</script>

