{%extends file="fis-site/page/layout.tpl"%}
{%block name="block_head_static"%}
    {%require name="fis-site:static/css/blog.css"%}
{%/block%}
{%block name="content"%}
    {%widget name="fis-site:widget/header/header.tpl" data=$navs %}

    <div class="bcn">
        <div class="container">
        <ol class="breadcrumb">
          <li><a href="/">首页</a></li>
          <li><a href="/blog">Blog</a></li>
          <li class="active">{%$title%}</li>
        </ol>
        </div>
    </div>

    <div id="post-container" class="container">



    {%if $toc%}
    <div class="row">
        <div class="col-md-3">
            <div class="post-toc">{%$toc|escape:none%}</div>
        </div>
        <div class="col-md-9">
            <div class="page-header">
                <h1>{%$title%}</h1>
            </div>
            <div class="page-container md-body">
                {%$content|escape:none%}
            </div>
        </div>
    </div>
    {%script%}
        require('fis-site:widget/js/sidebar.js').init();
    {%/script%}
    {%else%}
    <div class="page-header"><h1>{%$title%}</h1></div>
    <div class="container page-container md-body">{%$content|escape:none%}</div>
    {%/if%}
    </div>

    {%widget name="fis-site:widget/footer/footer.tpl" %}

{%require name='fis-site:page/blog/detail.tpl'%}{%/block%}