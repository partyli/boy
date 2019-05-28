<?php /* Smarty version 3.1.27, created on 2019-02-22 11:41:32
         compiled from "D:\phpStudy\WWW\wootest\app\run\view\Setting\set.html" */ ?>
<?php
/*%%SmartyHeaderCode:309155c6f6f6c068fa6_58755939%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '64996eaca592a74a6f4183e6003f7467cd8d9415' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\wootest\\app\\run\\view\\Setting\\set.html',
      1 => 1538544416,
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
    '7cd256c6e129e53729b9bcfe03552c2e1a328aa9' => 
    array (
      0 => '7cd256c6e129e53729b9bcfe03552c2e1a328aa9',
      1 => 0,
      2 => 'string',
    ),
    '761c919504b3742e6d8b64f18a5f442a7174a33d' => 
    array (
      0 => '761c919504b3742e6d8b64f18a5f442a7174a33d',
      1 => 0,
      2 => 'string',
    ),
    '0af8e64acfe5f54cd22576de765a575c63fac7b7' => 
    array (
      0 => '0af8e64acfe5f54cd22576de765a575c63fac7b7',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '309155c6f6f6c068fa6_58755939',
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
  'unifunc' => 'content_5c6f6f6c28fca1_76029741',
  'tpl_function' => 
  array (
    'url' => 
    array (
      'called_functions' => 
      array (
      ),
      'compiled_filepath' => 'D:\\phpStudy\\WWW\\wootest\\runtime\\temp\\64996eaca592a74a6f4183e6003f7467cd8d9415_1.file.set.html.php',
      'uid' => 'c1c01f5e102f22c163801659efb7486a031684e5',
      'call_name' => 'smarty_template_function_url_184495c6f6f6c17a6e6_47985359',
    ),
    'furl' => 
    array (
      'called_functions' => 
      array (
      ),
      'compiled_filepath' => 'D:\\phpStudy\\WWW\\wootest\\runtime\\temp\\64996eaca592a74a6f4183e6003f7467cd8d9415_1.file.set.html.php',
      'uid' => 'c1c01f5e102f22c163801659efb7486a031684e5',
      'call_name' => 'smarty_template_function_furl_184495c6f6f6c17a6e6_47985359',
    ),
    'menu_link' => 
    array (
      'called_functions' => 
      array (
      ),
      'compiled_filepath' => 'D:\\phpStudy\\WWW\\wootest\\runtime\\temp\\64996eaca592a74a6f4183e6003f7467cd8d9415_1.file.set.html.php',
      'uid' => 'c1c01f5e102f22c163801659efb7486a031684e5',
      'call_name' => 'smarty_template_function_menu_link_184495c6f6f6c17a6e6_47985359',
    ),
  ),
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5c6f6f6c28fca1_76029741')) {
function content_5c6f6f6c28fca1_76029741 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_parse_json')) require_once 'D:\\phpStudy\\WWW\\wootest\\include\\smarty-3.1.27\\libs\\plugins\\modifier.parse_json.php';

$_smarty_tpl->properties['nocache_hash'] = '309155c6f6f6c068fa6_58755939';
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
echo $_smarty_tpl->getInlineSubTemplate('functions.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, '184495c6f6f6c17a6e6_47985359', 'content_5c6f6f6c17a6e1_99793291');
/*  End of included template "functions.html" */?>

<?php
$_smarty_tpl->properties['nocache_hash'] = '309155c6f6f6c068fa6_58755939';
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
$_smarty_tpl->properties['nocache_hash'] = '309155c6f6f6c068fa6_58755939';
?>

