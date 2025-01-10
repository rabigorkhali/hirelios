<?php

namespace App\Http\Controllers\System;

use App\Http\Controllers\ResourceController;
use App\Services\MenuService;

class MenuController extends ResourceController
{
    public function __construct(private readonly MenuService $menuService)
    {
        parent::__construct($menuService);
    }

    public function storeValidationRequest()
    {
        return 'App\Http\Requests\System\ConfigRequest';
    }

    public function moduleName()
    {
        return 'menus';
    }

    public function viewFolder()
    {
        return 'backend.system.menu';
    }

}
