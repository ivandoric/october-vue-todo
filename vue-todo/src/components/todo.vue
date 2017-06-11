<template>
    <div class="todo">
        <h3>{{ todo.title }}</h3>
        <p>{{ todo.description }}</p>
    </div>
</template>

<script>
    export default {
        name: 'todo',
        props: ['todo']
    }


</script>

<style></style>