<form id="prompt_form" method="post" enctype="multipart/form-data" class="layui-form layui-form-pane box_form">
<div class="layui-form-item form-item-<?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['mdl']->value]['type'];?>
" >
<label class="layui-form-label"><?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['mdl']->value]['title'];?>
：</label>
<div class="layui-input-inline">
<?php if ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['mdl']->value]['type'] == 'text') {?>
	<?php echo $_smarty_tpl->tpl_vars['form']->value->text(((string)$_smarty_tpl->tpl_vars['mdl']->value).".value",array('class'=>'layui-input text-input medium-input'));?>

<?php } elseif ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['mdl']->value]['type'] == 'password') {?>
	<?php echo $_smarty_tpl->tpl_vars['form']->value->password(((string)$_smarty_tpl->tpl_vars['mdl']->value).".value",array('class'=>'layui-input text-input medium-input'));?>

<?php } elseif ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['mdl']->value]['type'] == 'textarea') {?>
	<?php echo $_smarty_tpl->tpl_vars['form']->value->textarea(((string)$_smarty_tpl->tpl_vars['mdl']->value).".value",array('class'=>'layui-textarea text-input textarea'));?>

<?php } elseif ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['mdl']->value]['type'] == 'color') {?>
	<?php $_smarty_tpl->createLocalArrayVariable('local', null, 0);
$_smarty_tpl->tpl_vars['local']->value['val'] = $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['mdl']->value]['value'];?>
    <div class="colorBox">
        <?php echo $_smarty_tpl->tpl_vars['form']->value->hidden(((string)$_smarty_tpl->tpl_vars['mdl']->value).".value",array('class'=>'color'));?>

        <div class="color color_<?php echo $_smarty_tpl->tpl_vars['field']->value;?>
" style="<?php if ($_smarty_tpl->tpl_vars['local']->value['val']) {?>background-color:<?php echo $_smarty_tpl->tpl_vars['local']->value['val'];?>
;<?php }?>"></div>
    </div>
    <?php echo '<script'; ?>
 type="text/javascript">
    $('.color_<?php echo $_smarty_tpl->tpl_vars['field']->value;?>
').ColorPicker({
        onShow : function(colpkr){
            $(colpkr).stop(true,true).fadeIn(500);
            var color  = $('.color_<?php echo $_smarty_tpl->tpl_vars['field']->value;?>
').parent().find('input').val();
            if(color)  $('.color_<?php echo $_smarty_tpl->tpl_vars['field']->value;?>
').ColorPickerSetColor(color);
            return false;
        },
        onHide: function (colpkr) {
    		$(colpkr).stop(true,true).fadeOut(500);
    		return false;
    	},
        onChange : function(hsb, hex, rgb){
            $('.color_<?php echo $_smarty_tpl->tpl_vars['field']->value;?>
').css('background-color', '#' + hex).parent().find('input').val('#' + hex) ;
        }
    });
    <?php echo '</script'; ?>
> 
<?php } elseif ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['mdl']->value]['type'] == 'file') {?>
    <?php if (!addon_exists('woofinder',true)) {
echo $_smarty_tpl->tpl_vars['form']->value->text(((string)$_smarty_tpl->tpl_vars['mdl']->value).".value",array('class'=>'layui-input text-input medium-input readonly','readonly'=>true));
}?>
    <div class="clearfix">
        <?php if (addon_exists('woofinder',true)) {?>
        <div class="show-select-file">
            <?php ob_start();
echo parse_name((((($_smarty_tpl->tpl_vars['mdl']->value).('_')).('value')).('_')).('name_show'),1);
$_tmp1=ob_get_clean();
echo $_smarty_tpl->tpl_vars['form']->value->text(((string)$_smarty_tpl->tpl_vars['mdl']->value).".value",array('class'=>'layui-input text-input form_item readonly','readonly'=>true,'id'=>$_tmp1));?>

            <a class="javascript layui-btn" rev="<?php echo parse_name((((($_smarty_tpl->tpl_vars['mdl']->value).('_')).('value')).('_')).('name_show'),1);?>
" href="<?php echo addon_url('woofinder/index/index',array('model'=>$_smarty_tpl->tpl_vars['mdl']->value));?>
" rel="ckeditor_select">选择文件</a>
        </div>
        <?php }?>
        <a href="javascript:void(0);" class="upload_elem_box">
            <?php echo $_smarty_tpl->tpl_vars['form']->value->file("Setting.upload.value",array('class'=>'form_upload'));?>

            <i class="fa fa-cloud-upload fa-lg"></i>文件上传
        </a><span class="upload_elem_info"></span>
    </div> 
<?php } elseif ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['mdl']->value]['type'] == 'checkbox') {?>
    <?php echo $_smarty_tpl->tpl_vars['form']->value->checkbox(((string)$_smarty_tpl->tpl_vars['mdl']->value).".value",smarty_modifier_parse_json($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['mdl']->value]['options']),array('div'=>false,'lay-skin'=>'primary'));?>

