<?php namespace Zdenyg\Events;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {

      return [
         'Zdenyg\Events\Components\Eventlist' => 'eventlist'
      ];

    }

    public function registerSettings()
    {
    }
}
