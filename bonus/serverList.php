<?php
    // recupero file
    $files_list = file_get_contents('list.json');
    // creo un'altro file per poterlo riutilizzare 
    $new_file_list = json_decode($files_list, true);
    // faccio il controllo nel caso dovessi aggiungere un nuovo oggetto 
    if(isset($_POST['language'])){
        $new_part = $_POST['language'];

        $new_obj = [
            "language" => $new_part,
            "status" => false,
        ];
        $new_file_list[] = $new_obj;
        file_put_contents('list.json', json_encode($new_file_list));
    }
    // stampo 
    header('Content-Type: application/json');
    echo json_encode($new_file_list);
?>