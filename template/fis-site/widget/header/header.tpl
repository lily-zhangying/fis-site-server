<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a id="logo" class="navbar-brand" href="/" title="Fis">FIS</a>
        </div>
        <div class="collapse navbar-collapse">
            {%if $navs%}
            <ul class="nav navbar-nav">
                {%foreach $navs as $link%}
                    <li
                    {%if $link.active%} class="active"{%/if%}><a href="{%$link.href%}">{%$link.title|escape%}</a></li>
                {%/foreach%}
            </ul>
            {%/if%}

            <ul class="nav navbar-nav navbar-right">
                {%if $en%}
                <li><a href="/">中文版</a></li>
                {%else%}
                <li><a href="/en">English</a></li>
                {%/if%}
                <li><a target="_blank" href="https://github.com/fex-team/fis-plus">Github</a></li>
            </ul>
        </div>
    </div>
</div>