{%extends file="fis-site/page/layout.tpl"%}
{%block name="block_head_static"%}
    {%require name="fis-site:static/css/front.css"%}
{%/block%}
{%block name="content"%}
    {%widget name="fis-site:widget/header/header.tpl" data=$navs %}

    <div id="post-container" class="container">
    {%if $toc%}
    <div class="row">
        <div class="col-md-3">
            <div class="post-toc">{%$toc|escape:none%}</div>
        </div>
        <div class="col-md-9">
            <div class="page-header">
                <h1>{%$title|escape:none%}</h1>
            </div>
            <div class="page-container">
                {%$content|escape:none%}
            </div>
        </div>
    </div>
    {%script%}
        require('fis-site:widget/js/sidebar.js').init();
    {%/script%}
    {%else%}
    <div class="page-header"><h1>{%$title%}</h1></div>
    <div class="container page-container">{%$content|escape:none%}</div>
    {%/if%}
    </div>

    {%widget name="fis-site:widget/footer/footer.tpl" %}

{%require name='fis-site:page/detail_en.tpl'%}{%/block%}