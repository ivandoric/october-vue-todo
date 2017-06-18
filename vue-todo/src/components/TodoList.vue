<template>
    <div>
        <div class="row">
            <div class="columns large-6">
                <h2>Uncompleted ({{ uncompletedTodos.length }})</h2>
                <todo v-for="todo in uncompletedTodos" :todo="todo" :key="todo.id" @delete-todo="deleteTodo(todo)" @toggle-todo="toggleTodo(todo)"></todo>
            </div>

            <div class="columns large-6">
                <h2>Completed ({{ completedTodos.length }})</h2>
                <todo v-for="todo in completedTodos" :todo="todo" :key="todo.id" @delete-todo="deleteTodo(todo)" @toggle-todo="toggleTodo(todo)"></todo>
            </div>
        </div>
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
        },

        computed: {
            completedTodos: function () {
                return this.todos.filter(function(todo){
                    return todo.status == 1;
                })
            },
            uncompletedTodos: function () {
                return this.todos.filter(function(todo){
                    return todo.status == 0;
                })
            }
        },

        methods: {
            deleteTodo: function(todo) {

                var todoIndex = this.todos.indexOf(todo);

                console.log(todo.id, todoIndex);

                this.todos.splice(todoIndex, 1);

                axios.post('http://todo.dev/api/delete-todo', todo);
            },
            toggleTodo: function(todo) {
                if(todo.status == 1) {
                    todo.status = 0;
                } else {
                    todo.status = 1;
                }

                axios.post('http://todo.dev/api/toggle-todo', todo);
            }
        }
    }
</script>

<style type="text/css">
    
</style>