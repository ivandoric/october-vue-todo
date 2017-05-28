<template>
    <div>
        <todo v-for="todo in todos" :todo="todo" :key="todo.id"></todo>
    </div>
</template>

<script type="text/javascript">
    import axios from 'axios';
    import todo from './todo';

    export default {
        name: 'TodoList',
        props: ['todos'],
        components: {
            todo
        }
    }
</script>

<style type="text/css">
    
</style>