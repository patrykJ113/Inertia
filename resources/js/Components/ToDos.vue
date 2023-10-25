<template>
    <div>
        <ul v-if="toDosArr.length !== 0">
            <li v-for="toDo in toDosArr" :key="toDo.id">
                <h2>{{ toDo.title }}</h2>
                <p>{{ toDo.description }}</p>
                <button>Add flag</button>
                <button>Delete</button>
            </li>
        </ul>
        <form action="">
            <fieldset>
                <legend>Add to do</legend>

                <label>
                    Title
                    <input v-model="toDo.title" type="text" />
                </label>
                <label>
                    Description
                    <input v-model="toDo.description" type="text" />
                </label>
                <Link href='/todo' method='post' :data='{ ...toDo }' as='button' >Add</Link>
            </fieldset>
        </form>
    </div>
</template>

<script>
import { Link } from "@inertiajs/vue2";

export default {
    name: 'ToDos',
    data() {
        return {
            toDo: {}
        }
    },
    props: {
        toDosArr: Array
    },
    components: {
        Link,
    }
};
</script>