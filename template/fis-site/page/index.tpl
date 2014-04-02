{%extends file="fis-site/page/layout.tpl"%}

{%block name="block_head_static"%}
    <link href="http://fonts.googleapis.com/css?family=Ubuntu+Mono:400,700" rel="stylesheet">

    {%require name="fis-site:static/css/front.css"%}
{%/block%}

{%block name="content"%}
    {%widget name="fis-site:widget/header/header.tpl" %}

    <!-- <div class="jumbotron">
        <div class="container">
            <h1 class="with-icon"><span class="fa fa-cogs"></span>F.I.S</h1>
            <p class="desc">Front-end Integrated Solution</p>
        </div>
    </div> -->

    <div class="coolwall">
        <div class="container">
            <span class="fa fa-cogs"></span>
            <h1>F.I.S</h1>
            <p class="desc">Front-end Integrated Solution
            </p>
        </div>
    </div>

    <div class="container fis-features">
        <div id="what">
            FIS是基于工具、开发框架、本地开发环境为一体的前端解决方案。面向工程化，简化开发、提测、部署流程，促进开发流程中的协作，来达到更快、更可靠、低成本的自动化项目交付；面向自动化，减少人工管理静态资源成本和风险，全自动优化页面性能、减少服务器开销；面向定制化，包括PC、Mobile、I18n等大量个性化解决方案。
        </div>

        <div id="why">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <h4><i class="glyphicon glyphicon-edit"></i> Create</h4>
                    快速搭建项目，提供灵活的脚手架工具，辅助项目开发，能够生成项目、页面、模块、插件等各类资源。
                </div>
                <div class="col-md-4 col-sm-6">
                    <h4><i class="glyphicon glyphicon-transfer"></i> Compile</h4>
                    自动化构建，支持对文件进行编译、校验、压缩、合并、优化，自动处理静态资源内嵌、路径替换、md5时间戳、依赖关系。
                </div>
                <div class="col-md-4 col-sm-6">
                    <h4><i class="glyphicon glyphicon-pause"></i> Debug</h4>
                    便捷的本地调试环境，内置调试服务器，支持数据及请求模拟、文件监听、浏览器自动刷新。
                </div>
                <div class="col-md-4 col-sm-6">
                    <h4><i class="glyphicon glyphicon-stats"></i> Framework</h4>
                    基于模块化的高性能前后端开发框架，可以根据终端灵活控制资源输出策略，有效监控资源加载情况并自动优化网站性能。
                </div>
                <div class="col-md-4 col-sm-6">
                    <h4><i class="glyphicon glyphicon-resize-full"></i> Extend</h4>
                    灵活扩展性，插件系统机制，支持对构建过程和命令功能进行扩展。
                </div>
                <div class="col-md-4 col-sm-6">
                    <h4><i class="glyphicon glyphicon-send"></i> Deploy</h4>
                    一键部署，满足任何前后端框架的发布部署，简化部署流程，来达到更快、更可靠、低成本的自动化项目交付。
                </div>
            </div>
        </div>

        {%*<h2>Why use Fis?</h2>
        <ul>
            <li>优雅、灵活的约定规范解决复杂的前端项目多人协同开发问题.</li>
            <li>众多优秀的插件工具解决繁重、重复的工作,同时你也可以贡献你的产出.</li>
            <li>独立的开发环境解决前端项目本地化开发问题，同时可模拟各类数据及请求.</li>
            <li>各类静态资源管理加载方案解决不同环境、不同业务下的静态资源使用、优化等问题.</li>
        </ul>

        <hr class="fis" />
        {%widget name="fis-site:widget/whatisfis/whatisfis.tpl" data=$navs %}
        *%}

        {%*
        <h2>GETTING STARTED</h2>
        <p>FIS的安装比较简单，首先确认已安装<a href="http://nodejs.org">Node.js</a>,通过npm进行全局安装：</p>
<div class="highlight"><pre>npm install -g fis
</pre></div>
<p>通过下载一个Demo示例来感受下FIS如何使用:</p>

<pre class="terminal">
<span class="command-prompt">fis install firstblood-demo</span>
install [firstblood-demo@latest]

<span class="command-prompt">cd firstblood</span>

<span class="command-prompt">ll</span>

total 40
-rw-rw-r--  1 username  staff    31  6  6  2013 demo.css
-rw-rw-r--  1 username  staff    27  6  6  2013 demo.js
drwxrwxr-x  4 username  staff   136  1 21 12:09 <span class="blue">images</span>
-rw-rw-r--  1 username  staff  5663  6  6  2013 index.html
-rw-rw-r--  1 username  staff     0  6  6  2013 script.js
-rw-rw-r--  1 username  staff  2799  6  6  2013 style.css

<span class="command-prompt">fis release -d ./output</span>

[WARNI] missing config file [fis-conf.js]

<span class="green">Ω</span> ....... <span class="green">58ms</span>

<span class="command-prompt">fis server start --root ./output</span>
checking java support : v1.6.0
checking php-cgi support : v5.5.8
starting fis-server ... at port [8080]

 [NOTIC] browse <span class="yellow">http://127.0.0.1:8080/</span>

<span class="command-prompt active"><span class="active-prompt"></span></span>
</pre>

        <h2>Features</h2>
        <ul>
<li>跨平台支持win、mac、linux等系统,满足各类开发环境</li>
<li>无内置规范，可配置 <a href="/solutions/fis/%E9%85%8D%E7%BD%AEAPI#toc_28">开发和部署规范</a>，用于满足任何前后端框架的部署需求</li>
<li>对html、js、css实现 <a href="/solutions/fis/%E4%B8%89%E7%A7%8D%E8%AF%AD%E8%A8%80%E8%83%BD%E5%8A%9B">三种语言能力</a> 扩展，包括定位、内嵌、依赖，解决绝大多数前端构建问题</li>
<li>支持二次包装，比如 <a href="github.com/fouber/spmx">spmx</a>、 <a href="https://github.com/fouber/phiz/">phiz</a>、 <a href="https://github.com/xspider/fis-chassis">chassis</a>，对fis进行包装后可内置新的插件、配置，从而打造属于你们团队的自己的开发工具</li>
<li>自动生成静态资源表关系表（map.json），可用于 <a href="/developer/%E5%9F%BA%E4%BA%8Emap.json%E7%9A%84%E5%89%8D%E5%90%8E%E7%AB%AF%E6%9E%B6%E6%9E%84%E8%AE%BE%E8%AE%A1%E6%8C%87%E5%AF%BC">连接前后端开发框架</a></li>
<li>所有静态资源自动加 <code>md5版本戳</code>，服务端可开启永久强缓存,支持给所有静态资源添加域名前缀</li>
<li>抹平编码差异，开发中无论是gbk、gb2312、utf8、utf8-bom等编码的文件，输出时都能统一指定为utf8无bom（默认）或者gbk文件</li>
<li>可灵活扩展的插件系统，支持对构建过程和命令功能进行扩展，现已发布N多 <a href="https://npmjs.org/search?q=fis">插件</a></li>
<li>通过插件配置可以在一个项目中无缝使用 <a href="https://github.com/fouber/fis-parser-less">less</a>、<a href="https://github.com/fouber/fis-parser-coffee-script">coffee</a>、<a href="https://github.com/fouber/fis-parser-marked">markdown</a>、<a href="https://npmjs.org/package/fis-parser-jade">jade</a>等语言开发</li>
<li>内置 <a href="https://github.com/xiangshouding/fis-spriter-csssprites">css sprites插件</a>，简单易用</li>
<li>内置 <a href="https://github.com/fis-dev/fis-optimizer-png-compressor">png图片压缩插件</a>，采用c++编写的node扩展，具有极高的性能，支持 <a href="https://github.com/fis-dev/fis-optimizer-png-compressor">将png24压缩为png8</a></li>
<li>内置本地开发调试服务器，支持完美运行 <code>java</code>、<code>jsp</code>、<code>php</code> 等服务端语言</li>
<li>支持文件监听，保存即发布</li>
<li>支持浏览器自动刷新，可同时刷新多个终端中的页面，配合文件监听功能可实现保存即刷新</li>
<li>支持上传到远端服务器，配合文件监听，浏览器自动刷新功能，可实现保存即增量编译上传，上传后即刷新的开发体验</li>
</ul>
        *%}
    </div>






    {%widget name="fis-site:widget/footer/footer.tpl" %}
{%require name='fis-site:page/index.tpl'%}{%/block%}