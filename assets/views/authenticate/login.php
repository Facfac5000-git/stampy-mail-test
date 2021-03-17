
    
    <h1>Por favor, inicia sesión para comenzar a utilizar el módulo de usuarios:</h1>

    <?php
        require_once 'assets/views/partials/message.php';
    ?>

    <div class="div_form">
        <form action="index.php?a=authenticate" method="post">
            <div class="div_input">
                <label for="user">Email o Username: </label>
                <input type="text" name="user" id="user" required>
            </div>
            <div class="div_input">
                <label for="user">Password: </label>
                <input type="password" name="pass" id="pass" required>
            </div>
            <div class="div_input">
                <input class="button" type="submit" value="Login">
            </div>
        </form>
    </div>