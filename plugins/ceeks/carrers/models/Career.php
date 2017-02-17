<?php namespace Ceeks\Carrers\Models;

use Model;

/**
 * Model
 */
class Career extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Validation
     */
    public $rules = [
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'ceeks_carrers_';
}