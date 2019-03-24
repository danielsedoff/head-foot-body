<?php

/* last available page */
$maxpage = 15; 

/* link format: head-foot-body.php?p=2 */
$pagenum = $_GET['p'];

/* No page specified -> main page, 0.txt */
if(!is_int($pagenum)) {
    $pagenum = 0;
} else {
    $pagenum = intval($pagenum);
    if(($pagenum < 0) || ($pagenum > $maxpage)) {
        die("404");
    }
}

$head = file_get_contents('head_t.txt');
$foot = file_get_contents('foot_t.txt');
$body = file_get_contents($pagenum . '.txt');

$page = $ head . $foot . $body;

echo($page);

?>


