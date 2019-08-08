<?php
namespace Bsbvolmachten\Verzekeringen\components;

use Cms\Classes\ComponentBase;
use Bsbvolmachten\Verzekeringen\Models\Particulier;
use Bsbvolmachten\Verzekeringen\Models\Zakelijk;

class Verzekering extends ComponentBase {

    public function componentDetails()
    {
        return [
            'name' => 'Verzekering',
            'description' => 'Laat een enkele verzekering zien.'
        ];
    }

    public function onRun() {
        $verzekering = $this->getVerzekering();
        $zakelijk = $this->getZakelijk();
        $particulier = $this->getParticulier();

        ($verzekering == false) ? $this->page['insurance'] = false : $this->page['insurance'] = $verzekering;
        ($zakelijk->isEmpty()) ? $this->page['zakelijk'] = false : $this->page['zakelijk'] = $zakelijk;
        ($particulier->isEmpty()) ? $this->page['particulier'] = false : $this->page['particulier'] = $particulier;
    }

    public function getZakelijk() {
        $slug = $this->param('slug');
        return Zakelijk::where('slug', '!=' , $slug)->where('fullswitch', true)->get();
    }

    public function getParticulier() {
        $slug = $this->param('slug');
        return Particulier::where('slug', '!=' , $slug)->where('fullswitch', true)->get();
    }

    public function getVerzekering()
    {
        $slug = $this->param('slug');

        $particulier = Particulier::where('slug' , $slug)->where('fullswitch', true)->first();
        $zakelijk = Zakelijk::where('slug' , $slug)->where('fullswitch', true)->first();

        if ($particulier) {
            return $particulier;
        } elseif ($zakelijk) {
            return $zakelijk;
        } else {
            return false;
        }

    }
}