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
            <h1>个人中心</h1>
            <h2>你可以查看你的信息</h2>
        </div>

        <div class="content">
			<p>你好，现在时间是:{$smarty.now|date_format:"%D"}</p>
        </div>
		<!--底部-->
        {include file="footer.tpl"}
    </div>
</div>
{/block}