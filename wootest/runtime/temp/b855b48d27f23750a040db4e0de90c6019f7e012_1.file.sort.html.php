<?php /* Smarty version 3.1.27, created on 2019-02-22 11:14:23
         compiled from "D:\phpStudy\WWW\wootest\app\run\view\sort.html" */ ?>
<?php
/*%%SmartyHeaderCode:148505c6f690f1fe934_33845408%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b855b48d27f23750a040db4e0de90c6019f7e012' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\wootest\\app\\run\\view\\sort.html',
      1 => 1538317724,
      2 => 'file',
    ),
    '6da1ec1ce1f6758b02ecb8ec81e264011fe02646' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\wootest\\app\\run\\view\\base.html',
      1 => 1539825038,
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
    'b72aae0f4140d5333b9b44ce08aa03413809eec3' => 
    array (
      0 => 'b72aae0f4140d5333b9b44ce08aa03413809eec3',
      1 => 0,
      2 => 'string',
    ),
    '77bdec59d3fd432b4943f5addd04092dd86fa03c' => 
    array (
      0 => '77bdec59d3fd432b4943f5addd04092dd86fa03c',
      1 => 0,
      2 => 'string',
    ),
    'd7e3651cfced06b1e896c67cce3c58ae7b5a1610' => 
    array (
      0 => 'd7e3651cfced06b1e896c67cce3c58ae7b5a1610',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '148505c6f690f1fe934_33845408',
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
  'unifunc' => 'content_5c6f690f293057_70583341',
  'tpl_function' => 
  array (
    'url' => 
    array (
      'called_functions' => 
      array (
      ),
      'compiled_filepath' => 'D:\\phpStudy\\WWW\\wootest\\runtime\\temp\\b855b48d27f23750a040db4e0de90c6019f7e012_1.file.sort.html.php',
      'uid' => 'c1c01f5e102f22c163801659efb7486a031684e5',
      'call_name' => 'smarty_template_function_url_296055c6f690f240fc8_04954427',
    ),
    'furl' => 
    array (
      'called_functions' => 
      array (
      ),
      'compiled_filepath' => 'D:\\phpStudy\\WWW\\wootest\\runtime\\temp\\b855b48d27f23750a040db4e0de90c6019f7e012_1.file.sort.html.php',
      'uid' => 'c1c01f5e102f22c163801659efb7486a031684e5',
      'call_name' => 'smarty_template_function_furl_296055c6f690f240fc8_04954427',
    ),
    'menu_link' => 
    array (
      'called_functions' => 
      array (
      ),
      'compiled_filepath' => 'D:\\phpStudy\\WWW\\wootest\\runtime\\temp\\b855b48d27f23750a040db4e0de90c6019f7e012_1.file.sort.html.php',
      'uid' => 'c1c01f5e102f22c163801659efb7486a031684e5',
      'call_name' => 'smarty_template_function_menu_link_296055c6f690f240fc8_04954427',
    ),
  ),
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5c6f690f293057_70583341')) {
function content_5c6f690f293057_70583341 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '148505c6f690f1fe934_33845408';
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
echo $_smarty_tpl->getInlineSubTemplate('functions.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, '296055c6f690f240fc8_04954427', 'content_5c6f690f240fc2_36080589');
/*  End of included template "functions.html" */?>

<?php
$_smarty_tpl->properties['nocache_hash'] = '148505c6f690f1fe934_33845408';
?>

<?php echo '<script'; ?>
 type="text/javascript">
var layer;
var is_layer_loading = <?php echo (($tmp = @setting('is_layer_loading'))===null||$tmp==='' ? 0 : $tmp);?>
;
$(function(){
    layui.use(['layer'], function(){
        layer = layui.layer;        
        layer.config({
            zIndex:10000
        });
        
        <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
          layer.msg('<?php echo $_smarty_tpl->tpl_vars['error']->value;?>
',{
            offset :['50px', '35%']
          });
        <?php }?>
    })
})

HKUC.ajax_request.defaultSuccessHandlers= {
    'success':function(rslt_msg,rslt_data){ 
       layer.alert(rslt_msg,{
            icon:1
        }); 
    },
    'error':function(rslt_msg,rslt_data){
        layer.alert(rslt_msg,{
            icon:2
        });                   
    },
    'nopower':function(msg,data){
        
        layer.alert(msg,{
            icon:2
        });
    }
};
HKUC.ajax_request.defaultErrorHandlers={
    403:function(text,rerun){
        layer.alert('登录超时，请刷新重新登录',{
            icon:2
        });
	},
    404:function(text,rerun){
        layer.alert('页面不存在',{
            icon:2
        });
    }
};

<?php echo '</script'; ?>
>


</head>

<body>
<?php
$_smarty_tpl->properties['nocache_hash'] = '148505c6f690f1fe934_33845408';
?>

<div class="admin_main">
    <div class="admin_header_fixed load-frame-hidden">
        <div class="admin_header clearfix">
            <div class="title"><i></i><?php echo $_smarty_tpl->tpl_vars['title']->value['operation'];
