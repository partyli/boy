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
  'unifunc' => 'content_5c6f66f12027a4_93282379',
  'cache_lifetime' => 3600,
),true);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5c6f66f12027a4_93282379')) {
function content_5c6f66f12027a4_93282379 ($_smarty_tpl) {
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
                        <tr >
            <td>操作系统
                            </td>
            <td>类UNIX</td>
            <td>
                        <i class="fa fa-check"></i>
                        WINNT</td>
            <td>不限制</td>
        </tr>
                        <tr >
            <td>PHP版本
                            </td>
            <td>>7.0.x</td>
            <td>
                        <i class="fa fa-check"></i>
                        7.0.12</td>
            <td>5.6.x</td>
        </tr>
                        <tr >
            <td>session
                            </td>
            <td>开启</td>
            <td>
                        <i class="fa fa-check"></i>
                        已开启</td>
            <td>开启</td>
        </tr>
                        <tr >
            <td>PDO
                                <a href="https://www.baidu.com/s?wd=开启PDO,PDO_MYSQL扩展" target="_blank"><i class="fa fa-question-circle"></i></a>
                            </td>
            <td>开启</td>
            <td>
                        <i class="fa fa-check"></i>
                        已开启</td>
            <td>开启</td>
        </tr>
                        <tr >
            <td>PDO_MySQL
                                <a href="https://www.baidu.com/s?wd=开启PDO,PDO_MYSQL扩展" target="_blank"><i class="fa fa-question-circle"></i></a>
                            </td>
            <td>开启</td>
            <td>
                        <i class="fa fa-check"></i>
                        已开启</td>
            <td>开启</td>
        </tr>
                        <tr >
            <td>CURL
                                <a href="https://www.baidu.com/s?wd=开启PHP CURL扩展" target="_blank"><i class="fa fa-question-circle"></i></a>
                            </td>
            <td>开启</td>
            <td>
                        <i class="fa fa-check"></i>
                        已开启</td>
            <td>不限制</td>
        </tr>
                        <tr >
            <td>GD
                                <a href="https://www.baidu.com/s?wd=开启PHP GD扩展" target="_blank"><i class="fa fa-question-circle"></i></a>
                            </td>
            <td>开启</td>
            <td>
                        <i class="fa fa-check"></i>
                        已开启</td>
            <td>开启</td>
        </tr>
                        <tr >
            <td>MBstring
                                <a href="https://www.baidu.com/s?wd=开启PHP MBstring扩展" target="_blank"><i class="fa fa-question-circle"></i></a>
                            </td>
            <td>开启</td>
            <td>
                        <i class="fa fa-check"></i>
                        已开启</td>
            <td>开启</td>
        </tr>
                        <tr>
            <th width="100%" colspan="4">环境配置检测</th>
        </tr>
                        <tr >
            <td>最大执行时间
                            </td>
            <td>>=30s</td>
            <td>
                        <i class="fa fa-check"></i>
                        30s</td>
            <td>无限制</td>
        </tr>
                        <tr >
            <td>文件上传大小
                            </td>
            <td>>2M</td>
            <td>
                        <i class="fa fa-check"></i>
                        8M</td>
            <td>无限制</td>
        </tr>
                        <tr id="rewrite">
            <td>URL重写
                                <a href="https://www.kancloud.cn/manual/thinkphp5/177576" target="_blank"><i class="fa fa-question-circle"></i></a>
                            </td>
            <td>开启</td>
            <td>
                        <i class="fa fa-remove"></i>
                        检测中...</td>
            <td>开启</td>
        </tr>
                
    </table>
    
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
            <th width="50%">目录、文件权限检查</th>
            <th>写入</th>
            <th>读取</th>
        </tr>
                
        <tr >
            <td>D:\phpStudy\WWW\wootest\data\</td>
            <td><i class="fa fa-check"></i> 可写</td>            
            <td><i class="fa fa-check"></i> 可读</td>        
        </tr>
                
        <tr >
            <td>D:\phpStudy\WWW\wootest\runtime\</td>
            <td><i class="fa fa-check"></i> 可写</td>            
            <td><i class="fa fa-check"></i> 可读</td>        
        </tr>
                
        <tr >
            <td>D:\phpStudy\WWW\wootest\public\upload\</td>
            <td><i class="fa fa-check"></i> 可写</td>            
            <td><i class="fa fa-check"></i> 可读</td>        
        </tr>
                
        <tr >
            <td>D:\phpStudy\WWW\wootest\public\addons\</td>
            <td><i class="fa fa-check"></i> 可写</td>            
            <td><i class="fa fa-check"></i> 可读</td>        
        </tr>
                
    </table>
    
</div>



<div class="bottom-btns">
    <a href="http://127.0.0.1/wootest/public/?s=install/index/step2" class="layui-btn">重新检测</a><a href="/wootest/public/install/index/step3.html" class="layui-btn" onclick="return checkError()">下一步 >></a>
</div>

<script>
var error_count = 1;
$.ajax({
    url: "/wootest/public/install/index/testrewrite.html",
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