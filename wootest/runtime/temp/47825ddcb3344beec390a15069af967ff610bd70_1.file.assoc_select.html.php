<?php /* Smarty version 3.1.27, created on 2019-02-22 11:53:00
         compiled from "D:\phpStudy\WWW\wootest\app\run\view\Common\assoc_select.html" */ ?>
<?php
/*%%SmartyHeaderCode:205255c6f721c69c616_00915993%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '47825ddcb3344beec390a15069af967ff610bd70' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\wootest\\app\\run\\view\\Common\\assoc_select.html',
      1 => 1541172270,
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
    '8e9b4863b3475df18985b791e0be8a5c35413dc6' => 
    array (
      0 => '8e9b4863b3475df18985b791e0be8a5c35413dc6',
      1 => 0,
      2 => 'string',
    ),
    'd8f237db59f57a4d8ac039a95226a923adddb0ac' => 
    array (
      0 => 'd8f237db59f57a4d8ac039a95226a923adddb0ac',
      1 => 0,
      2 => 'string',
    ),
    'b6479d1439a57979b02dd57b4c3d88a78828770b' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\wootest\\app\\run\\view\\Common\\nice_pageination.html',
      1 => 1537157558,
      2 => 'file',
    ),
    '2822578dfa57b183ca0b0228a259438baeccaf15' => 
    array (
      0 => '2822578dfa57b183ca0b0228a259438baeccaf15',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '205255c6f721c69c616_00915993',
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
  'unifunc' => 'content_5c6f721c76b6c7_71282156',
  'tpl_function' => 
  array (
    'url' => 
    array (
      'called_functions' => 
      array (
      ),
      'compiled_filepath' => 'D:\\phpStudy\\WWW\\wootest\\runtime\\temp\\47825ddcb3344beec390a15069af967ff610bd70_1.file.assoc_select.html.php',
      'uid' => 'c1c01f5e102f22c163801659efb7486a031684e5',
      'call_name' => 'smarty_template_function_url_145005c6f721c709c35_94269367',
    ),
    'furl' => 
    array (
      'called_functions' => 
      array (
      ),
      'compiled_filepath' => 'D:\\phpStudy\\WWW\\wootest\\runtime\\temp\\47825ddcb3344beec390a15069af967ff610bd70_1.file.assoc_select.html.php',
      'uid' => 'c1c01f5e102f22c163801659efb7486a031684e5',
      'call_name' => 'smarty_template_function_furl_145005c6f721c709c35_94269367',
    ),
    'menu_link' => 
    array (
      'called_functions' => 
      array (
      ),
      'compiled_filepath' => 'D:\\phpStudy\\WWW\\wootest\\runtime\\temp\\47825ddcb3344beec390a15069af967ff610bd70_1.file.assoc_select.html.php',
      'uid' => 'c1c01f5e102f22c163801659efb7486a031684e5',
      'call_name' => 'smarty_template_function_menu_link_145005c6f721c709c35_94269367',
    ),
  ),
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5c6f721c76b6c7_71282156')) {
function content_5c6f721c76b6c7_71282156 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '205255c6f721c69c616_00915993';
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
echo $_smarty_tpl->getInlineSubTemplate('functions.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, '145005c6f721c709c35_94269367', 'content_5c6f721c709c30_93057609');
/*  End of included template "functions.html" */?>

<?php
$_smarty_tpl->properties['nocache_hash'] = '205255c6f721c69c616_00915993';
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
$_smarty_tpl->properties['nocache_hash'] = '205255c6f721c69c616_00915993';
?>

<div class="assoc_load">
    <div class="assoc_load_box">
        <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
        <div class="error"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
关联条件配置错误</div>
        <?php }?>
        <div class="search clearfix">
            <input type="text" placeholder="输入搜索关键词" class="layui-input" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['keyword'];?>
