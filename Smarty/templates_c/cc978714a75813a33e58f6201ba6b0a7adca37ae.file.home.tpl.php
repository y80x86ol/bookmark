<?php /* Smarty version Smarty-3.1.15, created on 2013-11-28 03:16:34
         compiled from ".\Views\home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20042528495087e9042-60776315%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cc978714a75813a33e58f6201ba6b0a7adca37ae' => 
    array (
      0 => '.\\Views\\home.tpl',
      1 => 1385604951,
      2 => 'file',
    ),
    '50d3f1844fe1ae65ec67de92d7d8527dda61976b' => 
    array (
      0 => '.\\Views\\layout.tpl',
      1 => 1385604992,
      2 => 'file',
    ),
    '2030b108ebec54ca2fa00be3792361f2610157f1' => 
    array (
      0 => '.\\Views\\header.tpl',
      1 => 1385535800,
      2 => 'file',
    ),
    '9b765172a09a64e76c69ad6cdac5ae56b4f33497' => 
    array (
      0 => '.\\Views\\menu.tpl',
      1 => 1385543214,
      2 => 'file',
    ),
    'ae3b0dd9b2afa2e0e4dc78c7cd25b5c244e7be55' => 
    array (
      0 => '.\\Views\\footer.tpl',
      1 => 1385536132,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20042528495087e9042-60776315',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5284950885e466_77765220',
  'variables' => 
  array (
    'data' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5284950885e466_77765220')) {function content_5284950885e466_77765220($_smarty_tpl) {?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/transitional.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href="/skin/css/pure-min.css" rel="stylesheet" type="text/css"/>
	<link href="/skin/css/style.css" rel="stylesheet" type="text/css"/>
	<script src="/skin/js/ui.js"></script>
	<title><?php echo $_smarty_tpl->tpl_vars['data']->value['page_title'];?>
</title>
	<meta name="description" content="我的第一个PHP MVC框架">
</head>
<body>
	
<?php /*  Call merged included template "header.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '20042528495087e9042-60776315');
content_5296a782279176_13860564($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "header.tpl" */?>
<div id="layout">
    <!-- Menu toggle -->
    <a href="#menu" id="menuLink" class="pure-menu-link">
        <!-- Hamburger icon -->
        <span></span>
    </a>

    <div id="menu">
        <?php /*  Call merged included template "menu.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '20042528495087e9042-60776315');
content_5296a782297ac3_18773724($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "menu.tpl" */?>
    </div>

    <div id="main">
        <div class="header">
            <h1>欢迎来到我的PHP MVC</h1>
            <h2>在这里即将开启一个崭新的时代</h2>
        </div>

        <div class="content">
            <h2 class="content-subhead">该PHP MVC采用了Smarty模板引擎</h2>
            <p>
                本PHP MVC采用了Smarty模板引擎支持，让MVC框架结构更加简单，更加方便的使用
            </p>

            <h2 class="content-subhead">该PHP MVC框架采用了PURE CSS框架</h2>
            <p>
                Pure 是来自雅虎的 CSS 框架，使用 Normalize.CSS 无需任何 JavaScript 代码。框架基于响应式设计，提供多种样式的组件，包括表格、表单、按钮、表、导航等。标识使用非常简单，整个框架非常轻量级，压缩后只有 5.7k。
            </p>

            <div class="pure-g-r">
                <div class="pure-u-1-4">
                    <img src="http://farm3.staticflickr.com/2875/9069037713_1752f5daeb.jpg" alt="Peyto Lake">
                </div>
                <div class="pure-u-1-4">
                    <img src="http://farm3.staticflickr.com/2813/9069585985_80da8db54f.jpg" alt="Train">
                </div>
                <div class="pure-u-1-4">
                    <img src="http://farm8.staticflickr.com/7357/9086701425_fda3024927.jpg" alt="T-Shirt Store">
                </div>
                <div class="pure-u-1-4">
                    <img src="http://farm8.staticflickr.com/7357/9086701425_fda3024927.jpg" alt="Mountain">
                </div>
            </div>

            <h2 class="content-subhead">以最少得代码实现最优秀的功能</h2>
            <p>
                我确保在以以最少得代码实现最优秀的功能的前提下进行的该PHP MVC开发，以便于扩展和后续开发。
            </p>
        </div>
		<!--底部-->
        <?php /*  Call merged included template "footer.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '20042528495087e9042-60776315');
content_5296a7822cc566_78319019($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "footer.tpl" */?>
    </div>
</div>

</body>
</html><?php }} ?>
<?php /* Smarty version Smarty-3.1.15, created on 2013-11-28 03:16:34
         compiled from ".\Views\header.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5296a782279176_13860564')) {function content_5296a782279176_13860564($_smarty_tpl) {?>	<!--<div class="header">
		<?php if ($_smarty_tpl->tpl_vars['user']->value['username']) {?>
			欢迎回来,<?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
|<a href="?control=user&action=logout">退出登录</a>
		<?php } else { ?>
		<a href="?control=user&action=login">登录</a>|<a href="?control=user&action=register">注册</a>
		<?php }?>
	</div>-->
	<!--<div class="header">
		<?php if ($_smarty_tpl->tpl_vars['user']->value['username']) {?>
			欢迎回来,<?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
|<a href="/user/logout">退出登录</a>
		<?php } else { ?>
		<a href="/user/login">登录</a>|<a href="/user/register">注册</a>
		<?php }?>
	</div>-->
	<?php }} ?>
<?php /* Smarty version Smarty-3.1.15, created on 2013-11-28 03:16:34
         compiled from ".\Views\menu.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5296a782297ac3_18773724')) {function content_5296a782297ac3_18773724($_smarty_tpl) {?><div class="pure-menu pure-menu-open">
    <!--显示在最顶部，可以是logo或者站点名字-->
    <a class="pure-menu-heading" href="http://purecss.io/">PHP MVC</a>

    <ul>
        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
        <li <?php if ($_SERVER['REQUEST_URI']==$_smarty_tpl->tpl_vars['item']->value[1]) {?>class="pure-menu-selected menu-item-divided"<?php }?>>
            <a href="<?php echo $_smarty_tpl->tpl_vars['item']->value[1];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value[0];?>
</a>
        </li>
        <?php } ?>
        <!--被选中的菜单
        <li class="pure-menu-selected menu-item-divided">
            <a href="/user/login">登录</a>
        </li>
        -->

        <!--带有分割线的菜单-->
        <li class="menu-item-divided">
            <a>功能</a>
        </li>
        <?php if ($_smarty_tpl->tpl_vars['user']->value) {?>
        <li>
            <a href="/user/logout">退出登录</a>
        </li>
        <?php } else { ?>
        <li <?php if ($_SERVER['REQUEST_URI']=='/user/login') {?>class="pure-menu-selected menu-item-divided"<?php }?>>
            <a href="/user/login">登录</a>
        </li>
        <li <?php if ($_SERVER['REQUEST_URI']=='/user/register') {?>class="pure-menu-selected menu-item-divided"<?php }?>>
            <a href="/user/register">注册</a>
        </li>
        <?php }?>
    </ul>
</div><?php }} ?>
<?php /* Smarty version Smarty-3.1.15, created on 2013-11-28 03:16:34
         compiled from ".\Views\footer.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5296a7822cc566_78319019')) {function content_5296a7822cc566_78319019($_smarty_tpl) {?><div class="footer">
	@我的第一个PHP MVC框架 BY KEN
</div>
<?php }} ?>
