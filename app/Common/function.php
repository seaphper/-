<?php
/**
 * [response_code 提示MSG数组]
 * @param  string $code [code]
 * @return [type]       [json]
 */
function response_code($code=''){
    $code_data=array(
        '401'=>['msg'=>'帐号不能为空!','stc'=>401],
        '402'=>['msg'=>'密码不能为空！','stc'=>402],
        '403'=>['msg'=>'验证码有误！','stc'=>403],
        '404'=>['msg'=>'帐号或者密码有误！','stc'=>404],
        '405'=>['msg'=>'帐号已被禁用！','stc'=>405],
        '406'=>['msg'=>'登录成功！','stc'=>406],
        '407'=>['msg'=>'退出成功！','stc'=>407],

        '600'=>['msg'=>'操作成功！','stc'=>600],
        '604'=>['msg'=>'操作失败！','stc'=>604]
    );
    return response()->json($code_data[$code]);
}