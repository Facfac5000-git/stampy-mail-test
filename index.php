<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stampy Mail User Module</title>
    <link href="css/styles.css" rel="stylesheet">
    <script src='js/scripts.js'></script>
</head>
<body>

    <div id="main">

        <h1>¡Bienvenido al módulo de Usuarios de StampyMailTest!</h1>
    
        <?php

            require_once "assets/db/connection.php";
            require_once "assets/controllers/UserController.php";

            $controller = new UserController();

            if(!isset($_SESSION)) { 
                session_start(); 
            } 
            //$_SESSION['username'] = 'Facfac5000';



            if(isset($_GET['a']) && $_GET['a'] == 'authenticate'){
                $controller->authenticate();
            }else if(!isset($_SESSION['username'])){
                $controller->login();    
            }else if(!isset($_GET['a'])){
                $controller->index();    
            }else{
                $action = $_GET['a'];
                $controller->$action();
            }
                        
        ?>

    </div>

    <?php require_once "assets/views/partials/header.php"; ?>
    <?php require_once "assets/views/partials/footer.php"; ?>

</body>
</html>


