<template>
    <div class="todo-tabs__btns">
        <button
            class="todo-tabs__btn"
            :class="allBtnClicked ? 'todo-tabs__btn--avtive' : ''"
            @click="handelClick('all')"
        >
            All
        </button>
        <button
            class="todo-tabs__btn"
            :class="!allBtnClicked ? 'todo-tabs__btn--avtive' : ''"
            @click="handelClick()"
        >
            Flagged
        </button>
    </div>
    <keep-alive>
        <Transition name="fade" tag="div" mode="out-in" appear>
            <component :is="comp" />
        </Transition>
    </keep-alive>
</template>

<script>
import TodoList from "./todo-list.vue";
import TodoFlagged from "./todo-flagged.vue";
import "../../css/Components/todo-tabs.css";
export default {
    name: "TodoTabs",
    data() {
        return {
            baseUrl: "/todo",
            comp: "TodoList",
            allBtnClicked: true,
        };
    },
    methods: {
        handelClick(type = "") {
            if (type === "all") {
                this.allBtnClicked = true;
                this.comp = "TodoList";
            } else {
                this.allBtnClicked = false;
                this.comp = "TodoFlagged";
            }
        },
    },
    components: {
        TodoList,
        TodoFlagged,
    },
};
</script>
