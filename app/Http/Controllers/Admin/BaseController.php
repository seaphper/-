<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Adminauth;
use Session;

class BaseController extends Controller
{
    protected $not_check_id=[1];//不检测权限的管理员id
    protected $not_check_url=['admin/Index/index','admin/Sys/clear','admin/Index/lang'];//不检测权限的url

    /**
     * [__construct 默认执行方法 检测是否登录]
     */
    public function __construct(request $request){
        //检测登录
        if(!$request->session()->has('admin_id') || !$request->session()->has('group_id')){
            require Redirect('admin/login')->send();
        }
        //检测权限
    }

    /**
     * [get_attr 无限极分类]
     * @param  [type]  $arr [数组]
     * @param  integer $pid [基础层级]
     * @return [type]       [array]
     */
    public function get_attr($arr,$pid=0){
        $tree = array(); //每次都声明一个新数组用来放子元素
        foreach($arr as $v){
            if($v['pid'] == $pid){//匹配子记录
                $v['children'] = $this->get_attr($arr,$v['id']); //递归获取子记录
                if($v['children'] == null){
                    unset($v['children']); //如果子元素为空则unset()进行删除，说明已经到该分支的最后一个元素了（可选）
                }
                $tree[] = $v; //将记录存入新数组
            }
        }
        return $tree;//返回新数组
    }
}