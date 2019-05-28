<?php /* Smarty version 3.1.27, created on 2019-02-22 11:41:49
         compiled from "D:\phpStudy\WWW\wootest\app\run\view\Setting\set_success.html" */ ?>
<?php
/*%%SmartyHeaderCode:236995c6f6f7d6028c5_68056305%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5cf0aa059cb7689c05e19a0d14d6e8e7e956cdee' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\wootest\\app\\run\\view\\Setting\\set_success.html',
      1 => 1537157558,
      2 => 'file',
    ),
    '3f2e7451c347843a01f61619bfa03f50be4f4f78' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\wootest\\app\\run\\view\\global.html',
      1 => 1540132016,
      2 => 'file',
    ),
    'c1c01f5e102f22c163801659efb7486a031684e5' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\wootest\\app\\run\\view\\functions.html',
      1 => 1537157558,
      2 => 'file',
    ),
    '172c5b613299b1aba76dd36387ca3852f8fee4dc' => 
    array (
      0 => '172c5b613299b1aba76dd36387ca3852f8fee4dc',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '236995c6f6f7d6028c5_68056305',
  'variables' => 
  array (
    'is_response' => 0,
    'meta' => 0,
    'is_favicon' => 0,
    'root' => 0,
    'css' => 0,
    'html' => 0,
    'absroot' => 0,
    'params' => 0,
    'js' => 0,
    'deferJs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5c6f6f7d6cdaf0_58412921',
  'tpl_function' => 
  array (
    'url' => 
    array (
      'called_functions' => 
      array (
      ),
      'compiled_filepath' => 'D:\\phpStudy\\WWW\\wootest\\runtime\\temp\\5cf0aa059cb7689c05e19a0d14d6e8e7e956cdee_1.file.set_success.html.php',
      'uid' => 'c1c01f5e102f22c163801659efb7486a031684e5',
      'call_name' => 'smarty_template_function_url_69205c6f6f7d6587d1_18044800',
    ),
    'furl' => 
    array (
      'called_functions' => 
      array (
      ),
      'compiled_filepath' => 'D:\\phpStudy\\WWW\\wootest\\runtime\\temp\\5cf0aa059cb7689c05e19a0d14d6e8e7e956cdee_1.file.set_success.html.php',
      'uid' => 'c1c01f5e102f22c163801659efb7486a031684e5',
      'call_name' => 'smarty_template_function_furl_69205c6f6f7d6587d1_18044800',
    ),
    'menu_link' => 
    array (
      'called_functions' => 
      array (
      ),
      'compiled_filepath' => 'D:\\phpStudy\\WWW\\wootest\\runtime\\temp\\5cf0aa059cb7689c05e19a0d14d6e8e7e956cdee_1.file.set_success.html.php',
      'uid' => 'c1c01f5e102f22c163801659efb7486a031684e5',
      'call_name' => 'smarty_template_function_menu_link_69205c6f6f7d6587d1_18044800',
    ),
  ),
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5c6f6f7d6cdaf0_58412921')) {
function content_5c6f6f7d6cdaf0_58412921 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '236995c6f6f7d6028c5_68056305';
?>
<!DOCTYPE html>
<html lang="zh-cn" >
<head>
<?php $_smarty_tpl->tpl_vars['form'] = new Smarty_Variable(helper('Form'), null, 0);
$_smarty_tpl->tpl_vars['html'] = new Smarty_Variable(helper('Html'), null, 0);?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php if ($_smarty_tpl->tpl_vars['is_response']->value) {?>
<meta content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no" name="viewport"/>
<meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible"/>
<meta name="renderer" content="webkit"/>
<meta name="HandheldFriendly" content="true"/>
<meta name="format-detection" content="telephone=no, email=no" />
<?php }?>
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


<?php /*  Call merged included template "functions.html" */
echo $_smarty_tpl->getInlineSubTemplate('functions.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, '69205c6f6f7d6587d1_18044800', 'content_5c6f6f7d6587d7_70023043');
/*  End of included template "functions.html" */?>


</head>

<body>
<?php
$_smarty_tpl->properties['nocache_hash'] = '236995c6f6f7d6028c5_68056305';
?>

<div class="admin_message">
    <div class="notification success">
    	<div>设置成功</div>
    </div>
    
    <div class="redirect layui-btn-group">
        <a class="javascript redirect_selection  hidden layui-btn layui-btn layui-btn-danger" id="rs_close">关闭窗口</a>
        <a href="<?php echo url('lists',array('parent_id'=>$_smarty_tpl->tpl_vars['args']->value['parent_id']));?>
" id="rs_return" class="redirect_selection  layui-btn hidden layui-btn-normal layui-btn-danger">返回列表</a>
     </div>
    <?php $_smarty_tpl->tpl_vars['auto'] = new Smarty_Variable(3, null, 0);?>
    <?php if ($_smarty_tpl->tpl_vars['auto']->value) {?>
    <div class="count_down hidden">
    	系统将在<span id="count_down_count"><?php echo $_smarty_tpl->tpl_vars['auto']->value;?>
</span>秒后自动关闭窗口
    </div>
    
    <?php echo '<script'; ?>
>
    	var left_seconds=parseInt('<?php echo $_smarty_tpl->tpl_vars['auto']->value;?>
');
    	function count_down(){
    		if(left_seconds<0){
                $('#rs_close').trigger('click') ;
    			return;
    		}
    		$('#count_down_count').html(left_seconds--);
    		count_down.timeout=window.setTimeout(count_down,1000);
    	}
    	$(document).ready(function(){ count_down(); });
    	$('#cancel_count_down').click(function(){
    		window.clearTimeout(count_down.timeout);
    		$(this).parent().remove();
    	})
    	
    <?php echo '</script'; ?>
>
    <?php }?>
    <?php echo '<script'; ?>
 type="text/javascript">
    $(document).ready(function(){
        if(self != parent){            
            $('.count_down').show() ;
            $('#rs_close').css('display','inline-block').click(function(){
                //top.$('.layui-tab').find('.layui-tab-title li.layui-this .layui-tab-close').trigger('click');
                parent.layer.closeAll();
                parent.location.reload();
            }); 
        }else{
            $('#rs_return').css('display','inline-block');
        }
          
        
    })
    <?php echo '</script'; ?>
>
</div>

<?php if ($_smarty_tpl->tpl_vars['deferJs']->value) {?>
<?php echo $_smarty_tpl->tpl_vars['html']->value->script($_smarty_tpl->tpl_vars['deferJs']->value,true);?>

<?php }?>

</body>
</html><?php }
}
?><?php
/*%%SmartyHeaderCode:69205c6f6f7d6587d1_18044800%%*/
if ($_valid && !is_callable('content_5c6f6f7d6587d7_70023043')) {
function content_5c6f6f7d6587d7_70023043 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '69205c6f6f7d6587d1_18044800';
?>



<?php
/*/%%SmartyNocache:69205c6f6f7d6587d1_18044800%%*/
}
}
?><?php
/* smarty_template_function_url_69205c6f6f7d6587d1_18044800 */
if (!function_exists('smarty_template_function_url_69205c6f6f7d6587d1_18044800')) {
function smarty_template_function_url_69205c6f6f7d6587d1_18044800($_smarty_tpl,$params) {
$saved_tpl_vars = $_smarty_tpl->tpl_vars;
$params = array_merge(array('url'=>'','item'=>array()), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value);
}
if (is_array($_smarty_tpl->tpl_vars['url']->value)) {
if ($_smarty_tpl->tpl_vars['url']->value[1] && $_smarty_tpl->tpl_vars['url']->value['parse'] && $_smarty_tpl->tpl_vars['item']->value) {
$_from = $_smarty_tpl->tpl_vars['url']->value['parse'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['key']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value) {
$_smarty_tpl->tpl_vars['key']->_loop = true;
$foreach_key_Sav = $_smarty_tpl->tpl_vars['key'];
if (!$_smarty_tpl->tpl_vars['url']->value[1][$_smarty_tpl->tpl_vars['key']->value]) {?>continue<?php }
$_smarty_tpl->createLocalArrayVariable('url', null, 0);
$_smarty_tpl->tpl_vars['url']->value[1][$_smarty_tpl->tpl_vars['key']->value] = $_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->tpl_vars['url']->value[1][$_smarty_tpl->tpl_vars['key']->value]];
$_smarty_tpl->tpl_vars['key'] = $foreach_key_Sav;
}
}
echo url($_smarty_tpl->tpl_vars['url']->value[0],(($tmp = @$_smarty_tpl->tpl_vars['url']->value[1])===null||$tmp==='' ? array() : $tmp),(($tmp = @$_smarty_tpl->tpl_vars['url']->value[2])===null||$tmp==='' ? true : $tmp));
} else {
echo $_smarty_tpl->tpl_vars['url']->value;
}
foreach (Smarty::$global_tpl_vars as $key => $value){
if ($_smarty_tpl->tpl_vars[$key] === $value) $saved_tpl_vars[$key] = $value;
}
$_smarty_tpl->tpl_vars = $saved_tpl_vars;
}
}
/*/ smarty_template_function_url_69205c6f6f7d6587d1_18044800 */

