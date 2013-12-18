<?php

require_once('simple_html_dom.php');
$mac = '00:13:02:7c:f9:ba';
$mac_find = file_get_html("http://www.coffer.com/mac_find/?string=".urlencode($mac));
$td = $mac_find->find('td[class="table2"]',3)->innertext;
echo $td;

?>
