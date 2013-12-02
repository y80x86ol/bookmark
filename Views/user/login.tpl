{extends file="layout.tpl"}
{block name=body}
{include file="header.tpl"}
<div id="layout">
    <!-- Menu toggle -->
    <a href="#menu" id="menuLink" class="pure-menu-link">
        <!-- Hamburger icon -->
        <span></span>
    </a>

    <div id="menu">
        {include file="menu.tpl"}
    </div>

    <div id="main">
        <div class="header">
            <h1>登录</h1>
            <h2>登录后可以操作更多</h2>
        </div>

        <div class="content">
			<form id="user_login" method="POST" class="pure-form">
				<lable>用户名:</lable><br/>
				<input id="username" type="text" name="username" placeholder="用户名"/><p/>
				<lable>密码:</lable><br/>
				<input id="password" type="password" name="password" placeholder="密码"/><p/>
				<button type="submit" class="pure-button pure-button-primary">登录</button>
			</form>
			<p>没有账号？<a href="/user/register">注册一个</a></p>
        </div>
		<!--底部-->
        {include file="footer.tpl"}
    </div>
</div>
{/block}