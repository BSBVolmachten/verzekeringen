<?php
namespace Bsbvolmachten\Verzekeringen\components;

use Cms\Classes\ComponentBase;
use Bsbvolmachten\Verzekeringen\Models\Categorieen;
use Bsbvolmachten\Verzekeringen\Models\Particulier;
use Bsbvolmachten\Verzekeringen\Models\Zakelijk;

class Verzekeringen extends ComponentBase {

    public function defineProperties()
    {
        return [
            'homeSwitch' => [
                'title'             => 'Homepage items',
                'description'       => 'Alleen items waar de Homepagina switch aanstaat weergeven',
                'default'           => false,
                'type'              => 'checkbox',
            ]
        ];
    }

    public function componentDetails()
    {
        return [
            'name' => 'Verzekeringen',
            'description' => 'Laat alle verzekeringen zien.'
        ];
    }

    public function onRun() {
        $categories = $this->getCategorieen();
        $zakelijk = $this->getZakelijk();
        $particulier = $this->getParticulier();

        ($categories->isEmpty()) ? $this->page['categories'] = false : $this->page['categories'] = $categories;
        ($zakelijk->isEmpty()) ? $this->page['zakelijk'] = false : $this->page['zakelijk'] = $zakelijk;
        ($particulier->isEmpty()) ? $this->page['particulier'] = false : $this->page['particulier'] = $particulier;
    }

    public function getCategorieen()
    {
        return Categorieen::orderBy('sort_order', 'ASC')->get();
    }

    public function getParticulier()
    {
        if ($this->property('homeSwitch')) {
            $particulier = Particulier::orderBy('sort_order', 'ASC')->where('homeswitch', true)->get();
        } else {
            $particulier = Particulier::orderBy('sort_order', 'ASC')->get();
        }

        return $particulier;
    }

    public function getZakelijk()
    {
        if ($this->property('homeSwitch')) {
            $zakelijk = Zakelijk::orderBy('sort_order', 'ASC')->where('homeswitch', true)->get();
        } else {
            $zakelijk = Zakelijk::orderBy('sort_order', 'ASC')->get();
        }

        return $zakelijk;
    }
}