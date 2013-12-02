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
            <h1>页面没有找到</h1>
        </div>

        <div class="content">
			<p>对不起，页面没有找到，有问题，请联系管理员</p>
        </div>
		<!--底部-->
        {include file="footer.tpl"}
    </div>
</div>
{/block}