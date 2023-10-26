<template>
    <li class="todo-item">
        <div class="todo-item__inputs">
            <input
                class="todo-item__title"
                v-model="data.title"
                :readonly="isReadOnly"
                @input="wasChanged"
            />
            <textarea
                class="todo-item__description"
                v-model="data.description"
                :readonly="isReadOnly"
                @input="wasChanged"
            >
            </textarea>
        </div>
        <button class="todo-item__flag" @click="addFlag">Add flag</button>
        <button
            class="todo-item__edit"
            @click="
                editToDo();
                togleReadOnly();
            "
        >
            {{ editBtnLabel }}
        </button>
        <button class="todo-item__complete" @click="completeToDo">
            <Check />
            Complete
        </button>
        <button class="todo-item__delete" @click="deleteToDo">Delete</button>
    </li>
</template>

<script setup>
import { router } from "@inertiajs/vue3";
import "../../css/Components/todo-item.css";
import Check from "../../svg/check.svg";
import FlagRegular from "../../svg/flag-regular.svg";
import FlagSolid from "../../svg/flag-solid.svg";
import PenToSquare from "../../svg/pen-to-square.svg";
import X from "../../svg/x.svg";
import { ref, computed } from "vue";

const props = defineProps(['data']);

const baseUrl = ref("/todo");
const isReadOnly = ref(true);
const inputChange = ref(false);

const editBtnLabel = computed(() => (isReadOnly.value ? "Edit" : "Save"));

function deleteToDo() {
    router.delete(`${baseUrl.value}/${props.data.id}`);
}

function editToDo() {
    if (inputChange.value) {
        router.put(`${baseUrl.value}/${props.data.id}`, { ...props.data });
    }
}
function togleReadOnly() {
    isReadOnly.value = !isReadOnly.value;
}
function wasChanged() {
    inputChange.value = true;
}
function addFlag() {
    props.data.flag = true;
    router.put(`${baseUrl.value}/${props.data.id}`, { ...props.data });
}
function completeToDo() {
    props.data.completed = true;
    router.put(`${baseUrl.value}/${props.data.id}`, { ...props.data });
}
</script>
