<template>
    <div class="todo">
        <h3>{{ todo.title }}</h3>
        <p>{{ todo.description }}</p>

        <button class="button alert" v-on:click="deleteTodo(todo)">Delete</button>
    </div>
</template>

<script>
    export default {
        name: 'todo',
        props: ['todo'],

        methods: {
            deleteTodo: function(todo) {
                this.$emit('delete-todo', todo);
            }
        }
    }


</script>

<style></style>