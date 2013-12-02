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
        {include file="footer.tpl"}
    </div>
</div>
{/block}