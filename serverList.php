<?php
    // recupero file
    $files_list = file_get_contents('list.json');
    
    header('Content-Type: application/json');
    echo $files_list;
?>