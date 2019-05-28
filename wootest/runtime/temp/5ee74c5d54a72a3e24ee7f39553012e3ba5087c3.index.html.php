<?php
/*%%SmartyHeaderCode:266845c6f66ec9dd329_54543243%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5ee74c5d54a72a3e24ee7f39553012e3ba5087c3' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\wootest\\app\\install\\view\\Index\\index.html',
      1 => 1540726712,
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
    'b685472fc69e1be5104852248c4ab43efd4201b6' => 
    array (
      0 => 'b685472fc69e1be5104852248c4ab43efd4201b6',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '266845c6f66ec9dd329_54543243',
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
  'unifunc' => 'content_5c6f66eca7d5c0_97435373',
  'cache_lifetime' => 3600,
),true);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5c6f66eca7d5c0_97435373')) {
function content_5c6f66eca7d5c0_97435373 ($_smarty_tpl) {
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
    
    

<div class="copyright">
<p>WOOCMS软件使用协议</p>
<p>版权所有 © 2017-2018 WOOCMS</p>       
<p>感谢您选择WOOCMS内容管理框架, 希望我们的产品能够帮您把网站发展的更快、更好、更强！</p> 
<p>你可以免费使用WOOCMS进行个人、学习、<b>商业</b>等项目的开发，但必须保留（禁止删除、隐藏、修改、透明、遮挡等）软件版权信息的正常显示及相关连接正常，并且我们不负责因擅自修改源码而导致的一系列问题和损失。
如果需要修改软件版权信息和相关连接，必须联系WOOCMS管理员（QQ：1990818917）进行正版授权。</p>
<p>不管是免费版本还是正版授权，禁止在WOOCMS整体或任何部分基础上发展任何派生版本、修改版本或第三方版本用于重新分发。</p>
<p>WOOCMS唯一网站地址：https://www.eduaskcms.xin/</p>
<p><b>WOOCMS免责声明</b></p>
<p>  1、使用WOOCMS构建的网站的任何信息内容以及导致的任何版权纠纷和法律争议及后果，WOOCMS官方不承担任何责任。</p>
<p>  2、您一旦安装使用WOOCMS，即被视为完全理解并接受本协议的各项条款，在享有上述条款授予的权力的同时，受到相关的约束和限制。</p>

</div>

<div class="bottom-btns">
    <a href="http://127.0.0.1/wootest/public/?s=install/index/step2" class="layui-btn">接 受 >></a>
</div>

    
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