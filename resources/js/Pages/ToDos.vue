<template>
    <div>
        <ul v-if="toDos.length !== 0">
            <li v-for="toDo in toDos" :key="toDo.id">
                <h2>{{ toDo.title }}</h2>
                <p>{{ toDo.text }}</p>
                <button>Add flag</button>
                <button>Delete</button>
            </li>
        </ul>
        <form action="">
            <fieldset>
                <legend>Add to do</legend>

                <label>
                    Title 
                    <input type="text">
                </label>
                <label>
                    Text 
                    <input type="text">
                </label>
                <button>Add</button>
            </fieldset>
        </form>
    </div>
</template>

<script>
    export default {
      props: {
        toDos: Array
      }  
    }
</script>

<style>

</style>