"/><a href="<?php echo url('assocSelect',array('assoc'=>$_smarty_tpl->tpl_vars['info']->value['assoc'],'keyword'=>'KEY_WORD_HOLDER'));?>
" rel="assoc_select_load_search"  class="javascript assoc_select_search layui-btn">搜索</a>
        </div>
        <?php if ($_smarty_tpl->tpl_vars['list']->value) {?>
        <div>
            <table class="layui-table">
                <colgroup>
                    <col width="20%">
                </colgroup>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th><?php echo $_smarty_tpl->tpl_vars['info']->value['name'];?>
</th>
                        <th class="action">操作</th>
                    </tr> 
                </thead>
                <tbody>
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
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->tpl_vars['info']->value['field']];?>
</td>
                        <td class="action"><a href="javascript:void(0);" data-value="<?php echo $_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->tpl_vars['info']->value['field']];?>
" rel="assoc_selected" data-id="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"  class="layui-btn javascript  layui-btn-sm">选择</a></td>
                    </tr>
                    <?php
$_smarty_tpl->tpl_vars['item'] = $foreach_item_Sav;
}
?>
                </tbody>
            </table>
        </div>
        <div class="pagination">
        <?php /*  Call merged included template "./nice_pageination.html" */
echo $_smarty_tpl->getInlineSubTemplate("./nice_pageination.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('noinfo'=>true), 0, '185115c6f721c748434_06583339', 'content_5c6f721c748433_04124412');
/*  End of included template "./nice_pageination.html" */?>

        </div>
        <?php } else { ?>
        <div class="no_list">没有搜索到关联数据</div>
        <?php }?>
    </div>
</div>

<?php if ($_smarty_tpl->tpl_vars['deferJs']->value) {?>
<?php echo $_smarty_tpl->tpl_vars['html']->value->script($_smarty_tpl->tpl_vars['deferJs']->value,true);?>

<?php }?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '205255c6f721c69c616_00915993';
?>



