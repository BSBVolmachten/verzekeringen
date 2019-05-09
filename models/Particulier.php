<?php namespace Bsbvolmachten\Verzekeringen\Models;

use Model;

/**
 * Model
 */
class Particulier extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use \October\Rain\Database\Traits\Sortable;

    public $attachOne = [
        'image' => 'System\Models\File',
        'file' => 'System\Models\File'
    ];
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;

    public function getCatOptions() {
        $res = Categorieen::get(['id','name'])->toArray();
        $ret = [];
        foreach($res as $value) {
            $ret[$value['id']] = $value['name'];
        }
        return $ret;
    }

    public function getIconOptions() {
        $res = Iconen::get(['slug','name'])->toArray();
        $ret = [];
        foreach($res as $value) {
            $ret[$value['slug']] = $value['name'];
        }
        return $ret;
    }
    /**
     * @var string The database table used by the model.
     */
    public $table = 'bsbvolmachten_verzekeringen_particulier';

    /**
     * @var array Validation rules
     */
    public $rules = [
        'title' => 'required',
        'slug' => 'required',
        'icon' => 'required',
        'short_desc' => 'required',
        'cat' => 'required'
    ];
}
