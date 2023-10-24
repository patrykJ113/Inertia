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
                    <input type="text" />
                </label>
                <label>
                    Text
                    <input type="text" />
                </label>
                <Link href="/">Add</Link>
            </fieldset>
        </form>
    </div>
</template>

<script>
import { Link } from "@inertiajs/vue2";

export default {
    props: {
        toDos: Array,
    },
    components: {
        Link,
    },
};
</script>

<style></style>