<?php } elseif ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['mdl']->value]['type'] == 'radio') {?>
    <?php echo $_smarty_tpl->tpl_vars['form']->value->radio(((string)$_smarty_tpl->tpl_vars['mdl']->value).".value",smarty_modifier_parse_json($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['mdl']->value]['options']),array('class'=>'form_item','label'=>false,'title'=>true,'notext'=>true));?>

<?php } elseif ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['mdl']->value]['type'] == 'select') {?>
    <?php echo $_smarty_tpl->tpl_vars['form']->value->select(((string)$_smarty_tpl->tpl_vars['mdl']->value).".value",smarty_modifier_parse_json($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['mdl']->value]['options']),array('class'=>'form_item','multiple'=>$_smarty_tpl->tpl_vars['col']->value['multiple'],'lay-search'=>'','empty'=>"≡请选择≡"));?>

<?php } elseif ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['mdl']->value]['type'] == 'checker') {?>
    <?php echo $_smarty_tpl->tpl_vars['form']->value->checkbox(((string)$_smarty_tpl->tpl_vars['mdl']->value).".value",array(),array('class'=>"form_item",'lay-skin'=>'switch'));?>

<?php } elseif ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['mdl']->value]['type'] == 'array') {?>
<?php echo $_smarty_tpl->tpl_vars['form']->value->hidden(((string)$_smarty_tpl->tpl_vars['mdl']->value).".value",array('class'=>'form_item'));?>

<div class="array">
   
</div>
<a class="javascript edit_array layui-btn" rel="edit_array" >编辑</a>
<?php } elseif ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['mdl']->value]['type'] == 'keyvalue') {?>
<?php echo $_smarty_tpl->tpl_vars['form']->value->hidden(((string)$_smarty_tpl->tpl_vars['mdl']->value).".value",array('class'=>'form_item'));?>

<div class="array">
    
</div>
<a class="javascript edit_array  layui-btn  keyvalue" rel="edit_array" >编辑</a>
<?php }?>
</div>

</div>
<?php if ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['mdl']->value]['info']) {?>
<div class="setting_info" style="color: #666;margin-bottom: 15px;"><em><?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['mdl']->value]['info'];?>
</em></div>
<?php }?>
<div class="layui-form-item form-item-btns">
<div class="layui-input-inline">
  <button class="layui-btn layui-btn-normal" lay-submit >确定</button>
</div>
</div>
</form>
<?php echo '<script'; ?>
>
layui.use(['form','element','layer'], function(){
    var form = layui.form;
});
$('.form_upload').change(function(){
    $(this).closest('div').find('.upload_elem_info').html('新文件：'+$(this).val()).css('display','block') ;
})

