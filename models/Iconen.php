<?php namespace Bsbvolmachten\Verzekeringen\Models;

use Model;

/**
 * Model
 */
class Iconen extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'bsbvolmachten_verzekeringen_iconen';

    /**
     * @var array Validation rules
     */
    public $rules = [
        'name' => 'required',
        'slug' => 'required'
    ];
}
