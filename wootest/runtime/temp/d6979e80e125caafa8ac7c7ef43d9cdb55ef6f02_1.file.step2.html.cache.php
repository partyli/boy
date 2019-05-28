<?php /* Smarty version 3.1.27, created on 2019-02-22 11:05:21
         compiled from "D:\phpStudy\WWW\wootest\app\install\view\Index\step2.html" */ ?>
<?php
/*%%SmartyHeaderCode:21815c6f66f1108774_97522141%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd6979e80e125caafa8ac7c7ef43d9cdb55ef6f02' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\wootest\\app\\install\\view\\Index\\step2.html',
      1 => 1542178922,
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
    '26333bc655a58ade700e4cb39e5f2350e23eec6c' => 
    array (
      0 => '26333bc655a58ade700e4cb39e5f2350e23eec6c',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '21815c6f66f1108774_97522141',
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
  'unifunc' => 'content_5c6f66f11b8413_20952690',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5c6f66f11b8413_20952690')) {
function content_5c6f66f11b8413_20952690 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '21815c6f66f1108774_97522141';
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
$_smarty_tpl->properties['nocache_hash'] = '21815c6f66f1108774_97522141';
?>

    
    <div class="wrap" id="install"> 
        <div class="header">
            <span>V<?php echo \woo\controller\WooApp::version();?>
</span>
            <h2  class="reset">WOOCMS安装向导</h2>
        </div>
        
        <div class="container">
    
    
<div class="steps">
    <ul class="grid">
        <li class="current">
            <span class="step">1</span>检测环境
        </li>
        <li>
            <span class="step">2</span>创建数据
        </li>
        <li>
            <span class="step">3</span>完成安装
        </li>
    </ul>
</div>
<div class="server">
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
            <th width="25%">环境检测</th>
            <th width="25%">推荐配置</th>
            <th width="25%">当前状态</th>
            <th>最低要求</th>
        </tr>
        <?php
$_from = $_smarty_tpl->tpl_vars['env']->value;
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
?>
        <?php if (isset($_smarty_tpl->tpl_vars['item']->value['is_title'])) {?>
        <tr>
            <th width="100%" colspan="4"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</th>
        </tr>
        <?php continue 1;?>
        <?php }?>
        <tr <?php if (isset($_smarty_tpl->tpl_vars['item']->value['id'])) {?>id="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"<?php }?>>
            <td><?php echo $_smarty_tpl->tpl_vars['item']->value[1];?>

                <?php if (isset($_smarty_tpl->tpl_vars['item']->value['link'])) {?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
" target="_blank"><i class="fa fa-question-circle"></i></a>
                <?php }?>
            </td>
            <td><?php echo $_smarty_tpl->tpl_vars['item']->value[2];?>
</td>
            <td>
            <?php if ($_smarty_tpl->tpl_vars['item']->value[3]) {?>
            <i class="fa fa-check"></i>
            <?php } else { ?>
            <i class="fa fa-remove"></i>
            <?php }?>
            <?php echo $_smarty_tpl->tpl_vars['item']->value[4];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['item']->value[5];?>
</td>
        </tr>
        <?php
$_smarty_tpl->tpl_vars['item'] = $foreach_item_Sav;
}
?>        
    </table>
    
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
            <th width="50%">目录、文件权限检查</th>
            <th>写入</th>
            <th>读取</th>
        </tr>
        <?php
$_from = $_smarty_tpl->tpl_vars['fresult']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['item']->_loop = false;
$_smarty_tpl->tpl_vars['dir'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['item']->total= $_smarty_tpl->_count($_from);
$_smarty_tpl->tpl_vars['item']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['dir']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$_smarty_tpl->tpl_vars['item']->iteration++;
$_smarty_tpl->tpl_vars['item']->last = $_smarty_tpl->tpl_vars['item']->iteration == $_smarty_tpl->tpl_vars['item']->total;
$foreach_item_Sav = $_smarty_tpl->tpl_vars['item'];
?>        
        <tr <?php if (isset($_smarty_tpl->tpl_vars['item']->value['id'])) {?>id="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"<?php }?>>
            <td><?php echo $_smarty_tpl->tpl_vars['dir']->value;?>
</td>
            <td><?php if ($_smarty_tpl->tpl_vars['item']->value['w']) {?><i class="fa fa-check"></i> 可写<?php } else { ?><i class="fa fa-remove"></i> 不可写<?php }?></td>            
            <td><?php if ($_smarty_tpl->tpl_vars['item']->value['r']) {?><i class="fa fa-check"></i> 可读<?php } else { ?><i class="fa fa-remove"></i> 不可读<?php }?></td>        
        </tr>
        <?php
$_smarty_tpl->tpl_vars['item'] = $foreach_item_Sav;
}
?>        
    </table>
    
</div>



<div class="bottom-btns">
    <a href="<?php echo $_smarty_tpl->tpl_vars['absroot']->value;?>
?s=install/index/step2" class="layui-btn">重新检测</a><a href="<?php echo url('install/index/step3');?>
" class="layui-btn" onclick="return checkError()">下一步 >></a>
</div>

<?php echo '<script'; ?>
>
var error_count = <?php echo $_smarty_tpl->tpl_vars['error_count']->value+1;?>
;
$.ajax({
    url: "<?php echo url('install/Index/testRewrite');?>
",
    type: 'GET',
    dataType: 'JSON',
    success: function (data) {
        if (data.result == 'success') {
            error_count--;
            $('#rewrite').find('td:eq(2)').html('<i class="fa fa-check"></i> 已开启');
        } else {
            $('#rewrite').find('td:eq(2)').html('<i class="fa fa-remove"></i> 失败，请console中查看');
            console.log('URL重写开启，但路由解析失败，根据经验请分别尝试下面情况处理；');
            console.log('1、请务必确保域名绑定到public目录下，而非项目根目录');
            console.log('2、Nginx服务器即使是本地开发，也建议采用绑定域名的方式开发，域名绑定到public下');
            console.log('3、Nginx服务器请确定是否配置URL重写，规则：https://www.kancloud.cn/manual/thinkphp5/177576');
            console.log('4、Apache服务器尝试更换“public/.htaccess”文件中另外一种URL重写规则');
            console.log('5、清空runtime目录！清空runtime目录！清空runtime目录！');
        }
    },
    error: function () {
        $('#rewrite').find('td:eq(2)').html('<i class="fa fa-remove"></i> 未开启');
    }
})

function checkError()
{
    if (error_count > 0) {
        layui.use('layer', function(){
          var layer = layui.layer;
          
          layer.alert('请先处理检测不通过的环境', {
             icon : 2
          });
        });              
        return false;
    } else {
        return true;
    }
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