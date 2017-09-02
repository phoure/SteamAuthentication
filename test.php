<?php

$json = file_get_contents('http://sanook.com');
$obj = json_decode($json);
echo $obj->access_token;
        
        ?>