?>
<?php
/* smarty_template_function_furl_69205c6f6f7d6587d1_18044800 */
if (!function_exists('smarty_template_function_furl_69205c6f6f7d6587d1_18044800')) {
function smarty_template_function_furl_69205c6f6f7d6587d1_18044800($_smarty_tpl,$params) {
$saved_tpl_vars = $_smarty_tpl->tpl_vars;
$params = array_merge(array('url'=>''), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value);
}
if ($_smarty_tpl->tpl_vars['url']->value) {
if (strpos($_smarty_tpl->tpl_vars['url']->value,'http://') === false && strpos($_smarty_tpl->tpl_vars['url']->value,'https://') === false) {
if ($_smarty_tpl->tpl_vars['url']->value[0] == '/') {
$_smarty_tpl->tpl_vars['url'] = new Smarty_Variable(substr($_smarty_tpl->tpl_vars['url']->value,1), null, 0);
}
$_smarty_tpl->tpl_vars['url'] = new Smarty_Variable(($_smarty_tpl->tpl_vars['root']->value).($_smarty_tpl->tpl_vars['url']->value), null, 0);
}
echo $_smarty_tpl->tpl_vars['url']->value;
}
foreach (Smarty::$global_tpl_vars as $key => $value){
if ($_smarty_tpl->tpl_vars[$key] === $value) $saved_tpl_vars[$key] = $value;
}
$_smarty_tpl->tpl_vars = $saved_tpl_vars;
}
}
/*/ smarty_template_function_furl_69205c6f6f7d6587d1_18044800 */

