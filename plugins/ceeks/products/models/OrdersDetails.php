<?php namespace Ceeks\Products\Models;

use Model;

/**
 * Model
 */
class OrdersDetails extends Model
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
    public $table = 'ceeks_products_orders_details';
}