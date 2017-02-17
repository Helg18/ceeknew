<?php namespace Ceeks\Products\Models;

use Model;
use System\Models\File;

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

    public function getImageAttribute(){
        if($this->id){
                $image=File::
                where('attachment_id',$this->id)
                ->where('field','image')
                ->where('attachment_type','Ceeks\Products\Models\Product')
                ->get();
                $img= $image->last()->getThumb(150,150,["mode"=>'auto']);
                echo ("<img src='$img'/>");
            }
    }
    
    /**
     * @var string The database table used by the model.
     */
    public $table = 'ceeks_products_';
}