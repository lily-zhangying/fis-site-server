<?php

defined( 'DOC_PATH' ) OR define('DOC_PATH', dirname(dirname(__FILE__)).'/template/docs');
defined( 'LIB_PATH' ) OR define( 'LIB_PATH', $root );

require_once( LIB_PATH . 'libs/blog/BlogPage.php' );

// blog 入口。
$app = new BlogPage( $url_info, $data );
$app->run();