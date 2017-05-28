<template>
    <div id="app">
        <TodoList v-bind:todos="todos"></TodoList>
    </div>
</template>

<script>
import axios from 'axios';
import TodoList from './components/TodoList'

export default {
    name: 'app',
    components: {
        TodoList
    },
    data: function(){
        return {
            todos: []
        }
    },

    mounted: function() {
        var _self = this;

        axios.get('http://todo.dev/api/todos').then(function (response){
            _self.todos = response.data;
        })
    }
}
</script>

<style>

</style>
