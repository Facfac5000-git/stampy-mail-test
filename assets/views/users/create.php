

    <h3>Completa los datos del formulario para generar un nuevo usuario:</h3>

    <?php
        require_once 'assets/views/partials/message.php';
    ?>

    <br><br>

    <div class="div_form">
        <form id="new_user" name="new_user" method="POST" action="index.php?a=store" autocomplete="off">
            <div class="div_input">
                <label for="username">Username: </label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="div_input">
                <label for="email">Email: </label>
                <input type="text" id="email" name="email" required>
            </div>
            <div class="div_input">
                <label for="name">Nombre: </label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="div_input">
                <label for="password">Contraseña: </label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="div_input">
                <label for="password_confirm">Confirmar contraseña: </label>
                <input type="password" id="password_confirm" name="password_confirm" required>
            </div>
            <div class="div_input">
                <input class="button" type="submit" value="Crear nuevo usuario">
            </div>
            <br>
            <div class="div_input">
                <a class="button" href="index.php?a=index">Volver</a>
            </div>
        </form>        


    </div>

