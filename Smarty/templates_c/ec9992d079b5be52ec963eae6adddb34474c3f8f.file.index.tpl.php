<?php /* Smarty version Smarty-3.1.15, created on 2013-11-28 03:20:15
         compiled from ".\Views\user\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:89652848d091749f4-41725167%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ec9992d079b5be52ec963eae6adddb34474c3f8f' => 
    array (
      0 => '.\\Views\\user\\index.tpl',
      1 => 1385542821,
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
  'nocache_hash' => '89652848d091749f4-41725167',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52848d091f22a1_97751011',
  'variables' => 
  array (
    'data' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52848d091f22a1_97751011')) {function content_52848d091f22a1_97751011($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\Workspace\\new_bookmark\\Smarty\\libs\\plugins\\modifier.date_format.php';
?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/transitional.dtd">
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
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '89652848d091749f4-41725167');
content_5296a85f863f18_24618793($_smarty_tpl);
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
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '89652848d091749f4-41725167');
content_5296a85f884377_22820432($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "menu.tpl" */?>
    </div>

    <div id="main">
        <div class="header">
            <h1>个人中心</h1>
            <h2>你可以查看你的信息</h2>
        </div>

        <div class="content">
			<p>你好，现在时间是:<?php echo smarty_modifier_date_format(time(),"%D");?>
</p>
        </div>
		<!--底部-->
        <?php /*  Call merged included template "footer.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '89652848d091749f4-41725167');
content_5296a85f903fe4_60600768($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "footer.tpl" */?>
    </div>
</div>

</body>
</html><?php }} ?>
<?php /* Smarty version Smarty-3.1.15, created on 2013-11-28 03:20:15
         compiled from ".\Views\header.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5296a85f863f18_24618793')) {function content_5296a85f863f18_24618793($_smarty_tpl) {?>	<!--<div class="header">
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
<?php /* Smarty version Smarty-3.1.15, created on 2013-11-28 03:20:15
         compiled from ".\Views\menu.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5296a85f884377_22820432')) {function content_5296a85f884377_22820432($_smarty_tpl) {?><div class="pure-menu pure-menu-open">
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
<?php /* Smarty version Smarty-3.1.15, created on 2013-11-28 03:20:15
         compiled from ".\Views\footer.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5296a85f903fe4_60600768')) {function content_5296a85f903fe4_60600768($_smarty_tpl) {?><div class="footer">
	@我的第一个PHP MVC框架 BY KEN
</div>
<?php }} ?>
