<template>
    <li>
        <input v-model="data.title" :readonly="isReadOnly" @input="wasChanged"/>
        <input v-model="data.description" :readonly="isReadOnly" @input="wasChanged"/>
        <pre>{{ data.title }} | {{ data.description }}</pre>
        <button>Add flag</button>
        <button @click="editToDo(data); togleReadOnly()"
        >
            {{ editBtnLabel }}
        </button>
        <button @click="deleteToDo(data.id)">Delete</button>
    </li>
</template>

<script>
import { useForm, router } from '@inertiajs/vue2'

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
        deleteToDo(id) {
            router.delete(`${this.baseUrl}/${id}`)
        },
        editToDo(data) {
            if(this.inputChange) {
                router.put(`${this.baseUrl}/${data.id}`, { ...data})
            } 
        },
        togleReadOnly() {
            this.isReadOnly = !this.isReadOnly
        },
        wasChanged() {
            this.inputChange = true
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

