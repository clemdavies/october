<?php namespace Clem\ExtendCore;

use Cms\Classes\ComponentBase as Core;
use System\Classes\CombineAssets;
use Request;

/**
 * Component base class
 * I have NO idea if this is the correct way to do it.
 */
abstract class ComponentBase extends Core
{
    /**
     * Adds StyleSheet asset to the asset list. Call $this->makeAssets() in a view
     * to output corresponding markup.
     * @param string $name Specifies a path (URL) to the script.
     * @param array $attributes Adds extra HTML attributes to the asset link.
     * @return void
     */
    public function addLess($name, $attributes = [])
    {

        $cssPath = $this->getAssetPath($name);
        $dirArray = explode('/',$cssPath);
        $filename = $dirArray[count($dirArray)-1];
        unset($dirArray[count($dirArray)-1]);
        $directory = implode('/', $dirArray );

        $cssPath = Request::getBaseUrl();
        $cssPath .= CombineAssets::combine(array($filename),$directory);// this line throws exception


        if (isset($this->controller))
            $this->controller->addCss($cssPath, $attributes);

        if (is_string($attributes))
            $attributes = ['build' => $attributes];

        $cssPath = $this->getAssetScheme($cssPath);

        if (!in_array($cssPath, $this->assets['css']))
            $this->assets['css'][] = ['path' => $cssPath, 'attributes' => $attributes];


    }

}