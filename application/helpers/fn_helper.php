<?php

function language($file, $string, $sprintf = '') {
    $obj = & get_instance();
    if (@$_SESSION ['lang'] == '' || @$_SESSION ['lang'] == 'th') {
        @$_SESSION ['lang'] = 'th';
        @$_SESSION ['tLangID'] = 1;
        $lang = 'th';
    } else {
        $lang = $_SESSION ['lang'];
    }
    $obj->lang->load($file, $lang);
    $rs = sprintf($obj->lang->line($string), $sprintf);
    
    if ($rs) {
        return $rs;
    } else {
        return $string;
    }
}

function nn(){
    return 'mm';
}