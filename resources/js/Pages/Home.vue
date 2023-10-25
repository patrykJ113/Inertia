<template>
    <div>   
        <h1>To do app</h1>
        <Todos :toDosArr="toDoArray"/>
    </div>
</template>

<script>
    import Todos from '../Components/ToDos.vue';
    export default {
        components: {
            Todos
        },
        props: {
            toDoArray: Array
        }
    }
</script>