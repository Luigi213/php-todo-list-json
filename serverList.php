<?php
    // recupero file
    $files_list = file_get_contents('list.json');

    $new_file_list = json_decode($files_list, true);

    if(isset($_POST['language'])){
        $new_part = $_POST['language'];

        $new_obj = [
            "language" => $new_part,
            "status" => false,
        ];
        $new_file_list[] = $new_obj;
        file_put_contents('list.json', json_encode($new_file_list));
    }
    
    header('Content-Type: application/json');
    echo json_encode($new_file_list);
?>