<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo e(Config::get('constants.SYSTEM_NAME')); ?></title>
    <link rel="stylesheet" href="<?php echo e(asset('Layui/css/layui.css')); ?>">
    <link rel="stylesheet" type="text/css" href="http://www.jq22.com/jquery/font-awesome.4.6.0.css">
</head>
<body class="kit-theme">
    <div class="layui-layout layui-layout-admin kit-layout-admin">
        <div class="layui-header">
            <div class="layui-logo"><?php echo e(Config::get('constants.SYSTEM_TITLE')); ?></div>
            <div class="layui-logo kit-logo-mobile">K</div>
            <ul class="layui-nav layui-layout-left kit-nav" kit-one-level>
                <li class="layui-nav-item"><a href="javascript:;">控制台</a></li>
                <li class="layui-nav-item"><a href="javascript:;">商品管理</a></li>
            </ul>
            <ul class="layui-nav layui-layout-right kit-nav">
                <li class="layui-nav-item"><a href="javascript:;" id="pay"><i class="fa fa-gratipay" aria-hidden="true"></i> 捐赠我</a></li>
                <li class="layui-nav-item">
                    <a href="javascript:;">
                        <img src="<?php echo e(Config::get('constants.SYSTEM_ADDRESS')); ?><?php echo e(Session::get('admin_header_img')); ?>" class="layui-nav-img"> <?php echo e(Session::get('admin_rel_name')); ?>

                    </a>
                    <dl class="layui-nav-child">
                        <dd><a href="javascript:;">基本资料</a></dd>
                        <dd><a href="javascript:;">安全设置</a></dd>
                    </dl>
                </li>
                <li class="layui-nav-item"><a href="javascript:;" class="login_out"><i class="fa fa-sign-out" aria-hidden="true"></i> 注销</a></li>
            </ul>
        </div>
        <div class="layui-side layui-bg-black kit-side">
            <div class="layui-side-scroll">
                <div class="kit-side-fold"><i class="fa fa-navicon" aria-hidden="true"></i></div>
                <!-- 左侧导航区域（可配合layui已有的垂直导航） -->
                <ul class="layui-nav layui-nav-tree" lay-filter="kitNavbar" kit-navbar>
                    <li class="layui-nav-item">
                        <a class="" href="javascript:;"><i class="fa fa-plug" aria-hidden="true"></i><span> 基本元素</span></a>
                        <dl class="layui-nav-child">
                            <dd>
                                <a href="javascript:;" kit-target data-options="{url:'test.html',icon:'&#xe6c6;',title:'表格',id:'1'}">
                                    <i class="layui-icon">&#xe6c6;</i><span> 表格</span></a>
                            </dd>
                            <dd>
                                <a href="javascript:;" data-url="form.html" data-icon="fa-user" data-title="表单" kit-target data-id='2'><i class="fa fa-user" aria-hidden="true"></i><span> 表单</span></a>
                            </dd>
                            <dd>
                                <a href="javascript:;" data-url="nav.html" data-icon="&#xe628;" data-title="导航栏" kit-target data-id='3'><i class="layui-icon">&#xe628;</i><span> 导航栏</span></a>
                            </dd>
                            <dd>
                                <a href="javascript:;" data-url="list4.html" data-icon="&#xe614;" data-title="列表四" kit-target data-id='4'><i class="layui-icon">&#xe614;</i><span> 列表四</span></a>
                            </dd>
                            <dd>
                                <a href="javascript:;" kit-target data-options="{url:'https://www.baidu.com',icon:'&#xe658;',title:'百度一下',id:'5'}"><i class="layui-icon">&#xe658;</i><span> 百度一下</span></a>
                            </dd>
                        </dl>
                    </li>
                    <li class="layui-nav-item layui-nav-itemed">
                        <a href="javascript:;"><i class="fa fa-plug" aria-hidden="true"></i><span> 组件</span></a>
                        <dl class="layui-nav-child">
                            <dd><a href="javascript:;" kit-target data-options="{url:'navbar.html',icon:'&#xe658;',title:'Navbar',id:'6'}"><i class="layui-icon">&#xe658;</i><span> Navbar</span></a></dd>
                            <dd><a href="javascript:;" kit-target data-options="{url:'tab.html',icon:'&#xe658;',title:'TAB',id:'7'}"><i class="layui-icon">&#xe658;</i><span> Tab</span></a></dd>
                            <dd><a href="javascript:;" kit-target data-options="{url:'onelevel.html',icon:'&#xe658;',title:'OneLevel',id:'50'}"><i class="layui-icon">&#xe658;</i><span> OneLevel</span></a></dd>
                            <dd><a href="javascript:;" kit-target data-options="{url:'app.html',icon:'&#xe658;',title:'App',id:'8'}"><i class="layui-icon">&#xe658;</i><span> app.js主入口</span></a></dd>
                        </dl>
                    </li>
                    <li class="layui-nav-item">
                        <a href="javascript:;" data-url="/components/table/table.html" data-name="table" kit-loader><i class="fa fa-plug" aria-hidden="true"></i><span> 表格(page)</span></a>
                    </li>
                    <li class="layui-nav-item">
                        <a href="javascript:;" data-url="/views/form.html" data-name="form" kit-loader><i class="fa fa-plug" aria-hidden="true"></i><span> 表单(page)</span></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="layui-body" id="container">
            <!-- 内容主体区域 -->
            <div style="padding: 15px;">主体内容加载中,请稍等...</div>
        </div>
        <div class="layui-footer">
            <!-- 底部固定区域 -->
            2017 &copy;
            <a href="http://kit.zhengjinfan.cn/">kit.zhengjinfan.cn/</a> MIT license
        </div>
    </div>
    <script type="text/javascript">
        var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");
        document.write(unescape("%3Cspan id='cnzz_stat_icon_1264021086'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s22.cnzz.com/z_stat.php%3Fid%3D1264021086%26show%3Dpic1' type='text/javascript'%3E%3C/script%3E"));
    </script>