</body>
</html><?php }
}
?><?php
/*%%SmartyHeaderCode:145005c6f721c709c35_94269367%%*/
if ($_valid && !is_callable('content_5c6f721c709c30_93057609')) {
function content_5c6f721c709c30_93057609 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '145005c6f721c709c35_94269367';
?>



<?php
/*/%%SmartyNocache:145005c6f721c709c35_94269367%%*/
}
}
?><?php
/*%%SmartyHeaderCode:185115c6f721c748434_06583339%%*/
if ($_valid && !is_callable('content_5c6f721c748433_04124412')) {
function content_5c6f721c748433_04124412 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '185115c6f721c748434_06583339';
?>
<div class="nice_pageination clearfix">
    <table cellspacing="0" cellpadding="0" border="0" >
        <tr>
            <td><a <?php $_smarty_tpl->tpl_vars['local_page'] = new Smarty_Variable(false, null, 0);
if ($_smarty_tpl->tpl_vars['page']->value['current_page'] > 1) {
$_smarty_tpl->tpl_vars['local_page'] = new Smarty_Variable(true, null, 0);
}?> <?php if ($_smarty_tpl->tpl_vars['local_page']->value) {?>href="<?php echo U($_smarty_tpl->tpl_vars['args']->value,array('page'=>1));?>
" data-tip-type="1" data-tip-text="首页" <?php } else { ?>href="javascript:void(0);"<?php }?> class="prev-first-page nice-link <?php if (!$_smarty_tpl->tpl_vars['local_page']->value) {?>disabled-link<?php } else { ?>tooltip<?php }?>"><span><i></i></span></a></td>
            <td><a <?php $_smarty_tpl->tpl_vars['local_page'] = new Smarty_Variable(false, null, 0);
if ($_smarty_tpl->tpl_vars['page']->value['current_page'] > 1) {
$_smarty_tpl->tpl_vars['local_page'] = new Smarty_Variable(true, null, 0);
}?> <?php if ($_smarty_tpl->tpl_vars['local_page']->value) {?>href="<?php echo U($_smarty_tpl->tpl_vars['args']->value,array('page'=>$_smarty_tpl->tpl_vars['page']->value['current_page']-1));?>
" data-tip-type="1" data-tip-text="上页" <?php } else { ?>href="javascript:void(0);"<?php }?> class="prev-page nice-link <?php if (!$_smarty_tpl->tpl_vars['local_page']->value) {?>disabled-link<?php } else { ?>tooltip<?php }?>"><span><i></i></span></a></td>
            <td><div class="separator mr"></div></td>
            <td><span>第</span></td>
            <td>  
                <?php if (!isset($_smarty_tpl->tpl_vars['noinfo']->value)) {?>     
                <input id="goPage" size="2" <?php if ($_smarty_tpl->tpl_vars['page']->value['current_page']) {?>value="<?php echo $_smarty_tpl->tpl_vars['page']->value['current_page'];?>
"<?php } else { ?>value="0"<?php }?> max="<?php echo $_smarty_tpl->tpl_vars['page']->value['last_page'];?>
"/><?php echo $_smarty_tpl->tpl_vars['page']->value[$_smarty_tpl->tpl_vars['mdl']->value]['page'];?>
页
                <?php } else { ?>
                <?php echo $_smarty_tpl->tpl_vars['page']->value['current_page'];?>

                <?php }?>
            </td>
            <td>共<?php echo $_smarty_tpl->tpl_vars['page']->value['last_page'];?>
页</td>
            <td><div class="separator ml"></div></td>
            <td><a <?php $_smarty_tpl->tpl_vars['local_page'] = new Smarty_Variable(false, null, 0);
if ($_smarty_tpl->tpl_vars['page']->value['current_page'] < $_smarty_tpl->tpl_vars['page']->value['last_page']) {
$_smarty_tpl->tpl_vars['local_page'] = new Smarty_Variable(true, null, 0);
}?> <?php if ($_smarty_tpl->tpl_vars['local_page']->value) {?>href="<?php echo U($_smarty_tpl->tpl_vars['args']->value,array('page'=>$_smarty_tpl->tpl_vars['page']->value['current_page']+1));?>
" data-tip-type="1" data-tip-text="下页" <?php } else { ?>href="javascript:void(0);"<?php }?> class="next-page nice-link <?php if (!$_smarty_tpl->tpl_vars['local_page']->value) {?>disabled-link<?php } else { ?>tooltip<?php }?>"><span><i></i></span></a></td>
            <td><a <?php $_smarty_tpl->tpl_vars['local_page'] = new Smarty_Variable(false, null, 0);
if ($_smarty_tpl->tpl_vars['page']->value['current_page'] < $_smarty_tpl->tpl_vars['page']->value['last_page']) {
$_smarty_tpl->tpl_vars['local_page'] = new Smarty_Variable(true, null, 0);
}?> <?php if ($_smarty_tpl->tpl_vars['local_page']->value) {?>href="<?php echo U($_smarty_tpl->tpl_vars['args']->value,array('page'=>$_smarty_tpl->tpl_vars['page']->value['last_page']));?>
" data-tip-type="1" data-tip-text="尾页" <?php } else { ?>href="javascript:void(0);"<?php }?> class="next-last-page nice-link <?php if (!$_smarty_tpl->tpl_vars['local_page']->value) {?>disabled-link<?php } else { ?>tooltip<?php }?>"><span><i></i></span></a></td>
            <td><div class="separator"></div></td>
            <?php if (!isset($_smarty_tpl->tpl_vars['noinfo']->value)) {?> 
            <td><a href="javascript:void(0);" class="page-refresh nice-link tooltip" data-tip-text="刷新" data-tip-type="1" style="display: none;"><span><i></i></span></a></td>
            <?php }?>
        </tr>
    </table>
    <?php if ($_smarty_tpl->tpl_vars['page']->value['total']) {?>
            <?php $_smarty_tpl->tpl_vars['page_form'] = new Smarty_Variable(($_smarty_tpl->tpl_vars['page']->value['current_page']-1)*$_smarty_tpl->tpl_vars['page']->value['per_page']+1, null, 0);?>
            <?php $_smarty_tpl->tpl_vars['page_to'] = new Smarty_Variable($_smarty_tpl->tpl_vars['page_form']->value+$_smarty_tpl->tpl_vars['page']->value['per_page']-1, null, 0);?>
        <?php } else { ?>
            <?php $_smarty_tpl->tpl_vars['page_form'] = new Smarty_Variable(0, null, 0);?>
            <?php $_smarty_tpl->tpl_vars['page_to'] = new Smarty_Variable(0, null, 0);?>
    <?php }?>
    
    <?php if (!isset($_smarty_tpl->tpl_vars['noinfo']->value)) {?>
    <?php if ($_smarty_tpl->tpl_vars['page_to']->value > $_smarty_tpl->tpl_vars['page']->value['total']) {?>
        <?php $_smarty_tpl->tpl_vars['page_to'] = new Smarty_Variable($_smarty_tpl->tpl_vars['page']->value['total'], null, 0);?>
    <?php }?> 
    <div class="pageination-info" <?php if (config('app_trace')) {?>style="margin-right: 100px;"<?php }?>>显示<?php echo $_smarty_tpl->tpl_vars['page_form']->value;?>
到<?php echo $_smarty_tpl->tpl_vars['page_to']->value;?>
,共<?php echo $_smarty_tpl->tpl_vars['page']->value['total'];?>
记录</div> 
    <?php }?>
</div>
<?php echo '<script'; ?>
>
function goto_to_page(){
    var page_num = $('#goPage').val();
    var url ="<?php echo U(array_merge(array('action'=>$_smarty_tpl->tpl_vars['params']->value['action']),$_smarty_tpl->tpl_vars['args']->value),array('page'=>'REPLACE_URL'));?>
";
    location.href   = url.replace('REPLACE_URL',page_num) ;
}

$('#goPage').keydown(function(event){
	if(event.keyCode==13){
		goto_to_page();
		return false;
	}
}).blur(function(){
   var val = $(this).val() ;
   var page = <?php echo $_smarty_tpl->tpl_vars['page']->value['current_page'];?>
;
   if(val != page)goto_to_page();
})

$('#goPage').keyup(function(){
    var max_page=parseInt($('#goPage').attr('max'));
    var target_page=$('#goPage').val();
    if(!/\d{1,}/.test(target_page)){
        target_page  = 1;
    }else{
        target_page=parseInt(target_page);
    }
    if(target_page>max_page)target_page=max_page;
    $('#goPage').val(target_page);
})

$('.nice_pageination .page-refresh').click(function(){
    $(this).remove();
    location.reload();
})


setTimeout(function(){
    $('.nice_pageination .page-refresh').fadeIn(300) ;
},2000)
<?php echo '</script'; ?>
><?php
/*/%%SmartyNocache:185115c6f721c748434_06583339%%*/
}
}
?><?php
/* smarty_template_function_url_145005c6f721c709c35_94269367 */
if (!function_exists('smarty_template_function_url_145005c6f721c709c35_94269367')) {
function smarty_template_function_url_145005c6f721c709c35_94269367($_smarty_tpl,$params) {
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
/*/ smarty_template_function_url_145005c6f721c709c35_94269367 */

?>
<?php
/* smarty_template_function_furl_145005c6f721c709c35_94269367 */
if (!function_exists('smarty_template_function_furl_145005c6f721c709c35_94269367')) {
function smarty_template_function_furl_145005c6f721c709c35_94269367($_smarty_tpl,$params) {
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
/*/ smarty_template_function_furl_145005c6f721c709c35_94269367 */

?>
<?php
/* smarty_template_function_menu_link_145005c6f721c709c35_94269367 */
if (!function_exists('smarty_template_function_menu_link_145005c6f721c709c35_94269367')) {
function smarty_template_function_menu_link_145005c6f721c709c35_94269367($_smarty_tpl,$params) {
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
/*/ smarty_template_function_menu_link_145005c6f721c709c35_94269367 */

?>
