{%extends file="fis-site/page/layout.tpl"%}
{%block name="block_head_static"%}
    {%require name="fis-site:static/css/cases.css"%}
{%/block%}
{%block name="content"%}
    {%widget name="fis-site:widget/header/header.tpl" data=$navs %}

    <div class="jumbotron">
        <div class="container">
            <h1 class="with-icon"><span class="fa fa-thumbs-o-up"></span>合作案例</h1>
            <p class="desc">通过深度合作，解决产品线实际问题</p>
        </div>
    </div>

    <div class="container">
        <div class="page-header"><h1>PC端案例</h1></div>
        <div class="cases-container">
        {%foreach from=$list item=item%}
        {%if !$item.webapp && !$item.i18n%}
            <div class="case-item">
                <div class="case-item-inner">
                    <h1>{%$item.title%}</h1>
                    {%$item.content|escape:none%}
                </div>
            </div>
        {%/if%}
        {%/foreach%}
        </div>

        <div class="page-header"><h1>无线端案例</h1></div>
        <div class="cases-container cases-container-webapp">
        {%foreach from=$list item=item%}
        {%if $item.webapp%}
            <div class="case-item">
                <div class="case-item-inner">
                    <h1>{%$item.title%}</h1>
                    {%$item.content|escape:none%}
                </div>
            </div>
        {%/if%}
        {%/foreach%}
        </div>

        <div class="page-header"><h1>国际化案例</h1></div>
        <div class="cases-container">
        {%foreach from=$list item=item%}
        {%if $item.i18n%}
            <div class="case-item">
                <div class="case-item-inner">
                    <h1>{%$item.title%}</h1>
                    {%$item.content|escape:none%}
                </div>
            </div>
        {%/if%}
        {%/foreach%}
        </div>
    </div>
    {%widget name="fis-site:widget/footer/footer.tpl" %}
{%require name='fis-site:page/cases.tpl'%}{%/block%}