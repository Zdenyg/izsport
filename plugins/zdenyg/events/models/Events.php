<?php namespace Zdenyg\Events\Models;

use Model;


/**
 * Model
 */
class Events extends Model
{
    use \Winter\Storm\Database\Traits\Validation;
    
    use \Winter\Storm\Database\Traits\SoftDelete;

    use \Winter\Storm\Database\Traits\Sortable;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'zdenyg_events_';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
    
    /**
     * @var array Attribute names to encode and decode using JSON.
     */
    public $jsonable = [];

   //  relations
   
   public $belongsToMany = [
      'categories' => [
         'Zdenyg\Events\Models\Category',
         'table' => 'zdenyg_events_events_categories',
         'order' => 'category_title',

      ]
   ];

   public $attachOne = [
      'image' => 'System\Models\File'
   ];

   public $attachMany = [
      'gallery' => 'System\Models\File'
   ];
   

}
