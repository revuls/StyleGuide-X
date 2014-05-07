<?php

namespace lib;

// Configuration Class
class FExxx {
    const HTML_PATH = '../html';

    /*
     *  Get text between two params
     */
    public static function remove_html_comments($content = '') {
        return preg_replace('/<!--(.|\s)*?-->/', '', $content);
    }

    /*
     *  Get text between two params
     */
    public static function extract_unit($string, $start, $end) {
        $pos = stripos($string, $start);
        $str = substr($string, $pos);
        $str_two = substr($str, strlen($start));
        $second_pos = stripos($str_two, $end);
        $str_three = substr($str_two, 0, $second_pos);
        $unit = trim($str_three); // remove whitespaces return $unit;
        return $unit;
    }

    /*
     *  Get all the Elements by Folder
     */
    public static function getAllFrom($folder) {
        $iterator = new \DirectoryIterator(self::HTML_PATH."/".$folder);
        $files = new \RegexIterator($iterator,'/\\'.".html".'$/');
        foreach($files as $file){
            if($file->isFile()){
                $code = file_get_contents(self::HTML_PATH."/".$folder."/".$file);
                $arrayTemp = explode("-", $file);
                $number = intval($arrayTemp[0]);
                $slug = ucwords(str_replace(".html", "", $arrayTemp[1]));
                $title = str_replace("_", " ", $slug);
                $comments = self::extract_unit($code,"<!--", "-->");

                $array[$number]['title'] = $title;
                $array[$number]['slug'] = $slug;
                $array[$number]['comments'] = $comments;
                $array[$number]['content'] = self::remove_html_comments($code);
            }
        }
        if (isset($array))
            return $array;
    }

    /*
     *  Get Sections for the Top Menu
     */
    public static function getSections(){
        $sections = array_diff(scandir("../html/"), array('..', '.'));
        return $sections;
    }

}