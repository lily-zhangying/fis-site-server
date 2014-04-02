{%extends file="fis-site/page/layout.tpl"%}
{%block name="block_head_static"%}
    {%require name="fis-site:static/css/blog.css"%}
{%/block%}
{%block name="content"%}
    {%widget name="fis-site:widget/header/header.tpl" data=$navs %}

    <div class="jumbotron">
        <div class="container">
            <h1 class="with-icon"><span class="fa fa-file-text-o"></span>Blog</h1>
            <p class="desc">聚集各类前端领域技术文献，更加全面的认识FIS。</p>
        </div>
    </div>

    <div id="post-container" class="container">
        <div class="blog-list">
        {%foreach from=$collection item=item%}
            <div class="blog-item">
                <h1><a href="{%if $item.link%}{%$item.link|escape:none%}{%else%}/blog/{%$item.path%}{%/if%}">{%$item.title%}</a></h1>
                <div class="info">
                    <p class="date">日期：<span>{%$item.date%}</span></p>
                    <p class="author">作者：<a href="https://github.com/{%$item.author%}">{%$item.author%}</a></p>
                </div>
                <div class="abstract md-body">{%$item.abstract|escape:none%}</div>
            </div>
        {%/foreach%}
        </div>

        {%if $pagination%}
        <div>
            <ul class="pagination">
                {%if $pagination.first%}
                    <li><a href="/blog?{%$pagination.first|escape:none%}">首页</a></li>
                {%/if%}

                {%if $pagination.prev%}
                    <li><a href="/blog?{%$pagination.prev|escape:none%}">上一页</a></li>
                {%/if%}

                {%foreach from=$pagination.pages item=item%}
                    <li {%if $item.active%} class="active"{%/if%}><a  href="/blog?{%$item.url|escape:none%}">{%$item.page%}</a></li>
                {%/foreach%}

                {%if $pagination.next%}
                    <li><a href="/blog?{%$pagination.next|escape:none%}">下一页</a></li>
                {%/if%}

                {%if $pagination.last%}
                    <li><a href="/blog?{%$pagination.last|escape:none%}">最后一页</a></li>
                {%/if%}
            </ul>
        </div>
        {%/if%}
    </div>
    {%widget name="fis-site:widget/footer/footer.tpl" %}
{%require name='fis-site:page/blog/list.tpl'%}{%/block%}