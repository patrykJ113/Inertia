<template>
    <div>   
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