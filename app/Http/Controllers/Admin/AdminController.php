<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class AdminController extends BaseController
{

    public function index(){
        return view('admin/index');
    }
}
