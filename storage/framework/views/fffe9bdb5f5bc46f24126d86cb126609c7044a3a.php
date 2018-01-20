<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SEA-海的后台</title>
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="<?php echo e(asset('Layui/css/layui.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/login.css')); ?>">
</head>
<body>
    <div class="all-wrap">
      <div class="all">
        <div class="yarn"></div>
        <div class="cat-wrap">
          <div class="cat">
            <div class="cat-upper">
              <div class="cat-leg"></div>
              <div class="cat-leg"></div>
              <div class="cat-head">
                <div class="cat-ears">
                  <div class="cat-ear"></div>
                  <div class="cat-ear"></div>
                </div>
                <div class="cat-face">
                  <div class="cat-eyes"></div>
                  <div class="cat-mouth"></div>
                  <div class="cat-whiskers"></div>
                </div>
              </div>
            </div>
            <div class="cat-lower-wrap">
              <div class="cat-lower">
                <div class="cat-leg">
                  <div class="cat-leg">
                    <div class="cat-leg">
                      <div class="cat-leg">
                        <div class="cat-leg">
                          <div class="cat-leg">
                            <div class="cat-leg">
                              <div class="cat-leg">
                                <div class="cat-leg">
                                  <div class="cat-leg">
                                    <div class="cat-leg">
                                      <div class="cat-leg">
                                        <div class="cat-leg">
                                          <div class="cat-leg">
                                            <div class="cat-leg">
                                              <div class="cat-leg">
                                                <div class="cat-paw"></div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="cat-leg">
                  <div class="cat-leg">
                    <div class="cat-leg">
                      <div class="cat-leg">
                        <div class="cat-leg">
                          <div class="cat-leg">
                            <div class="cat-leg">
                              <div class="cat-leg">
                                <div class="cat-leg">
                                  <div class="cat-leg">
                                    <div class="cat-leg">
                                      <div class="cat-leg">
                                        <div class="cat-leg">
                                          <div class="cat-leg">
                                            <div class="cat-leg">
                                              <div class="cat-leg">
                                                <div class="cat-paw"></div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="cat-tail">
                  <div class="cat-tail">
                    <div class="cat-tail">
                      <div class="cat-tail">
                        <div class="cat-tail">
                          <div class="cat-tail">
                            <div class="cat-tail">
                              <div class="cat-tail">
                                <div class="cat-tail">
                                  <div class="cat-tail">
                                    <div class="cat-tail">
                                      <div class="cat-tail">
                                        <div class="cat-tail">
                                          <div class="cat-tail">
                                            <div class="cat-tail">
                                              <div class="cat-tail -end"></div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div style="margin:15% 60%;width:400px;height:380px;background-color:#ffffff;border-radius:5px;">
        <div style="margin: 0 auto;width:50%;">
            <h3 style="text-align: content;color: #333;font-weight: 100;font-size: 24px;display:block;line-height: 100px;">SEA-内容管理系统</h3>
            <div class="layui-input-inline">
                <input type="text" name="username"  placeholder="请输入:帐号" lay-verify="required|phone" autocomplete="off" class="username layui-input">
            </div>
            <div class="layui-input-inline" style="margin-top:20px">
                <input type="password" name="password"  placeholder="请输入:密码"  class="password layui-input">
            </div>
            <div class="layui-input-inline" style="margin-top:20px;width:220px;">
                <input type="text" style="width:110px;float:left" name="verify"  placeholder="请输入:验证码"  class="verify layui-input">
                <img id="verify_img" style="float: right;" src="<?php echo e(url('admin/getVerify')); ?>" alt="" onclick="this.src='<?php echo e(url("admin/getVerify")); ?>?'+Math.random()" />
            </div>
            <div class="layui-input-inline" style="margin-top:20px">
                <button class="layui-btn layui-btn-lg layui-btn-normal">确认登录</button>
            </div>
        </div>
    </div>
</body>
<script src="<?php echo e(asset('js/jquery-3.2.1.min.js')); ?>" type="text/javascript" charset="utf-8" ></script>
<script src="<?php echo e(asset('Layui/layui.all.js')); ?>" type="text/javascript" charset="utf-8" ></script>
</html>
<script>

$(document).ready(function(){
    document.onkeydown = function(e){
    var ev = document.all ? window.event : e;
        if(ev.keyCode==13) {
            common_request();
        }
    };
    $(".layui-btn").click(function(){
        common_request();
    });

    /**
     * [common_request 请求数据]
     * @return  {[type]} [description]
     */
    function common_request(){
        let username=$('.username').val(),
            password = $('.password').val(),
            verify = $('.verify').val(),
            _url='<?php echo e(url("admin/runlogin")); ?>';
        if(!username){
            layer.tips('请填写用户名！', '.username', {time: 1000});
            return false;
        }
        if(!password){
            layer.tips('请填写密码！', '.password', {time: 1000});
            return false;
        }
        if(!verify){
            layer.tips('请填写验证码！', '.verify', {time: 1000});
            return false;
        }
        _data={
            'username':username,
            'password':password,
            'verify':verify
        };
        $.ajax({
            type: "GET",
            url: _url,
            data: _data,
            cache:false,
            dataType:"json",
            async:false,
            success: function(msg){
                if(msg.stc!=406){
                    layer.msg('提示：'+msg.msg);
                    newcode();
                }else{
                    layer.msg('提示：'+msg.msg);
                    setTimeout(function(){
                        window.location.href="<?php echo e(url('admin/index')); ?>";
                    },2000);
                }
                layer.close(loadding_0);
            },
            beforeSend:function(){
                loadding_0 = layer.load('提示: 数据正在加载中...');
            },
            error:function(){
                layer.msg('提示：服务器繁忙请稍后!');
                return false ;
            }
        });
    }
    /**
     * [newcode 刷新验证码]
     * @return  {[type]} [description]
     */
    function newcode(){
        $('#verify_img').attr('src','<?php echo e(url("admin/getVerify")); ?>?'+Math.random());
    }
});
</script>