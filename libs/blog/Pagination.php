<?php


class Pagination {

    private $_source;

    private $_params = array();

    private $totalItems = 0;
    private $totalPages = 0;
    private $page = 0;
    private $itemsPerPage = 10;
    private $navigationSize = 5;

    public function Pagination( $source ) {
        $this->_source = $source;

        $this->totalItems = count( $source );
        $this->totalPages = @ceil($this->totalItems/$this->itemsPerPage);
    }

    public function setParams( $params ) {
        if ( isset( $params[ 'p'] ) ) {
            $this->page = intval( $params[ 'p'] );
        }

        $this->page = max( 1, min( $this->totalPages, $this->page) );

        $this->_params = array_merge($this->_params, $params);
    }

    public function fetch() {
        $start = ($this->page - 1) * $this->itemsPerPage;
        return $this->_source->range( $start, $this->itemsPerPage );
    }

    public function toArray() {
        $navigation = array();

        if($this->totalPages>1){

            $halfSet = @ceil($this->navigationSize/2);
            $start = 1;
            $end = ($this->totalPages < $this->navigationSize) ? $this->totalPages : $this->navigationSize;

            $showPrevNextNav = ($this->totalPages > $this->navigationSize) ? true : false;

            if ($this->page >= $this->navigationSize) {
               $start = $this->page - $this->navigationSize + $halfSet + 1;
               $end = $this->page + $halfSet -1;
            }
            if ($end > $this->totalPages) {
                $s = $this->totalPages - $this->navigationSize;
                $start = $s ? $s : 1;
                $end = $this->totalPages;
            }

            $prev = $this->page - 1;
            if ($this->page >= $this->navigationSize && $showPrevNextNav) {
                // First
                $navigation['first'] = $this->getPageUrl( 1 );
                // Prev
                $navigation['prev'] = $this->getPageUrl($prev);
            }

            $navigation[ 'pages' ] = array();

            for ($i = $start; $i <= $end; $i++) {
                $navigation[ 'pages' ][] = array(
                    'page' => $i,
                    'active' => ($i == $this->page),
                    'url' => $this->getPageUrl( $i )
                );
            }

            $next = $this->page + 1;
            if ($next < $this->totalPages && $end < $this->totalPages && $showPrevNextNav ) {
                $navigation[ 'next' ] = $this->getPageUrl( $next );
            }

            if($this->totalPages > $this->navigationSize) {
                $navigation[ 'last' ] = $this->getPageUrl( $this->totalPages );
            }

            $navigation[ 'active' ] = $this->page;

        }

        return $navigation;
    }

    private function getPageUrl( $page ) {
        $params = $this->_params;

        $parts = array();
        $params['p'] = $page;

        foreach( $params as $key => $val ) {
            $parts[] = $key.'='.urlencode($val);
        }

        return join($parts, '&amp;');
    }
}