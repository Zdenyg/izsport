<?php namespace Zdenyg\Events\Components;

use Cms\Classes\ComponentBase;
use Zdenyg\Events\Models\Events;

class Eventlist extends ComponentBase

{

   public function ComponentDetails() {
      return [
         'name' => 'Event list',
         'description' => 'List of events'
      ];
   }

   public function defineProperties(){
      return [
         'results' => [
            'title' => 'Number of events',
            'description' => 'How many events want to display',
            'default' => 1,
            'validationPattern' => '^[0-9]+$',
            'validationMessage' => 'Only numbers'
         ],

         'sortOrder' => [
            'title' => 'Sort Events',
            'description' => 'Sort those Events',
            'type' => 'dropdown',
            'default' => 'latest'
         ]

         ];
   }

   public function getSortOrderOptions() {

      return [
         'latest' => 'Date (latest)',
         'oldest' => 'Date (oldest)',
      ];

   }

   public function onRun() {
      $this->eventlist = $this->loadEventlist();
   }


   protected function loadEventlist(){

      $query = Events::all();

      if($this->property('sortOrder') == 'latest'){

         $query = $query->SortByDesc('created_at');

      }


      if($this->property('results') > 0) {
            
         $query = $query->take($this->property('results'));

      }
      return $query;

   }
   
   public $eventlist;

}

