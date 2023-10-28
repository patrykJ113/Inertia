<template>
    <li class="todo-item">
        <div class="todo-item__inputs">
            <input
                class="todo-item__title"
                :class="data.completed ? 'todo-item__title--complete' : ''"
                v-model="data.title"
                :readonly="isReadOnly"
                @input="wasChanged"
            />
            <textarea
                class="todo-item__description"
                :class="
                    data.completed ? 'todo-item__description--complete' : ''
                "
                ref="txt_ar"
                v-model="data.description"
                :readonly="isReadOnly"
                @input="wasChanged(); updateHeight()"
                @keyup.delete ="updateHeight('del')"
            >
            </textarea>
        </div>
        <div class="todo-item-btns">
            <button class="todo-item__flag" @click="addFlag" title="add flag">
                <FlagSolid v-if="data.flag" />
                <FlagRegular v-else />
            </button>
            <button
                class="todo-item__edit"
                @click="
                    editToDo();
                    togleReadOnly();
                "
                title="edit to-do"
            >
                <PenToSquare />
            </button>
            <button class="todo-item__complete" @click="completeToDo" title="complete to-do">
                <Check />
            </button>
            <button class="todo-item__delete" @click="deleteToDo" title="delete to-do">
                <X />
            </button>
        </div>
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
import { ref, onMounted } from "vue";

const props = defineProps(["data"]);

const baseUrl = ref("/todo");
const isReadOnly = ref(true);
const inputChange = ref(false);
const txt_ar = ref(null);

onMounted(() => {
    updateHeight()
});

function deleteToDo() {
    router.visit(`${baseUrl.value}/${props.data.id}`, {
        method: "delete",
        preserveScroll: true,
        preserveState: true,
    });
}

function updateHeight(key ='') {
    if(key === 'del') {
        if(parseInt(txt_ar.value.style.height.replace('px', '')) > 30) {
            txt_ar.value.style.height = `${txt_ar.value.scrollHeight - 12}px`
        } 
        return 
    }
    txt_ar.value.style.height = `${txt_ar.value.scrollHeight -4}px`
}

function editToDo() {
    if (inputChange.value) {
        router.visit(`${baseUrl.value}/${props.data.id}`, {
            method: "put",
            data: { ...props.data },
            preserveScroll: true,
            preserveState: true,
        });
    }
}
function togleReadOnly() {
    isReadOnly.value = !isReadOnly.value;
}
function wasChanged() {
    inputChange.value = true;
}
function addFlag() {
    props.data.flag = !props.data.flag;
    router.visit(`${baseUrl.value}/${props.data.id}`, {
        method: "put",
        data: { ...props.data },
        preserveScroll: true,
        preserveState: true,
    });
}
function completeToDo() {
    props.data.completed = !props.data.completed;
    router.visit(`${baseUrl.value}/${props.data.id}`, {
        method: "put",
        data: { ...props.data },
        preserveScroll: true,
        preserveState: true,
    });
}
</script>
