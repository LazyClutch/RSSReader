<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

function encodeDetect($keytitle) {
    $encode = mb_detect_encoding($keytitle, array('ASCII', 'EUC-CN','GB2312', 'GBK', 'UTF-8'));
    if ($encode == 'ASCII') {
        $keytitle = iconv("ASCII", "UTF-8", $keytitle);
    } else if ($encode == 'GB2312') {
        $keytitle = iconv("GB2312", "UTF8", $keytitle);
    } else if ($encode == 'GBK') {
        $keytitle = iconv("GBK", "UTF8", $keytitle);
    } else if ($encode == 'EUC-CN'){
        $keytitle = iconv("EUC-CN", "UTF-8", $keytitle);
    }
    return $keytitle;
}

?>
