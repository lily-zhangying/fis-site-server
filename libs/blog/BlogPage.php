<?php

require_once( LIB_PATH . 'libs/blog/Pagination.php' );
require_once( LIB_PATH . 'libs/blog/MdCollection.php' );

/**
 * Blog page conroller.
 */
class BlogPage {

    private $_urlInfo;
    private $_variables;

    public function assign( $key, $val ) {
        $this->_variables[ $key ] = $val;
    }

    public function BlogPage( &$url_info, &$data ) {
        $this->_urlInfo = &$url_info;
        $this->_variables = &$data;
    }

    private function _getRequestVars() {
        $vars = array();

        $query = $_SERVER[ 'REQUEST_URI' ];
        list( $prefix, $query ) = explode('?', $query, 2);

        foreach( explode('&', $query) as $part ) {
            if ( !$part ) {
                continue;
            }

            list( $key, $val ) = explode('=', $part);
            $vars[$key] = urldecode($val);
        }

        return $vars;
    }

    private function listAction() {
        $collection = new MdCollection( 'blog' );
        $collection->sort();

        $p = new Pagination( $collection );
        $p->setParams($this->_getRequestVars() );

        // 添加模板变量
        $this->assign( 'collection', $p->fetch() );
        $this->assign( 'pagination', $p->toArray() );
        $this->assign( 'title', 'Blog' );

        // 设置模板信息
        $this->_urlInfo['type'] = 'blog';
        $this->_urlInfo['tpl'] = 'fis-site/page/blog/list.tpl';
    }

    private function detailAction( $path ) {
        $file = DOC_PATH.'/blog/'.$path.'.html';
        $model = new MdModel( $file );
        $model->path = substr(str_replace(DOC_PATH.'/blog/', '', $file), 0, -5);
        $this->assign( 'blog', $model );
        $this->assign( 'title', $model->title );
        $this->assign( 'description', $model->description );
        $this->assign( 'content', $model->content );
        $this->assign( 'toc', $model->toc );

        $this->_urlInfo['type'] = 'blog';
        $this->_urlInfo['tpl'] = 'fis-site/page/blog/detail.tpl';

        $this->_variables['navs']['/blog']['active'] = true;
    }

    public function run() {
        $path = urldecode($this->_urlInfo['path']);
        list($prefix, $path) = explode('/', ltrim($path, '/'), 2);

        if ( !$path ) {
            $this->listAction();
        } else if ( is_file( DOC_PATH.'/blog/'.$path.'.html' ) ) {
            $this->detailAction( $path );
        }
    }

}
