<?php namespace Ceeks\Carrers\Models;

use Model;
use Ceeks\Carrers\Models\Category;

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


    public $belongsTo = [
        'category' => ['Ceeks\Carrers\Models\Category']
    ];

    public function getCategoryIdOptions()
    {
        $model = Category::lists('title', 'id');
        return $model;

    }
}