</body>
<!-- <body> -->
    <!-- <div class="layui-layout layui-layout-admin">
        <div class="layui-header">
            <div class="layui-logo"><?php echo e(Config::get('constants.SYSTEM_TITLE')); ?></div> -->
            <!-- 头部区域（可配合layui已有的水平导航） -->
            <!-- <ul class="layui-nav layui-layout-left">
                <li class="layui-nav-item"><a href="">用户</a></li>
                <li class="layui-nav-item">
                    <a href="">信息<span class="layui-badge">9</span></a>
                </li>
                <li class="layui-nav-item">
                    <a href="javascript:;">安全管理</a>
                    <dl class="layui-nav-child">
                        <dd><a href="">Sql备份</a></dd>
                        <dd><a href="">数据表</a></dd>
                    </dl>
                </li>
            </ul>
            <ul class="layui-nav layui-layout-right">
                <li class="layui-nav-item">
                    <a href="javascript:;">
                        <img src="<?php echo e(Config::get('constants.SYSTEM_ADDRESS')); ?><?php echo e(Session::get('admin_header_img')); ?>" class="layui-nav-img">
                        <?php echo e(Session::get('admin_rel_name')); ?>

                    </a>
                    <dl class="layui-nav-child">
                        <dd><a href="">基本资料</a></dd>
                        <dd><a href="">安全设置</a></dd>
                    </dl>
                </li>
                <li class="layui-nav-item"><a class="login_out" href="javascript:;">退了</a></li>
                <li class="layui-nav-item">
                    <a href="<?php echo e(url('admin/index')); ?>">
                        <button class="layui-btn layui-btn-sm layui-btn-radius layui-btn-danger">
                            <i class="layui-icon">&#x1002;</i> 刷新
                        </button>
                    </a>
                </li>
            </ul>
        </div>
        <div class="layui-side layui-bg-black">
            <div class="layui-side-scroll"> -->
                <!-- 左侧导航区域（可配合layui已有的垂直导航） -->
                <!-- <ul class="layui-nav layui-nav-tree"  lay-filter="test">
                    <li class="layui-nav-item">
                        <a class="" href="javascript:;">权限管理</a>
                        <dl class="layui-nav-child">
                            <dd><a href="javascript:;">人员管理</a></dd>
                            <dd><a href="javascript:;">角色管理</a></dd>
                        </dl>
                    </li>
                    <li class="layui-nav-item">
                        <a href="javascript:;">后台管理</a>
                        <dl class="layui-nav-child">
                            <dd><a href="javascript:;">菜单管理</a></dd>
                      </dl>
                    </li>
                    <li class="layui-nav-item">
                        <a href="javascript:;">系统设置</a>
                        <dl class="layui-nav-child">
                            <dd><a href="javascript:;">SEO设置</a></dd>
                      </dl>
                    </li>
                    <li class="layui-nav-item">
                        <a href="javascript:;">操作日志</a>
                        <dl class="layui-nav-child">
                            <dd><a href="javascript:;">日志列表</a></dd>
                        </dl>
                    </li>
                </ul>
            </div>
        </div>
        <div class="layui-body">
            <div class="layui-tab" lay-allowClose="false" lay-filter="header_nav">
                <ul class="layui-tab-title">
                    <li class="layui-this">网站设置</li>
                    <li>用户基本管理</li>
                    <li>权限分配</li>
                    <li>全部历史商品管理文字长一点试试</li>
                    <li>订单管理</li>
                </ul>
                <div class="layui-tab-content">
                    <div class="layui-tab-item layui-show">1</div>
                    <div class="layui-tab-item">2</div>
                    <div class="layui-tab-item">3</div>
                    <div class="layui-tab-item">4</div>
                    <div class="layui-tab-item">5</div>
                    <div class="layui-tab-item">6</div>
              </div>
            </div>
            <blockquote class="layui-elem-quote" >
                主题内容
            </blockquote>
            <div style="padding: 15px;">内容主体区域</div>
        </div>
        <div class="layui-footer" style="text-align: center;">
            <?php echo e(Config::get('constants.SYSTEM_BUTTON')); ?>

        </div>
    </div>
 -->

<script src="<?php echo e(asset('Layui/layui.all.js')); ?>" type="text/javascript" charset="utf-8" ></script>
<script src="<?php echo e(asset('Layui/layui.js')); ?>" type="text/javascript" charset="utf-8" ></script>
<script src="<?php echo e(asset('js/jquery-3.2.1.min.js')); ?>" type="text/javascript" charset="utf-8" ></script>
</body>
</html>
<script type="text/javascript">
/**
 * 页面调用路由控制
 */
var message;
layui.config({
    base: 'build/js/'
}).use(['app', 'message'], function() {
    var app = layui.app,
        $ = layui.jquery,
        layer = layui.layer;
    //将message设置为全局以便子页面调用
    message = layui.message;
    //主入口
    app.set({
        type: 'iframe'
    }).init();
});
/**
 * [description]
 * @param    {String} ){                 let _url [退出登陆]
 * @return  {[type]}     [json]
 */
$('.login_out').click(function(){
    let _url = "<?php echo e(url('admin/loginout')); ?>",_data = {};
    $.ajax({
        type: "GET",
        url: _url,
        data: _data,
        cache:false,
        dataType:"json",
        async:false,
        success: function(msg){
            layer.msg('提示：退出成功一秒后跳转！');
            setTimeout(function(){
                window.location.href="<?php echo e(url('admin/index')); ?>";
            },1000);
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
})
</script>