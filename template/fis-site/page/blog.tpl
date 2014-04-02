{%extends file="fis-site/page/layout.tpl"%}
{%block name="block_head_static"%}
    {%require name="fis-site:static/css/front.css"%}
{%/block%}
{%block name="content"%}
    {%widget name="fis-site:widget/header/header.tpl" data=$navs %}

    <div class="jumbotron">
        <div class="container">
            <h1 class="with-icon"><span class="fa fa-file-text-o"></span>Blog</h1>
            <p class="desc">todo</p>
        </div>
    </div>

    <div id="post-container" class="container">
        <div class="row">
            <div class="col-md-3">

                <div class="fis-blog-sidebar">
                    <div class="panel panel-fis">
                        <div class="panel-heading">
                            <h3 class="panel-title">Blog</h3>
                        </div>
                        <div class="panel-body">
                            <ul class="nav">
                            {%foreach from=$sidenavs item=item key=key %}
                                <li {%if $item.active%}class="active"{%/if%}>
                                    {%assign var=link_path value=$item['link_path']%}
                                    <a href="{%$link_path%}">{%$item.title%}</a>
                                </li>
                            {%/foreach%}
                            </ul>
                        </div>
                    </div>

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
        require('fis-site:widget/js/sidebar.js').init('.fis-blog-sidebar');
    {%/script%}
    {%widget name="fis-site:widget/footer/footer.tpl" %}
{%require name='fis-site:page/blog.tpl'%}{%/block%}