if(typeof(TPL) != 'undefined'){

//
	TPL.show_array=function(){/*
<table cellspacing="1" cellpadding="0" border="0" style="width:auto">
	{each $value as $p_val $p_index}
	<tr><td align="right" style=" border:0; padding:3px;">{$p_index}.</td><td style="border:0; padding:3px;">=></td><td style="border:0; padding:3px;{if $p_val===''}background:#039; color:#fff;{else}background:#f3f3f3;{/if}" align="left">{if $p_val===''}空{else}{$p_val}{/if}</td></tr>
	{/each}
</table>
*/}
	TPL.show_keyvalue=function(){/*
<table cellspacing="1" cellpadding="0" border="0" style="width:auto">
	{each $value as $p_val $p_key}
	<tr><td align="right" style="border:0; padding:3px;{if $p_key===''}background:#039; color:#fff;{else}background:#f3f3f3;{/if}">{if $p_key===''}空{else}{$p_key}{/if}</td><td  style="border:0; padding:3px;">=></td><td style="border:0; padding:3px;{if $p_val===''}background:#039; color:#fff;{else}background:#f3f3f3;{/if}" align="left">{if $p_val===''}空{else}{$p_val}{/if}</td></tr>
	{/each}
</table>
*/}
	
	TPL.edit_array=function(){/*
<div class="edit_array">
	<div class="copy_template" style="display:none;">
		<div class="array_item">
		<div class="array_item">
		<table class="form_item" border="0" cellpadding="0" cellspacing="0"><tr><td>
		<input type="text" value="" class="layui-input text-input form_item" name="array_value[]">
		</td><td><a class="javascript" rel="array_item_remove" title="删除" ><i class="fa fa-minus-circle"></i> 删除</a> <a class="javascript" rel="array_item_insert" title="插入"><i class="fa fa-plus-circle"></i> 插入</a></td></tr></table>
		</div>
		</div>
	</div>
	<div class="array_items">
		{each $value as $p_val}
		<div class="array_item">
		<table class="form_item" border="0" cellpadding="0" cellspacing="0"><tr><td>
		<input type="text" value="{$p_val}" class="layui-input text-input form_item" name="array_value[]">
		</td><td><a class="javascript" rel="array_item_remove" title="删除" ><i class="fa fa-minus-circle"></i> 删除</a> <a class="javascript" rel="array_item_insert" title="插入"><i class="fa fa-plus-circle"></i> 插入</a></td></tr></table>
		</div>
		{/each}
	</div>
	<a class="javascript add-item" rel="array_item_create" title="添加新项"><i class="fa fa-plus"></i> 添加新项</a>
</div>
*/}
	TPL.edit_keyvalue=function(){/*
<div class="edit_array">
	<div class="copy_template" style="display:none;">
		<div class="array_item">
		<div class="array_item">
		<table class="form_item" border="0" cellpadding="0" cellspacing="0"><tr><td>
		<input type="text" value="" class="layui-input text-input form_item form_key" name="array_value[key][]"></td>
        <td>
		<input type="text" value="" class="layui-input text-input form_item form_value" name="array_value[value][]">
		</td><td><a class="javascript" rel="array_item_remove" title="删除" ><i class="fa fa-minus-circle"></i> 删除</a><a class="javascript  " rel="array_item_insert" title="插入"><i class="fa fa-plus-circle"></i> 插入</a></td></tr></table>
		</div>
		</div>
	</div>
	<div class="array_items">
		{each $value as $p_val $p_key}
		<div class="array_item">
		<table class="form_item" border="0" cellpadding="0" cellspacing="0"><tr><td>
		<input type="text" value="{$p_key}" class="layui-input text-input form_item form_key" name="array_value[key][]"></td>
        <td>
		<input type="text" value="{$p_val}" class="layui-input text-input form_item form_value" name="array_value[value][]">
		</td><td><a class="javascript" rel="array_item_remove" title="删除" ><i class="fa fa-minus-circle"></i> 删除</a><a class="javascript " rel="array_item_insert" title="插入"><i class="fa fa-plus-circle"></i> 插入</a></td></tr></table>
		</div>
		{/each}
	</div>
	<a class="javascript add-item" rel="array_item_create" title="添加新项"><i class="fa fa-plus"></i> 添加新项</a>
</div>
*/}

//
	
}

