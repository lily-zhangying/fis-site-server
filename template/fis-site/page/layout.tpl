<!DOCTYPE html>
{%* 使用html插件替换普通html标签，同时注册JS组件化库 *%}
{%html framework="fis-site:static/js/mod.js"%}
    {%* 使用head插件替换head标签，主要为控制加载同步静态资源使用 *%}
    {%head%}
        <meta charset="utf-8"/>
        <meta content="{%$description%}" name="description">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="shortcut icon" href="/static/fis-site/page/favicon.ico">
        <title>{%$title%} - F.I.S</title>
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
        {%* 模板中加载静态资源 *%}
        {%require name="fis-site:static/css/bootstrap.css"%}
        {%require name="fis-site:static/css/bootstrap-theme.css"%}
        {%require name="fis-site:static/css/font-awesome.css"%}
        {%require name="fis-site:static/css/syntax.css"%}
        {%require name="fis-site:static/css/global.css"%}
        {%require name="fis-site:static/js/jquery-1.10.2.js"%}
        {%require name="fis-site:static/js/bootstrap.js"%}
        <script>
            void function(e,t,n,a,o,i,m){e.alogObjectName=o,e[o]=e[o]||function(){(e[o].q=e[o].q||[]
                ).push(arguments)},
            e[o].l=e[o].l||+new Date,i=t.createElement(n),
            i.asyn=1,i.src=a,m=t.getElementsByTagName(n)[0],m.parentNode.insertBefore(i,m)}(window,document,"script","http://img.baidu.com/hunter/alog.min.js","alog");
        </script>
        {%block name="block_head_static"%}{%/block%}
    {%/head%}
    {%* 使用body插件替换body标签，主要为可控制加载JS资源 *%}
    {%body%}
        <div id="wrapper">{%block name="content"%}{%/block%}</div>
        <script>
            alog("set", "alias", {
                monkey: "http://img.baidu.com/hunter/alog/monkey.min.js",
                element: "http://img.baidu.com/hunter/alog/element.min.js"
            });

            //引入Monkey
            alog("require", ["monkey", "element"], function(monkey, element){
                //如果本产品线的区块打点使用monkey而不是alog-group，则需要加上下面一行代码
                //element.an("group", "monkey");

                monkey.create({
                    page: "{%$pageId%}", //填写页面的Monkey pageId
                    pid: "241", 
                    p: "241", //log平台为每个产品线分的id
                    hid: "805", //Monkey实验的ID
                    postUrl: "http://nsclick.baidu.com/u.gif",
                    reports: {
                        refer: 1,
                        staytime: 1
                    }
                });
            });
            alog("monkey.send", "pageview", { now: +new Date });
        </script>
    {%require name='fis-site:page/layout.tpl'%}{%/body%}
{%/html%}