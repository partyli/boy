<?php /* Smarty version 3.1.27, created on 2019-02-22 11:07:17
         compiled from "D:\phpStudy\WWW\wootest\app\install\view\Index\step5.html" */ ?>
<?php
/*%%SmartyHeaderCode:67955c6f6765d190f5_23660720%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7b519d91f03c61b1f76c1b0b27481143c18e9947' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\wootest\\app\\install\\view\\Index\\step5.html',
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
    'd4bafdac47e32d221cb50b78f94ed9d7f5b92302' => 
    array (
      0 => 'd4bafdac47e32d221cb50b78f94ed9d7f5b92302',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '67955c6f6765d190f5_23660720',
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
  'unifunc' => 'content_5c6f6765d8e408_46202821',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5c6f6765d8e408_46202821')) {
function content_5c6f6765d8e408_46202821 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '67955c6f6765d190f5_23660720';
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
$_smarty_tpl->properties['nocache_hash'] = '67955c6f6765d190f5_23660720';
?>

    
    <div class="wrap" id="install"> 
        <div class="header">
            <span>V<?php echo \woo\controller\WooApp::version();?>
</span>
            <h2  class="reset">WOOCMS安装向导</h2>
        </div>
        
        <div class="container">
    
    

<div class="finish">
    <div class="success">恭喜您！所有程序安装成功！</div>
    <div class="success-tips">
    为了您的项目安全，强烈建议安装完成后立即将项目app目录下的“install”文件夹删除！如果中途要修改数据库相关配置，您可在：“项目名称/config/database.php”中按照说明进行修改。
    </div>
    <div class="links">
        <div class="title">相关介绍和文档：</div>
        <div class="content">
            <ul class="list">
                <li><span>WooCMS官方网站：</span><a href="https://www.eduaskcms.xin/" target="_blank">https://www.eduaskcms.xin/</a></li>
                <li><span>WooCMS建站手册：</span><a href="https://www.kancloud.cn/laowu199/e_use" target="_blank">https://www.kancloud.cn/laowu199/e_use</a></li>
                <li><span>WooCMS开发手册：</span><a href="https://www.kancloud.cn/laowu199/e_dev" target="_blank">https://www.kancloud.cn/laowu199/e_dev</a></li>
                <li><span>WooCMS后台培训：</span><a href="https://www.kancloud.cn/laowu199/e_manual" target="_blank">https://www.kancloud.cn/laowu199/e_manual</a></li>
                <li><span>ThinkPHP5.1完全开发手册：</span><a href="https://www.kancloud.cn/manual/thinkphp5_1" target="_blank">https://www.kancloud.cn/manual/thinkphp5_1</a></li>
                <li><span>WooCMS系统QQ交流群：</span><a href="//shang.qq.com/wpa/qunwpa?idkey=904af7a5d6b422b0fdc1cd04160b64b117fda091bf830b44d1cbd3b02f079e33" target="_blank">314833523</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="bottom-btns">
    <a href="<?php echo url('home/index/index');?>
" class="layui-btn">访问前台</a><a href="<?php echo url('run/index/index');?>
" class="layui-btn">访问后台</a>
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