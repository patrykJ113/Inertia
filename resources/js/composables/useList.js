import { ref, computed } from "vue";
import { useStore } from "vuex";

export default function useList() {
    let flagged = ref(false);
        const toDos = ref([]);
        const flaggedToDos = ref([]);
        const store = useStore();

        toDos.value = store.getters.getToDos;
        flaggedToDos.value = toDos.value.filter((todo) => todo.flag);

        const noToDosText = computed(() => {
            return flagged.value ? `No Flagged To-Do's Yet` : `No To-Do's Yet`;
        });
        const hasToDos = computed(() => {
            if (!flagged.value) {
                return toDos.value.length;
            }
            return flaggedToDos.value.length;
        });

        return {
            flagged,
            toDos,
            noToDosText,
            hasToDos
        };
}