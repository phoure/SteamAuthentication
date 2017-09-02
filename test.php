<?php
$file_name = "http://steamcommunity.com/inventory/76561198192535217/730/2?l=thai";
$file_content = file_get_contents($file_name);
echo $file_content . "<br/>";

/* Printing file content including HTML tags */
$html_content = str_replace("<","&lt;",$file_content);
$html_content = str_replace(">","&gt;",$html_content);
$html_content = str_replace("\r\n","<br/>",$html_content);
echo $html_content;
?>
