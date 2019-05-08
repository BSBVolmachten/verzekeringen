<?php namespace BsbVolmachten\Verzekeringen\Models;

use Model;

/**
 * Model
 */
class Categorieen extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use \October\Rain\Database\Traits\Sortable;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'bsbvolmachten_verzekeringen_categorieen';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
