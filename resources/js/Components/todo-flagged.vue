<script>
    import TodoList from './todo-list.vue'
    export default {
        name: 'TodoFlagged',
        extends: TodoList,
        data() {
            return {
                flagged: true
            }
        }
    }
</script>