function show_array(){
	var is_keyvalue=$(this).is('.keyvalue'); 
	var value=get_array_value.call(this);
	
	$(this).removeClass('editing').html('编辑').siblings('.array').html((is_keyvalue?TPL.show_keyvalue:TPL.show_array).render({
		$value:value
	}));
}
function edit_array(){
	var $this=$(this);
    
	var is_keyvalue=$this.is('.keyvalue');
	
	if($this.is('.editing')){
		var value=HKUC.parse_serial_array($this.siblings('.array').find('.array_items input[type=text]').serializeArray());
		
		(is_keyvalue?set_keyvalue_value:set_array_value).call(this,value.array_value);
		show_array.call(this);
	}
	else{
		var value=get_array_value.call(this);
		
		$this.addClass('editing').html('保存').siblings('.array').html((is_keyvalue?TPL.edit_keyvalue:TPL.edit_array).render({
			$value:value
		}));
	}
}
function get_array_value(){
	var raw_value=$(this).siblings('.form_item').val();
	
	if(HKUC.isJsonValidate(raw_value)){
		return eval('('+raw_value+')');
	}
	else{
		return [];
	}
}
function set_array_value(value){
	$(this).siblings('.form_item').val(JSON.stringify(value));
}
function set_keyvalue_value(value){
	var ret={};
	if(value && value.key)
	for(key in value.key){
		ret[value.key[key]]=value.value[key];
	}
	
	$(this).siblings('.form_item').val(JSON.stringify(ret));
}
function array_item_create($obj){
	var $this=$(this);
	var new_item_str=$this.closest('.array').find('.copy_template').html();

	if($obj){
		$(new_item_str).find(':disabled').attr('disabled',false).end().insertBefore($obj);
	}
	else{
		$(new_item_str).find(':disabled').attr('disabled',false).end().appendTo($this.siblings('.array_items'));
	}
}
function array_item_insert(){
	array_item_create.call(this,$(this).closest('.array_item'));
}
function array_item_remove(){
	var $this=$(this);
	var $item=$this.closest('.array_item');

	$item.remove();
}
$('.edit_array').each(function(){
	show_array.call(this)
});
<?php echo '</script'; ?>
>

<?php if ($_smarty_tpl->tpl_vars['deferJs']->value) {?>
<?php echo $_smarty_tpl->tpl_vars['html']->value->script($_smarty_tpl->tpl_vars['deferJs']->value,true);?>

<?php }?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '309155c6f6f6c068fa6_58755939';
?>



</body>
</html><?php }
}
?><?php
/*%%SmartyHeaderCode:184495c6f6f6c17a6e6_47985359%%*/
if ($_valid && !is_callable('content_5c6f6f6c17a6e1_99793291')) {
function content_5c6f6f6c17a6e1_99793291 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '184495c6f6f6c17a6e6_47985359';
?>



<?php
/*/%%SmartyNocache:184495c6f6f6c17a6e6_47985359%%*/
}
}
?><?php
/* smarty_template_function_url_184495c6f6f6c17a6e6_47985359 */
if (!function_exists('smarty_template_function_url_184495c6f6f6c17a6e6_47985359')) {
function smarty_template_function_url_184495c6f6f6c17a6e6_47985359($_smarty_tpl,$params) {
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
/*/ smarty_template_function_url_184495c6f6f6c17a6e6_47985359 */

?>
<?php
/* smarty_template_function_furl_184495c6f6f6c17a6e6_47985359 */
if (!function_exists('smarty_template_function_furl_184495c6f6f6c17a6e6_47985359')) {
function smarty_template_function_furl_184495c6f6f6c17a6e6_47985359($_smarty_tpl,$params) {
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
/*/ smarty_template_function_furl_184495c6f6f6c17a6e6_47985359 */

?>
<?php
/* smarty_template_function_menu_link_184495c6f6f6c17a6e6_47985359 */
if (!function_exists('smarty_template_function_menu_link_184495c6f6f6c17a6e6_47985359')) {
function smarty_template_function_menu_link_184495c6f6f6c17a6e6_47985359($_smarty_tpl,$params) {
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
/*/ smarty_template_function_menu_link_184495c6f6f6c17a6e6_47985359 */

?>
