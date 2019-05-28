<?php
/*%%SmartyHeaderCode:190895c6f675f2b3697_49490540%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '22325395da4a4e0e2b377b69b78f66af50dd7c7e' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\wootest\\app\\install\\view\\Index\\step4.html',
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
    'f72017a3481a02720be5cfcd518a838788c214fc' => 
    array (
      0 => 'f72017a3481a02720be5cfcd518a838788c214fc',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '190895c6f675f2b3697_49490540',
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
  'unifunc' => 'content_5c6f675f3d0958_79262266',
  'cache_lifetime' => 3600,
),true);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5c6f675f3d0958_79262266')) {
function content_5c6f675f3d0958_79262266 ($_smarty_tpl) {
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
    <ul class="grid"></ul>
</div>

<div id="insLog">
    <ul class="list" id="insRslt">
    </ul>
</div>


<div class="bottom-btns" style="color: #009688;">
    <i class="fa fa-refresh fa-spin"></i>
    正在安装，请稍后...期间请不要刷新或关闭浏览器
</div>
</form>
<script>
var layer;
layui.use(['layer'], function(){
  layer = layui.layer
})
$(function () {
    install(0);
});

var insRslt = $('#insRslt');

function install(index) {
    $.ajax({
        url: "/wootest/public/install/index/install.html",
        type: 'GET',
        data:{
            index: index
        },
        dataType: 'JSON',
        success: function (data) {
           console.log(data)
           if (data.code == 1) {
               insRslt.append('<li><i class="fa fa-check"></i>'+data.msg+'</li>');
           } else if(data.code == 0) {
               insRslt.append('<li><i class="fa fa-remove"></i>'+data.msg+'<br><pre>'+data.data.sql+'</pre><br><pre>'+data.data.exception+'</pre></li>');
           } else if(data.code == 2) {
               insRslt.append('<li><i class="fa fa-check"></i>数据库安装完成！</li>');
               if (data.data.error) {
                  layer.alert('本次安装过程中，共'+data.data.error+'个SQL执行失败，可能您在此数据库下已经安装过WooCMS系统。确实有疑问，请加入我们QQ群：314833523。');
               } else {
                   setDbConfig();
               }
           } else if(data.code == -1) {
               insRslt.append('<li><i class="fa fa-remove"></i>'+data.msg+'<a href="http://127.0.0.1/wootest/public/?s=install" style="color:red;margin-left:10px;">重新安装</a></li>');
           }
           $('#insLog').scrollTop(8888888);
           if (!(data.code == 2 || data.code == -1)) {
              install(index + 1)
           }
        }
    })
}

function setDbConfig() {
    $.ajax({
        url: "/wootest/public/install/index/setdbconfig.html",
        type: 'GET',
        dataType: 'JSON',
        success: function (data) {
           if (data.code == 1) {
               insRslt.append('<li><i class="fa fa-check"></i>'+data.msg+'</li>');
               setAdminUser();
           } else {
               layer.alert(data.msg + '请检查/data/config/database.php是否可写？<br/>检查后点击“确定”尝试重新写入数据库配置文件', function(index){
                  setDbConfig();
               });
           }
           $('#insLog').scrollTop(8888888);
        }
    })
}

function setAdminUser() {
    $.ajax({
        url: "/wootest/public/install/index/setadminuser.html",
        type: 'GET',
        dataType: 'JSON',
        success: function (data) {
           if (data.code == 1) {
               insRslt.append('<li><i class="fa fa-check"></i>'+data.msg+'</li>');
               $('.bottom-btns').html('<i class="fa fa-check"></i>所有程序安装完成，页面即将跳转...');
               setTimeout(function () {
                    window.location = "/wootest/public/install/index/step5.html";
               }, 1000);
           } else {
               insRslt.append('<li><i class="fa fa-remove"></i>'+data.msg+'<br><pre>'+data.data.error+'</pre></li>');
           }
           $('#insLog').scrollTop(8888888);
        }
    })
}

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