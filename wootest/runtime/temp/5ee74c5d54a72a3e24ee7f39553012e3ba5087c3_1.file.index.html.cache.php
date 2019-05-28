<?php /* Smarty version 3.1.27, created on 2019-02-22 11:05:16
         compiled from "D:\phpStudy\WWW\wootest\app\install\view\Index\index.html" */ ?>
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
  'unifunc' => 'content_5c6f66eca71a45_17185582',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5c6f66eca71a45_17185582')) {
function content_5c6f66eca71a45_17185582 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '266845c6f66ec9dd329_54543243';
?>
<!DOCTYPE html>
<html lang="zh-cn" >
<head><?php $_smarty_tpl->tpl_vars['form'] = new Smarty_Variable(helper('Form'), null, 0);
$_smarty_tpl->tpl_vars['html'] = new Smarty_Variable(helper('Html'), null, 0);?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no" name="viewport"/>
<meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible"/>
<meta name="renderer" content="webkit"/>
<meta name="HandheldFriendly" content="true"/>
<meta name="format-detection" content="telephone=no, email=no" />
<meta name="Keywords" content="<?php if ($_smarty_tpl->tpl_vars['meta']->value['keywords']) {
echo implode(',',$_smarty_tpl->tpl_vars['meta']->value['keywords']);
}?>" />
<meta name="Description" content="<?php if ($_smarty_tpl->tpl_vars['meta']->value['description']) {
echo implode(',',$_smarty_tpl->tpl_vars['meta']->value['description']);
}?>" />
<?php if ($_smarty_tpl->tpl_vars['is_favicon']->value) {?><link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
favicon.ico" /><?php }?>
<title><?php echo implode(' - ',(($tmp = @$_smarty_tpl->tpl_vars['meta']->value['title'])===null||$tmp==='' ? array() : $tmp));?>
</title>
<?php echo $_smarty_tpl->tpl_vars['html']->value->css($_smarty_tpl->tpl_vars['css']->value,true);?>

<?php echo '<script'; ?>
 type="text/javascript">var wwwroot='<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
';var absroot='<?php echo $_smarty_tpl->tpl_vars['absroot']->value;?>
';var module='<?php echo $_smarty_tpl->tpl_vars['params']->value['module'];?>
';<?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->tpl_vars['html']->value->script($_smarty_tpl->tpl_vars['js']->value,true);?>

<!--[if lt IE 9]>
<?php echo $_smarty_tpl->tpl_vars['html']->value->script('html5shiv.min.js');
echo $_smarty_tpl->tpl_vars['html']->value->script('css3-mediaqueries.js');?>

<![endif]-->
</head>

<body>
<?php
$_smarty_tpl->properties['nocache_hash'] = '266845c6f66ec9dd329_54543243';
?>

    
    <div class="wrap" id="install"> 
        <div class="header">
            <span>V<?php echo \woo\controller\WooApp::version();?>
</span>
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
    <a href="<?php echo $_smarty_tpl->tpl_vars['absroot']->value;?>
?s=install/index/step2" class="layui-btn">接 受 >></a>
</div>

    
        </div>
    </div>
    
    <div class="footer wrap">
        <div class="link">
        <?php
$_from = $_smarty_tpl->tpl_vars['foot_link']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['item']->_loop = false;
$_smarty_tpl->tpl_vars['item']->total= $_smarty_tpl->_count($_from);
$_smarty_tpl->tpl_vars['item']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$_smarty_tpl->tpl_vars['item']->iteration++;
$_smarty_tpl->tpl_vars['item']->last = $_smarty_tpl->tpl_vars['item']->iteration == $_smarty_tpl->tpl_vars['item']->total;
$foreach_item_Sav = $_smarty_tpl->tpl_vars['item'];
?><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a><?php if (!$_smarty_tpl->tpl_vars['item']->last) {?><em>|</em><?php }
$_smarty_tpl->tpl_vars['item'] = $foreach_item_Sav;
}
?>
        </div>
        <div class="foot_copy">&copy; 2017-2018 WOOCMS</div>
    </div>
    
    

<?php if (isset($_smarty_tpl->tpl_vars['defer_js']->value)) {?>
<?php echo $_smarty_tpl->tpl_vars['html']->value->script($_smarty_tpl->tpl_vars['defer_js']->value,true);?>

<?php }?>

</body>
</html><?php }
}
?>