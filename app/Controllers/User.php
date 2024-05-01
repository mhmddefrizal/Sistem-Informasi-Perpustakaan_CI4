<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\ModelUser;

class User extends BaseController
{
    private $ModelUser;
    public function __construct() 
    {
        helper('form');
        $this->ModelUser = new ModelUser;
    }
    public function index()
    {
        $data = [
            'menu' => 'pengaturan',
            'submenu' => 'user',
            'judul' => 'User',
            'page' => 'user/v_index',
            'user' => $this->ModelUser->AllData(),
        ];
        return view('v_template_admin', $data);
    }
}
