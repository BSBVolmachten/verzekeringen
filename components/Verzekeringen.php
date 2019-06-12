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

    public function categorieen()
    {
        $categorieen = Categorieen::orderBy('sort_order', 'ASC')->get();
        if ($categorieen->isEmpty()) {
            return false;
        } else {
            return $categorieen;
        }
    }
    public function particulier()
    {
        if ($this->property('homeSwitch')) {
            $particulier = Particulier::orderBy('sort_order', 'ASC')->where('homeswitch', true)->get();
        } elseif ($this->page->id == 'verzekering-particulier') {
            $slug = $this->param('slug');
            $particulier = Particulier::where('slug', '!=' , $slug)->where('fullswitch', true)->get();
        } else {
            $particulier = Particulier::orderBy('sort_order', 'ASC')->get();
        }

        if ($particulier->isEmpty()) {
            return false;
        } else {
            return $particulier;
        }
    }

    public function zakelijk()
    {
        if ($this->property('homeSwitch')) {
            $zakelijk = Zakelijk::orderBy('sort_order', 'ASC')->where('homeswitch', true)->get();
        } elseif ($this->page->id == 'verzekering-zakelijk') {
            $slug = $this->param('slug');
            $zakelijk = Zakelijk::where('slug', '!=' , $slug)->where('fullswitch', true)->get();
        } else {
            $zakelijk = Zakelijk::orderBy('sort_order', 'ASC')->get();
        }

        if ($zakelijk->isEmpty()) {
            return false;
        } else {
            return $zakelijk;
        }
    }
}