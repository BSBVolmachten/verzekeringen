<?php namespace Bsbvolmachten\Verzekeringen;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            'Bsbvolmachten\Verzekeringen\Components\Verzekeringen' => 'verzekeringen',
            'Bsbvolmachten\Verzekeringen\Components\Verzekering' => 'verzekering',
        ];
    }

    public function registerSettings()
    {
    }
}
