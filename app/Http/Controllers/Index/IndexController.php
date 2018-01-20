<?php

namespace App\Http\Controllers\Index;

use DB;
/**
*
*/
class IndexController extends BaseController
{

    public function index(){
        return view('index/index',['name'=>'holle world']);
        $list=DB::table('admin')->get();
    }
}
