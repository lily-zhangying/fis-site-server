<?php
$route_conf = array(
	'/' => array(
		'type' => 'index',
		'tpl' => 'fis-site/page/index.tpl',
		'link' => '/',
		'title' => '前端集成解决方案'
	),
	'/en' => array(
		'type' => 'index',
		'tpl' => 'fis-site/page/index_en.tpl',
		'link' => '/',
		'title' => 'Front-end Integrated Solution'
	),
	'/userdoc_en' => array(
		'type' => 'userdoc',
		'lang' => 'en',
		'tpl' => 'fis-site/page/userdoc_en.tpl',
		'md_dir' => 'docs/userdoc_en',
		'md_path'=> 'docs/userdoc_en/index.html',
		'link' => '/userdoc_en',
		'active' => '/userdoc_en/index',
		'title' => 'documentation'
	),
	'/solutions' => array(
		'type' => 'list',
		'tpl' => 'fis-site/page/solutions.tpl',
		'md_dir' => 'docs/solutions',
		'link' => '/solutions',
		'title' => '最佳实践'
	),
	'/cases' => array(
		'type' => 'list',
		'tpl' => 'fis-site/page/cases.tpl',
		'md_dir' => 'docs/cases',
		'link' => '/cases',
		'title' => '合作案例'
	),
	'/detail' => array(
		'type' => 'detail',
		'tpl' => 'fis-site/page/detail.tpl',
		'md_dir' => 'docs',
		'md_path' => '',
		'link' => ''
	),
	'/developer' => array(
		'type' => 'developer',
		'tpl' => 'fis-site/page/developer.tpl',
		'md_dir' => 'docs/developer',
		'md_path'=> 'docs/developer/index.html',
		'link' => '/developer',
		'active' => '/developer/index'
	),
	'/userdoc' => array(
		'type' => 'userdoc',
		'tpl' => 'fis-site/page/userdoc.tpl',
		'md_dir' => 'docs/userdoc',
		'md_path'=> 'docs/userdoc/index.html',
		'link' => '/userdoc',
		'active' => '/userdoc/index'
	),
	'/blog' => array(
		'type' => 'blog',
		'tpl' => 'fis-site/page/blog.tpl',
		'md_dir' => 'docs/blog',
		'md_path'=> 'docs/blog/index.html',
		'link' => '/blog',
		'active' => '/blog/index'
	),
	'/error' => array(
		'type' => 'error',
		'tpl' => 'fis-site/page/error.tpl'
	)
);