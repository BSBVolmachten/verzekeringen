<?php namespace Bsbvolmachten\Verzekeringen\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Iconen extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public $requiredPermissions = [
        'manage-verzekeringen' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Bsbvolmachten.Verzekeringen', 'main-menu-item', 'side-menu-item4');
    }
}
