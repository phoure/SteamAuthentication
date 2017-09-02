<?php

function debug($var){	
     // หาที่มาและบรรทัดของไฟล์ที่เรียกใช้ฟังก์ชัน debug 
     $trace = reset(debug_backtrace());	
     $trace['file'] = str_replace(str_replace('/','\\',$_SERVER['DOCUMENT_ROOT']).'\\','',$trace['file']);	
     echo $trace['file']." (line ".$trace['line'].")<br/>";	

     // แสดงค่าที่เก็บในตัวแปร
     echo "<pre>";
     print_r($var);
     echo "</pre>";
     return $var;	
}

/* Printing file content including HTML tags */
$html_content = str_replace("<","&lt;",$file_content);
$html_content = str_replace(">","&gt;",$html_content);
$html_content = str_replace("\r\n","<br/>",$html_content);
$html_content = json_decode($html_content, true);
debug($html_content);
?>
