<?php namespace Clem\ExtendCore;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{


    public function pluginDetails()
    {
        return [
            'name'        => 'Clem\'s Core Extension',
            'description' => 'Extends core functionality to add less assets to components.',
            'author'      => 'Clem Davies',
            'icon'        => 'icon-wrench'
        ];
    }

}