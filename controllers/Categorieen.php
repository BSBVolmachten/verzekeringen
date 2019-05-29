<?php namespace Bsbvolmachten\Verzekeringen\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Categorieen extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController',        'Backend\Behaviors\ReorderController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';
    public $reorderConfig = 'config_reorder.yaml';

    public $requiredPermissions = [
        'manage-verzekeringen' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Bsbvolmachten.Verzekeringen', 'main-menu-item', 'side-menu-item2');
    }
}
