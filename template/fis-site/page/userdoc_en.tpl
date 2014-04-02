{%extends file="fis-site/page/layout.tpl"%}
{%block name="block_head_static"%}
    {%require name="fis-site:static/css/front.css"%}
{%/block%}
{%block name="content"%}
    {%widget name="fis-site:widget/header/header.tpl" navs=$navs_en en=true %}

    <div class="jumbotron">
        <div class="container">
            <h1 class="with-icon"><span class="fa fa-users"></span>Documentation</h1>
            <p class="desc"></p>
        </div>
    </div>

    <div id="post-container" class="container">
        <div class="row">
            <div class="col-md-3">

                <div class="fis-sidebar">
                    <ul class="nav nav-pills nav-stacked">
                    {%foreach from=$developer item=item key=key %}
                        <li {%if $item.active%}class="active"{%/if%}>
                            {%assign var=link_path value=$item['link_path']%}
                            <a href="{%$link_path%}">{%$item.title%}</a>
                            {%if $item.active%}
                            {%$item.toc|escape:none%}
                            {%else%}
                            {%$item.toc|escape:none|replace:'"#':"\"$link_path#"%}
                            {%/if%}
                        </li>
                    {%/foreach%}
                    </ul>
                </div>
            </div>
            <div class="col-md-9">
                <div class="page-header"><h1>{%$title%}</h1></div>
                <div class="page-container">
                    {%$content|escape:none%}
                </div>
            </div>
        </div>
    </div>
    {%script%}
        require('fis-site:widget/js/sidebar.js').init('.fis-sidebar');
    {%/script%}
    {%widget name="fis-site:widget/footer/footer.tpl" %}
{%require name='fis-site:page/userdoc_en.tpl'%}{%/block%}