<?php
require_once( LIB_PATH . 'libs/Spyc.php' );

/**
 * Markdown Model
 */
class MdModel implements arrayaccess {
    private $_raw;
    private $_filepath;
    private $_loaded = false;

    private $_attr = array();

    public function MdModel( $filepath ) {
        if ( !file_exists( $filepath ) ) {
            throw new Exception( "$filepath file does'\t exist!" );
        }

        $this->_filepath = $filepath;
    }

    public function getAbstract() {
        return  $this->printTruncated(200, $this->content);
    }

    private function printTruncated($maxLength, $html, $isUtf8=true) {
        $printedLength = 0;
        $position = 0;
        $tags = array();
        $ret = '';

        // For UTF-8, we need to count multibyte sequences as one character.
        $re = $isUtf8
            ? '{</?([a-z]+)[^>]*>|&#?[a-zA-Z0-9]+;|[\x80-\xFF][\x80-\xBF]*}'
            : '{</?([a-z]+)[^>]*>|&#?[a-zA-Z0-9]+;}';

        while ($printedLength < $maxLength && preg_match($re, $html, $match, PREG_OFFSET_CAPTURE, $position))
        {
            list($tag, $tagPosition) = $match[0];

            // Print text leading up to the tag.
            $str = substr($html, $position, $tagPosition - $position);
            if ($printedLength + strlen($str) > $maxLength)
            {
                $ret .= substr($str, 0, $maxLength - $printedLength);
                $printedLength = $maxLength;
                break;
            }

            $ret .= $str;

            $printedLength += strlen($str);
            if ($printedLength >= $maxLength) break;

            if ($tag[0] == '&' || ord($tag) >= 0x80)
            {
                // Pass the entity or UTF-8 multibyte sequence through unchanged.
                $ret .= $tag;
                $printedLength++;
            }
            else
            {
                // Handle the tag.
                $tagName = $match[1][0];
                if ($tag[1] == '/')
                {
                    // This is a closing tag.

                    $openingTag = array_pop($tags);
                    assert($openingTag == $tagName); // check that tags are properly nested.

                    $ret .= $tag;
                }
                else if ($tag[strlen($tag) - 2] == '/')
                {
                    // Self-closing tag.
                    $ret .= $tag;
                }
                else
                {
                    // Opening tag.
                    $ret .= $tag;
                    $tags[] = $tagName;
                }
            }

            // Continue after the tag.
            $position = $tagPosition + strlen($tag);
        }

        // Print any remaining text.
        if ($printedLength < $maxLength && $position < strlen($html))
            $ret .= substr($html, $position, $maxLength - $printedLength);

        $ret .= '...'.' <a href="/blog/'.$this->path.'">阅读更多&raquo;</a>';

        // Close any open tags.
        while (!empty($tags))
            $ret .= sprintf('</%s>', array_pop($tags));

        return $ret;
    }


    private function _load() {

        if ( $this->_loaded ) {
            return;
        }

        $filepath = $this->_filepath;
        $this->_raw = $content = file_get_contents( $filepath );

        $ymlRegx = '/^<\!\-+([\s\S]+?)\-+>/';
        $attr = &$this->_attr;
        if ( preg_match($ymlRegx, $content, $mathes) ) {
            if($mathes[1]) {
                $data = Spyc::YAMLLoadString($mathes[1]);
                $attr = array_merge($attr, $data);
            }
            $content = preg_replace($ymlRegx, '', $content);
        }

        $this->content = trim($content);
        $this->_loaded = true;
    }

    public function __get( $key ) {

        // 延迟加载，只有在用的时候才读取。
        $this->_load();

        $getter='get'.ucfirst($key);

        if ( method_exists( $this,$getter ) ) {
            return $this->$getter();
        } elseif ( isset( $this->_attr[ $key ] ) ) {
            return $this->_attr[ $key ];
        }

        return null;
    }

    public function __set( $key, $val ) {
        $this->_attr[ $key ] = $val;

        if ( $val === null ) {
            unset( $this->_attr[ $key ] );
        }

        return $val;
    }

    public function offsetSet($offset, $value) {
        if (is_null($offset)) {
            // do nonthing
        } else {
            $this->$offset = $value;
        }
    }
    public function offsetExists($offset) {
        return $this->$offset === null;
    }
    public function offsetUnset($offset) {
        $this->$offset = null;
    }
    public function offsetGet($offset) {
        return $this->$offset;
    }
}