{%extends file="fis-site/page/layout.tpl"%}
{%block name="block_head_static"%}
    {%require name="fis-site:static/css/front.css"%}
{%/block%}
{%block name="content"%}
    {%widget name="fis-site:widget/header/header.tpl" data=$navs %}

    <div id="post-container" class="container">
        <div class="page-header"><h1>404</h1></div>
        <div class="container page-container">
            <p>你请求的页面已不存在， 点此<a href="/">回到首页</a>。</p>
        </div>
    </div>

    {%widget name="fis-site:widget/footer/footer.tpl" %}

{%require name='fis-site:page/error.tpl'%}{%/block%}