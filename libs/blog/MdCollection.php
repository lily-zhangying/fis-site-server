<?php

require_once( LIB_PATH . 'libs/blog/MdModel.php' );
require_once( LIB_PATH . 'libs/blog/Pagination.php' );

/**
 * Markdown Collection.
 */
class MdCollection implements Countable {
    private $_list = array();
    private $_sortAttr = 'date';

    public function MdCollection( $path ) {
        $model = null;

        if (is_dir( DOC_PATH.'/'.$path )) foreach( glob( DOC_PATH.'/'.$path.'/*.html' ) as $file ) {
            $model = new MdModel( $file );
            $model->path = substr(str_replace(DOC_PATH.'/'.$path.'/', '', $file), 0, -5);
            $this->_list[] = $model;
        }

        $this->sort();
    }

    public function sort( $attr = 'date' ) {
        $this->_sortAttr = $attr;
        usort( $this->_list, array($this, '_cmp'));
    }

    public function count() {
        return count( $this->_list );
    }

    public function range( $start = 0, $len = 10 ) {
        return array_slice( $this->_list, $start, $len );
    }

    private function _cmp( $a, $b ) {
        $attr = $this->_sortAttr;

        switch ( $attr ) {
            case 'date':
                return strtotime($b->$attr) - strtotime($a->$attr);
                break;

            default:
                return strcmp($a->$attr, $b->$attr);
        }
    }
}