<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Gregwar\Captcha\CaptchaBuilder;
use Illuminate\Http\Request;
use Session;
use DB;

class LoginController extends Controller
{

    /**
     * [index 登录首页]
     * @return [type] [description]
     */
    public function index(request $request){
        if($request->session()->has('admin_id') || $request->session()->has('group_id')){
            require Redirect('admin/index')->send();
        }
        return view('Admin.Login.index');
    }
    /**
     * [runlogin 登录验证]
     * @param  request $request [中间件]
     * @return [type]           [json]
     */
    public function runlogin(request $request){
        $username = $request->input('username');
        $password = $request->input('password');
        $verify = $request->input('verify');
        if(!$username){
            return response_code(401);
        }
        if(!$password){
            return response_code(402);
        }
        if($verify != session('milkcaptcha')){
            return response_code(403);
        }
        $where=[
            'admin_name' => $username,
            'admin_pwd' => md5($password)
        ];
        $sel = [
            'admin_id',
            'group_id',
            'admin_name',
            'admin_status',
            'admin_rel_name',
            'admin_header_img'
        ];
        $user = Db::table('admin')->where($where)->select($sel)->first();
        if(!$user){
            return response_code(404);
        }
        if($user->admin_status != 1){
            return response_code(405);
        }
        $session_arr = [
            'admin_id' => $user->admin_id,
            'group_id' => $user->group_id,
            'admin_rel_name' => $user->admin_rel_name,
            'admin_header_img' => $user->admin_header_img
        ];
        $request->session()->put($session_arr);
        return response_code(406);
    }

    /*
    输出验证码
    */
    public function getVerify(){
        $builder = new CaptchaBuilder;
        $builder->build($width = 100, $height = 36, $font = null);
        $phrase = $builder->getPhrase();
        Session::put('milkcaptcha', $phrase);
        return $builder->output();
    }

    /**
     * [login_out 退出登录]
     * @return [type] [josn]
     */
    public function login_out(request $request){
        $request->session()->flush();
        return response_code(407);
    }
}
