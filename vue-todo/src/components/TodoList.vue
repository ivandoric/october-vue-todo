<template>
    <div>
        <h1>My New Component</h1>

        <ul>
            <li v-for="todo in todos">
                <h3>{{ todo.title }}</h3> 
                {{ todo.description }}
            </li>
        </ul>
    </div>
</template>

<script type="text/javascript">
    import axios from 'axios';

    export default {
        name: 'TodoList',
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

<style type="text/css">
    
</style>