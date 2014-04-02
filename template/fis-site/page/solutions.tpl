{%extends file="fis-site/page/layout.tpl"%}
{%block name="content"%}
    {%widget name="fis-site:widget/header/header.tpl" data=$navs %}

    <div class="jumbotron">
        <div class="container">
            <h1 class="with-icon"><span class="fa fa-lightbulb-o"></span>最佳实践</h1>
            <p class="desc">旨在解决前端领域开发的核心问题，提升前端工程化生产力水平</p>
        </div>
    </div>

    {%widget name="fis-site:widget/solution/solution.tpl"%}

    <div class="container solusions-container">
        {%foreach from=$list item=item%}

            <div class="fis-list-section">
                <div class="page-header">
                    <h1><a href="{%$item.link%}">{%$item.title%}</a></h1>
                </div>
                {%$item.content|no_escape%}
            </div>
        {%/foreach%}
    </div>
    {%widget name="fis-site:widget/footer/footer.tpl" %}
{%require name='fis-site:page/solutions.tpl'%}{%/block%}