<template>
    <form @submit.prevent="addToDo" class="todo-form">
        <label class="todo-form__lable">
            Title
            <input
                v-model="toDo.title"
                type="text"
                required
                class="todo-form__title"
            />
            <p class="todo-form__error">
                {{ $page.props.errors.title }}
            </p>
        </label>
        <label class="todo-form__lable">
            Description
            <textarea
                v-model="toDo.description"
                type="text"
                class="todo-form__description"
                ref="txt_ar"
                @input="updateHeight()"
                @keyup.delete="updateHeight('del')"
            ></textarea>
            <p class="todo-form__error">
                {{ $page.props.errors.description }}
            </p>
        </label>
        <button class="todo-form__btn">Add</button>
    </form>
</template>

<script>
import "../../css/Components/todo-form.css";
import { router } from "@inertiajs/vue3";

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
            router.visit(this.baseUrl, {
                method: "post",
                data: { ...this.toDo },
                preserveScroll: true,
                preserveState: true,
                onSuccess: (page) => {
                    this.toDo.title = "";
                    this.toDo.description = "";
                },
            });
        },
        updateHeight(key = "") {
            if (key === "del") {
                if ( parseInt(this.$refs.txt_ar.style.height.replace("px", "")) > 30) {
                    this.$refs.txt_ar.style.height = `${this.$refs.txt_ar.scrollHeight - 30}px`;
                }
                return;
            }
            this.$refs.txt_ar.style.height = `${this.$refs.txt_ar.scrollHeight - 20}px`;
        },
    },
    props: {
        data: Object,
    },
};
</script>
