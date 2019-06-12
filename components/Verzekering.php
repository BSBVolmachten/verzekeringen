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

    public function verzekering()
    {
        $slug = $this->param('slug');

        $particulier = Particulier::where('slug' , $slug)->where('fullswitch', true)->first();
        $zakelijk = Zakelijk::where('slug' , $slug)->where('fullswitch', true)->first();

        if ($particulier) {
            return $particulier;
        } elseif($zakelijk) {
            return $zakelijk;
        } else {
            return false;
        }

    }
}