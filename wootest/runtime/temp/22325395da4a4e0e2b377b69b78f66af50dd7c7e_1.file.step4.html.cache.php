<?php /* Smarty version 3.1.27, created on 2019-02-22 11:07:11
         compiled from "D:\phpStudy\WWW\wootest\app\install\view\Index\step4.html" */ ?>
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
  'unifunc' => 'content_5c6f675f399e43_03304454',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5c6f675f399e43_03304454')) {
function content_5c6f675f399e43_03304454 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '190895c6f675f2b3697_49490540';
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
$_smarty_tpl->properties['nocache_hash'] = '190895c6f675f2b3697_49490540';
?>

    
    <div class="wrap" id="install"> 
        <div class="header">
            <span>V<?php echo \woo\controller\WooApp::version();?>
</span>
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
<?php echo '<script'; ?>
>
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
        url: "<?php echo url('install/Index/install');?>
",
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
               insRslt.append('<li><i class="fa fa-remove"></i>'+data.msg+'<a href="<?php echo $_smarty_tpl->tpl_vars['absroot']->value;?>
?s=install" style="color:red;margin-left:10px;">重新安装</a></li>');
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
        url: "<?php echo url('install/Index/setDbConfig');?>
",
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
        url: "<?php echo url('install/Index/setAdminUser');?>
",
        type: 'GET',
        dataType: 'JSON',
        success: function (data) {
           if (data.code == 1) {
               insRslt.append('<li><i class="fa fa-check"></i>'+data.msg+'</li>');
               $('.bottom-btns').html('<i class="fa fa-check"></i>所有程序安装完成，页面即将跳转...');
               setTimeout(function () {
                    window.location = "<?php echo url('install/index/step5');?>
";
               }, 1000);
           } else {
               insRslt.append('<li><i class="fa fa-remove"></i>'+data.msg+'<br><pre>'+data.data.error+'</pre></li>');
           }
           $('#insLog').scrollTop(8888888);
        }
    })
}

<?php echo '</script'; ?>
>

    
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