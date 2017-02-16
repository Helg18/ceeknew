<?php namespace Ceeks\Careers\Models;

use Model;

/**
 * Model
 */
class Careers extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Validation
     */
    public $rules = [
    ];

    /*Relations*/
    public $hasOne = [
        'category_id' => [
            'Ceeks\Careers\Models\Category',
            'table' => 'ceeks_careers_category',
            'order' => 'id'

        ]
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'ceeks_careers_';
}