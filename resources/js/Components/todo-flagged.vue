<script>
import TodoList from "./todo-list.vue";
import useList from "../composables/useList";
import { ref } from "vue";

export default {
    name: "TodoFlagged",
    extends: TodoList,
    setup() {
        const { toDos, noToDosText, hasToDos } = useList();
        let flagged = ref(true);

        return {
            toDos,
            flagged,
            noToDosText,
            hasToDos,
        };
    },
};
</script>