if ($_smarty_tpl->tpl_vars['parent_info']->value) {?><a class="parent_info" href="<?php echo url((($_smarty_tpl->tpl_vars['params']->value['controller']).('/')).('lists'),array_merge($_smarty_tpl->tpl_vars['args']->value,array('parent_id'=>null)));?>
">所属<?php echo $_smarty_tpl->tpl_vars['parent_info']->value['cname'];?>
：<?php echo $_smarty_tpl->tpl_vars['parent_info']->value['title'];?>
</a><?php }?></div>
            <?php if ($_smarty_tpl->tpl_vars['actions']->value) {?>
    		<div class="action">
                <b></b>
                <div class="layui-btn-group">
    			<?php
$_from = $_smarty_tpl->tpl_vars['actions']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['item']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$foreach_item_Sav = $_smarty_tpl->tpl_vars['item'];
if (!$_smarty_tpl->tpl_vars['item']->value) {
continue 1;
}?><a class="layui-btn  layui-btn-sm  layui-btn-shadow <?php echo $_smarty_tpl->tpl_vars['item']->value['class'];?>
 <?php if (strpos($_smarty_tpl->tpl_vars['item']->value['class'],'layui-btn') === false) {?>layui-btn-primary<?php }?>" href="<?php $_smarty_tpl->callTemplateFunction ('url', $_smarty_tpl, array('url'=>$_smarty_tpl->tpl_vars['item']->value['url']), true);?>
"><i class="fa <?php echo $_smarty_tpl->tpl_vars['item']->value['icon'];?>
"></i> <?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a><?php
$_smarty_tpl->tpl_vars['item'] = $foreach_item_Sav;
}
?>
                </div>
            </div>
    		<?php }?>
        </div>
    </div>
    <div class="admin_base">
    
<div class="box_sort">
    <div class="box_content">
        <ul id="sortable" class="list">
            <?php
$_from = $_smarty_tpl->tpl_vars['list']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['item']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$foreach_item_Sav = $_smarty_tpl->tpl_vars['item'];
?>
            <li class="ui-state-default clearfix">
                <table width="100%" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                        <td class="sort_left"><a rel="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
<span class="em">:)</span><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a></td>
                        <td class="sort_rght">
                        <?php if ($_smarty_tpl->tpl_vars['item']->value['image']) {?>
                        <img  src="<?php echo $_smarty_tpl->tpl_vars['root']->value;
echo (($tmp = @$_smarty_tpl->tpl_vars['item']->value['thumb'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['item']->value['image'] : $tmp);?>
" alt="" />
                        <?php }?>
                        </td>
                    </tr>
                </table>
            </li>
            <?php
$_smarty_tpl->tpl_vars['item'] = $foreach_item_Sav;
}
?>
        </ul>
        <form method="post" onsubmit="return order_submit()">
            <input name="data[order]" type="hidden" />
            <div style="text-align: center;padding-top: 15px;" class="load-frame-hidden">
                <input  type="submit" class="layui-btn" value="提交"/>
            </div>
        </form>
    </div>
</div>


    </div>
    <div class="admin_bottom">
    
    </div>
</div>


<?php if ($_smarty_tpl->tpl_vars['deferJs']->value) {?>
<?php echo $_smarty_tpl->tpl_vars['html']->value->script($_smarty_tpl->tpl_vars['deferJs']->value,true);?>

<?php }?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '148505c6f690f1fe934_33845408';
?>


<?php echo '<script'; ?>
 type="text/javascript">
$( "#sortable" ).sortable({
	placeholder: "ui-state-highlight"
});
$( "#sortable" ).disableSelection();

function order_submit(){
    
    var order_arr=[];
	$('li.ui-state-default').each(function(){
		order_arr.push($(this).find('a').attr('rel'));
	})
	$('input[name="data[order]"]').val(order_arr.join(','));
	return true;
}

<?php echo '</script'; ?>
>


</body>
</html><?php }
}
?><?php
/*%%SmartyHeaderCode:296055c6f690f240fc8_04954427%%*/
if ($_valid && !is_callable('content_5c6f690f240fc2_36080589')) {
function content_5c6f690f240fc2_36080589 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '296055c6f690f240fc8_04954427';
?>



<?php
/*/%%SmartyNocache:296055c6f690f240fc8_04954427%%*/
}
}
?><?php
/* smarty_template_function_url_296055c6f690f240fc8_04954427 */
if (!function_exists('smarty_template_function_url_296055c6f690f240fc8_04954427')) {
function smarty_template_function_url_296055c6f690f240fc8_04954427($_smarty_tpl,$params) {
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
/*/ smarty_template_function_url_296055c6f690f240fc8_04954427 */

?>
<?php
/* smarty_template_function_furl_296055c6f690f240fc8_04954427 */
if (!function_exists('smarty_template_function_furl_296055c6f690f240fc8_04954427')) {
function smarty_template_function_furl_296055c6f690f240fc8_04954427($_smarty_tpl,$params) {
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
/*/ smarty_template_function_furl_296055c6f690f240fc8_04954427 */

?>
<?php
/* smarty_template_function_menu_link_296055c6f690f240fc8_04954427 */
if (!function_exists('smarty_template_function_menu_link_296055c6f690f240fc8_04954427')) {
function smarty_template_function_menu_link_296055c6f690f240fc8_04954427($_smarty_tpl,$params) {
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
/*/ smarty_template_function_menu_link_296055c6f690f240fc8_04954427 */

?>
