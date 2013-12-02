<div class="pure-menu pure-menu-open">
    <!--显示在最顶部，可以是logo或者站点名字-->
    <a class="pure-menu-heading" href="http://purecss.io/">PHP MVC</a>

    <ul>
        {foreach $menu as $item}
        <li {if $smarty.server.REQUEST_URI==$item[1]}class="pure-menu-selected menu-item-divided"{/if}>
            <a href="{$item[1]}">{$item[0]}</a>
        </li>
        {/foreach}
        <!--被选中的菜单
        <li class="pure-menu-selected menu-item-divided">
            <a href="/user/login">登录</a>
        </li>
        -->

        <!--带有分割线的菜单-->
        <li class="menu-item-divided">
            <a>功能</a>
        </li>
        {if $user}
        <li>
            <a href="/user/logout">退出登录</a>
        </li>
        {else}
        <li {if $smarty.server.REQUEST_URI=='/user/login'}class="pure-menu-selected menu-item-divided"{/if}>
            <a href="/user/login">登录</a>
        </li>
        <li {if $smarty.server.REQUEST_URI=='/user/register'}class="pure-menu-selected menu-item-divided"{/if}>
            <a href="/user/register">注册</a>
        </li>
        {/if}
    </ul>
</div>