<?php namespace Ceeks\Products\Models;

use Model;

/**
 * Model
 */
class Product extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Validation
     */
    public $rules = [
    ];

    /*
     * Relations
     */
    public $attachOne = [
        'image' => 'System\Models\File'
    ];
    
    /**
     * @var string The database table used by the model.
     */
    public $table = 'ceeks_products_';
}