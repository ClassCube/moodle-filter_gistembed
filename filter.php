<?php

class filter_gistembed extends moodle_text_filter {

    public function filter( $text, array $options = [ ] ) {
        return preg_replace_callback( '/https?:\/\/gist\.github\.com\/(.*?)\/([a-f0-9]*)(\?file=[^\s<>]*)?/', function($matches) {
            //echo '<pre>' . print_r($matches, true) . '</pre>';
            $src = 'https://gist.github.com/' . $matches[1] . '/' . $matches[2] . '.js';
            if (!empty($matches[3])) {
                $src .= $matches[3];
            }
            return '<script src="' . $src . '"></script>';
        }, $text );
    }
}
