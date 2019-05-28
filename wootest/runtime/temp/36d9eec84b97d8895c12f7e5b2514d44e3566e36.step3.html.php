<?php
/*%%SmartyHeaderCode:277345c6f670d2c8271_13776814%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '36d9eec84b97d8895c12f7e5b2514d44e3566e36' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\wootest\\app\\install\\view\\Index\\step3.html',
      1 => 1537157560,
      2 => 'file',
    ),
    '09fcefc0a7fd89c17271e35243f04f9da2a260cf' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\wootest\\app\\install\\view\\base.html',
      1 => 1546956306,
      2 => 'file',
    ),
    'a07ca834fcce9d7702ff02fc8b40bcaa3adee1e8' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\wootest\\app\\install\\view\\global.html',
      1 => 1537157560,
      2 => 'file',
    ),
    'd617b019056a918aff46fc4e683c99a177593fda' => 
    array (
      0 => 'd617b019056a918aff46fc4e683c99a177593fda',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '277345c6f670d2c8271_13776814',
  'tpl_function' => 
  array (
  ),
  'variables' => 
  array (
    'meta' => 0,
    'is_favicon' => 0,
    'root' => 0,
    'css' => 0,
    'html' => 0,
    'absroot' => 0,
    'params' => 0,
    'js' => 0,
    'defer_js' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5c6f670d3d1cb5_00292011',
  'cache_lifetime' => 3600,
),true);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5c6f670d3d1cb5_00292011')) {
function content_5c6f670d3d1cb5_00292011 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="zh-cn" >
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no" name="viewport"/>
<meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible"/>
<meta name="renderer" content="webkit"/>
<meta name="HandheldFriendly" content="true"/>
<meta name="format-detection" content="telephone=no, email=no" />
<meta name="Keywords" content="" />
<meta name="Description" content="" />
<title>WooCMS安装</title>

<link rel="stylesheet" type="text/css" href="http://127.0.0.1/wootest/public/files/layui/css/layui.css" />
<link rel="stylesheet" type="text/css" href="http://127.0.0.1/wootest/public/css/install/global.css" />
<link rel="stylesheet" type="text/css" href="http://127.0.0.1/wootest/public/css/animate.css" />
<link rel="stylesheet" type="text/css" href="http://127.0.0.1/wootest/public/files/awesome-4.7.0/css/font-awesome.min.css" />
<script type="text/javascript">var wwwroot='/wootest/public/';var absroot='http://127.0.0.1/wootest/public/';var module='install';</script>

<script type="text/javascript" src="http://127.0.0.1/wootest/public/js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="http://127.0.0.1/wootest/public/files/layui/layui.js"></script>
<!--[if lt IE 9]>

<script type="text/javascript" src="/wootest/public/js/html5shiv.min.js"></script>
<script type="text/javascript" src="/wootest/public/js/css3-mediaqueries.js"></script>
<![endif]-->
</head>

<body>

    
    <div class="wrap" id="install"> 
        <div class="header">
            <span>V1.2.6</span>
            <h2  class="reset">WOOCMS安装向导</h2>
        </div>
        
        <div class="container">
    
    
<div class="steps">
    <ul class="grid">
        <li >
            <span class="step">1</span>检测环境
        </li>
        <li class="current">
            <span class="step">2</span>创建数据
        </li>
        <li>
            <span class="step">3</span>完成安装
        </li>
    </ul>
</div>
<form method="post" class="layui-form" action="/wootest/public/install/index/step4.html">
<div class="dbform">
    
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
                <th width="100%" colspan="4">数据库信息</th>
            </tr>
            <tr>
                <th class="title"><label>数据库地址</label></th>
                <td width="35%"><input lay-verify="required" value="127.0.0.1" woo-tip="一般为127.0.0.1或localhost"  type="text" class="layui-input" name="dbhost"/></td>            
                <td></td>        
            </tr>
            <tr>
                <th class="title"><label>数据库端口</label></th>
                <td><input  type="text" lay-verify="required" value="3306" woo-tip="Mysql端口一般为3306" class="layui-input" name="dbport"/></td>            
                <td></td>        
            </tr>
            <tr>
                <th class="title"><label>数据库用户名</label></th>
                <td><input  type="text" lay-verify="required"  value="root" class="layui-input" name="dbusername"/></td>            
                <td></td>        
            </tr>
            <tr>
                <th class="title"><label>数据库密码</label></th>
                <td><input  type="password" class="layui-input" lay-verify="dbpassword" value="" woo-checked="0"  name="dbpassword"/></td>            
                <td></td>        
            </tr>            
            <tr>
                <th class="title"><label>数据库名</label></th>
                <td><input  type="text" lay-verify="required" value="woocms" class="layui-input" name="dbname"/></td>            
                <td></td>        
            </tr>
            <tr>
                <th class="title"><label>数据库表前缀</label></th>
                <td><input  type="text" lay-verify="required" value="woo_" woo-tip="一个库如果有多个项目可以通过前缀区分" class="layui-input" name="dbprefix"/></td>            
                <td></td>        
            </tr>
            <tr>
                <th class="title"><label>数据库编码</label></th>
                <td>
                    <select name="dbcharset" lay-verify="required">
                        <option value="">--请选择数据库编码--</option>
                        <option value="utf8" selected="">utf8</option>
                        <option value="utf8mb4">utf8mb4</option>
                    </select>
                </td>            
                <td></td>        
            </tr>
            <tr>
                <th width="100%" colspan="4">创始人信息</th>
            </tr>
            <tr>
                <th class="title"><label>管理员账号</label></th>
                <td><input  type="text" lay-verify="required"  woo-tip="创始人帐号，拥有后台所有管理权限"  value="admin" class="layui-input" name="username"/></td>            
                <td></td>        
            </tr>
            <tr>
                <th class="title"><label>密码</label></th>
                <td><input  type="password" lay-verify="password" voo-tip="密码长度不低于5位,不高于16位" class="layui-input" name="password"/></td>            
                <td></td>        
            </tr>
            <tr>
                <th class="title"><label>确认密码</label></th>
                <td><input  type="password" lay-verify="repassword" class="layui-input" name="repassword"/></td>            
                <td></td>        
            </tr>
            <tr>
                <th class="title"><label>Email</label></th>
                <td><input  type="text" lay-verify="email" class="layui-input" name="email"/></td>            
                <td></td>        
            </tr>
        </table>
    
</div>


<div class="bottom-btns">
    <a href="http://127.0.0.1/wootest/public/?s=install/index/step2" class="layui-btn"><< 上一步</a><input lay-filter="submit" lay-submit="" type="submit" value="创建数据" class="layui-btn"/>
</div>
</form>
<script>

layui.use(['form'], function(){
  var form = layui.form
  ,layer = layui.layer;
  
  
  
  
  
  
 
  //自定义验证规则  
  $('[woo-tip]').focus(function(){
    var text  = $(this).attr('woo-tip');
    layer.tips(text, $(this));
  })
  
  form.verify({
    password : function (value, item) {
        if (value.length < 5 || value.length > 16) {
            return '密码长度不低于5位,不高于16位';
        }
    },
    repassword : function (value, item) {
        var pass  = $('[name="password"]').val();
        if (pass != value) {
            return '两次密码输入不一致';
        }
    },
    dbpassword : function (value, item) {
        var is_check = $('[name="dbpassword"]').attr('woo-checked');
        if (is_check == 0) {
            return '密码验证失败，如果为空请先点一次自动验证';
        }
    }
  })
  
  $('[name="dbpassword"]').blur(function(){
      var dbuser = $('[name="dbusername"]').val();
      var dbhost = $('[name="dbhost"]').val();
      var dbport = $('[name="dbport"]').val();
      var dbpass = $('[name="dbpassword"]').val();
      $.ajax({
        url: "/wootest/public/install/index/testdbpwd.html",
        type: 'GET',
        data:{
            hostname: dbhost,
            username : dbuser,
            password :　dbpass,
            hostport　: dbport
        },
        dataType: 'JSON',
        success: function (data) {
           if (data.code == 1) {
              $('[name="dbpassword"]').attr('woo-checked', 1);              
           } else  {
              $('[name="dbpassword"]').attr('woo-checked', 0).val(''); 
              layer.tips(data.msg, $('[name="dbpassword"]')); 
           }
        }
    })
  })
  
  
  
  
  //监听提交
  form.on('submit(submit)', function(data){
    
  });
});
</script>

    
        </div>
    </div>
    
    <div class="footer wrap">
        <div class="link">
        <a href="https://www.eduaskcms.xin" target="_blank">系统官网</a><em>|</em><a href="https://www.eduaskcms.xin" target="_blank">检查更新</a><em>|</em><a href="https://www.kancloud.cn/laowu199/e_dev" target="_blank">开发手册</a><em>|</em><a href="https://www.kancloud.cn/manual/thinkphp5_1" target="_blank">ThinkPHP5.1手册</a><em>|</em><a href="//shang.qq.com/wpa/qunwpa?idkey=904af7a5d6b422b0fdc1cd04160b64b117fda091bf830b44d1cbd3b02f079e33" target="_blank">Q群：314833523</a>        </div>
        <div class="foot_copy">&copy; 2017-2018 WOOCMS</div>
    </div>
    
    


</body>
</html><?php }
}
?>