<?php

//Moving Javascript to footer automatic
/**
 * Filter HTML code and leave allowed/disallowed tags only
 *
 * @param string 	$text 	Input HTML code.
 * @param string 	$tags 	Filtered tags.
 * @param bool 		$invert Define whether should leave or remove tags.
 * @return string Filtered tags
 */
function theme_strip_tags_content($text, $tags = '', $invert = false) {

    preg_match_all( '/<(.+?)[\s]*\/?[\s]*>/si', trim( $tags ), $tags );
    $tags = array_unique( $tags[1] );

    if ( is_array( $tags ) AND count( $tags ) > 0 ) {
        if ( false == $invert ) {
            return preg_replace( '@<(?!(?:'. implode( '|', $tags ) .')\b)(\w+)\b.*?>.*?</\1>@si', '', $text );
        }
        else {
            return preg_replace( '@<('. implode( '|', $tags ) .')\b.*?>.*?</\1>@si', '', $text );
        }
    }
    elseif ( false == $invert ) {
        return preg_replace( '@<(\w+)\b.*?>.*?</\1>@si', '', $text );
    }

    return $text;
}

/**
 * Generate script tags from given source code
 *
 * @param string $source HTML code.
 * @return string Filtered HTML code with script tags only
 */
function theme_insert_js($source) {

    $out = '';

    $fragment = new DOMDocument();
    $fragment->loadHTML( $source );

    $xp = new DOMXPath( $fragment );
    $result = $xp->query( 'script' );

    $scripts = array();
    $scripts_src = array();
    foreach ( $result as $key => $el ) {
        $src = $result->item( $key )->attributes->getNamedItem( 'src' )->value;
        if ( ! empty( $src ) ) {
            $scripts_src[] = $src;
        } else {
            $type = $result->item( $key )->attributes->getNamedItem( 'type' )->value;
            if ( empty( $type ) ) {
                $type = 'text/javascript';
            }

            $scripts[$type][] = $el->nodeValue;
        }
    }

    //used by inline code and rich snippets type like application/ld+json
    foreach ( $scripts as $key => $value ) {
        $out .= '<script type="'.$key.'">';
        foreach ( $value as $keyC => $valueC ) {
            $out .= "\n".$valueC;
        }
        $out .= '</script>';
    }

    //external script
    foreach ( $scripts_src as $value ) {
        $out .= '<script src="'.$value.'"></script>';
    }

    return $out;
}

?>
