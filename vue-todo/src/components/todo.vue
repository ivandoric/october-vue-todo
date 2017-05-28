<template>
    <div class="todo">
        <h2>{{ todo.title }}</h2>
        <h3>{{ todo.description }}</h3>

    </div>

</template>

<script>
    export default {
        name: 'todo',
        props: ['todo']
    }


</script>

<style></style>