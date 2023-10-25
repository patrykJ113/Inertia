<template>
    <div>   
        <h1>To do app</h1>
        <ToDos :toDosArr="toDoArray"/>
    </div>
</template>

<script>
    import ToDos from '../Components/ToDos.vue';
    export default {
        components: {
            ToDos
        },
        props: {
            toDoArray: Array
        }
    }
</script>