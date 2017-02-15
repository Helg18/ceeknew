<?php namespace Ceeks\Products\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class OrdersDetails extends Controller
{
    public $implement = ['Backend\Behaviors\ListController','Backend\Behaviors\FormController','Backend\Behaviors\ReorderController'];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';
    public $reorderConfig = 'config_reorder.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Ceeks.Products','main-menu-item','side-menu-item');
    }
}