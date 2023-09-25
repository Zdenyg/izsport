<?php namespace Zdenyg\Events\Models;

use Model;

/**
 * Model
 */
class Category extends Model
{
    use \Winter\Storm\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'zdenyg_events_categories';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
    
    /**
     * @var array Attribute names to encode and decode using JSON.
     */
    public $jsonable = [];

    public $belongsToMany = [
      'events' => [
         'Zdenyg\Events\Models\Events',
         'table' => 'zdenyg_events_events_categories',
         'order' => 'name',

      ]
   ];

}