?>
<?php
/* smarty_template_function_menu_link_69205c6f6f7d6587d1_18044800 */
if (!function_exists('smarty_template_function_menu_link_69205c6f6f7d6587d1_18044800')) {
function smarty_template_function_menu_link_69205c6f6f7d6587d1_18044800($_smarty_tpl,$params) {
$saved_tpl_vars = $_smarty_tpl->tpl_vars;
$params = array_merge(array('id'=>0), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value);
}
$_smarty_tpl->tpl_vars['d_d'] = new Smarty_Variable(menu($_smarty_tpl->tpl_vars['id']->value), null, 0);
if (!$_smarty_tpl->tpl_vars['d_d']->value) {?>#<?php } else {
if ($_smarty_tpl->tpl_vars['d_d']->value['type'] == 'Exlink') {
$_smarty_tpl->callTemplateFunction ('furl', $_smarty_tpl, array('url'=>$_smarty_tpl->tpl_vars['d_d']->value['ex_link']), false);
} else {
$_smarty_tpl->tpl_vars['alias'] = new Smarty_Variable(trim(menu($_smarty_tpl->tpl_vars['id']->value,'alias')), null, 0);
if (!$_smarty_tpl->tpl_vars['alias']->value) {
echo url(($_smarty_tpl->tpl_vars['d_d']->value['type']).('/show'),array('menu_id'=>$_smarty_tpl->tpl_vars['id']->value));
} else {
echo $_smarty_tpl->tpl_vars['root']->value;
echo $_smarty_tpl->tpl_vars['alias']->value;?>
.<?php echo config('url_html_suffix');
}
}
}
foreach (Smarty::$global_tpl_vars as $key => $value){
if ($_smarty_tpl->tpl_vars[$key] === $value) $saved_tpl_vars[$key] = $value;
}
$_smarty_tpl->tpl_vars = $saved_tpl_vars;
}
}
/*/ smarty_template_function_menu_link_69205c6f6f7d6587d1_18044800 */

?>
