<?php

class filter_gistembed extends moodle_text_filter {
    
    public function filter($text, array $options = array()) { 
        $cnt = preg_match_all('/https?:\/\/gist\.github\.com\/(.*?)\/([a-f0-9]*)/', $text, $matches);
        if ($cnt) {
            for ($i=0; $i<$cnt; ++$i) {
                $script = '<script src="https://gist.github.com/' . $matches[1][$i] . '/' . $matches[2][$i] . '.js"></script>'; 
                 $text = str_replace($matches[0][$i], $script, $text); 
            }
        }
        return $text; 
    }
    
}

