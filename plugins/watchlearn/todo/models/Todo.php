<?php namespace Watchlearn\Todo\Models;

use Model;

/**
 * Model
 */
class Todo extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Validation
     */
    public $rules = [
    ];

    public $fillable = ['title', 'description', 'status'];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'watchlearn_todo_';
}