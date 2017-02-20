<?php namespace Ceeks\News\Models;

use Model;
use Ceeks\News\Models\Author;

/**
 * Model
 */
class News extends Model
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
    public $table = 'ceeks_news_';

    /*
    *Relations
    */
    public $belongsTo=[
        'Author' => ['Ceeks\News\Models\Author']
    ];

    public function getAuthorIdOptions()
    {
        $model = Author::lists('name', 'id');
        return $model;

    }
}