<?php 

use Watchlearn\Todo\Models\Todo;

Route::get('api/populate', function(){
    $faker = Faker\Factory::create();

    for($i = 0; $i < 20; $i++){
        Todo::create([
            'title' => $faker->sentence($nbWords = 6, $variableNbWords = true),
            'description' => $faker->text($maxNbChars = 200),
            'status' => $faker->boolean($chanceOfGettingTrue = 50),
            'created_at' => $faker->date($format = 'Y-m-d H:i:s', $max = 'now')
        ]);
    }

    return "Todos Created!";
});


Route::get('api/todos', function() {
    $todos = Todo::all();

    return $todos;
});


