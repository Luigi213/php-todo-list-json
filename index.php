<?php 

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.3.0/axios.min.js" integrity="sha512-A6BG70odTHAJYENyMrDN6Rq+Zezdk+dFiFFN6jH1sB+uJT3SYMV4zDSVR+7VawJzvq7/IrT/2K3YWVKRqOyN0Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">        
        <link rel="stylesheet" href="./css/style.css">
        <title>Document</title>
    </head>
    <body>
        <div id="app">
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="text-secondary">
                        <h1>Todo List</h1>
                    </div>
                    <div class="col-12 d-flex align-items-center flex-column w-25 bg-white rounded-1">
                        <div class="text-black border-bottom w-100 p-4" v-for="list in toDoList">
                            {{list.language}}
                        </div>
                    </div>
                    <div class="col-12 mt-4">
                        <div class="row justify-content-center">
                            <div class="col-sm-3">
                                <input class="form-control" type="text" v-model="lang" @keyup.enter="addList">
                            </div>
                            <div class="col-sm-1">
                                <button class="btn btn-warning" type="sumbit" @click="addList">Invia</button>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
        <script type="text/javascript" src="./js/script.js"></script>
    </body>
</html>