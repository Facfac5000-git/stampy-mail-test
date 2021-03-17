<?php


?>

<div class="header">
    <img class="header_logo" src="img/stampy_mail_logo.jpg" alt="Logo de Stampy Mail">

    <?php if(isset($_SESSION['username']) && $_GET['a'] != 'logout') { ?>
        <h2 class="header_text">Bienvenido <?php echo $_SESSION['username'] ?> - <a href="index.php?a=logout">Logout</a></h2>
    <?php } ?>

</div>