
    <h3>Sobrescribe los datos en el formulario para cambiar alguno de los campos del usuario:</h3>

    <?php
        require_once 'assets/views/partials/message.php';
    ?>

    <br><br>

    <div class="div_form">
        <form id="new_user" name="new_user" method="POST" action="index.php?a=update" autocomplete="off">
            <input type="hidden" id="user_id" name="user_id" value="<?php echo $data['user']['id']?>" required>
            <div class="div_input">
                <label for="username">Username: </label>
                <input type="text" id="username" name="username" value="<?php echo $data['user']['username']?>" required>
            </div>
            <div class="div_input">
                <label for="email">Email: </label>
                <input type="text" id="email" name="email" value="<?php echo $data['user']['email']?>" required>
            </div>
            <div class="div_input">
                <label for="name">Nombre: </label>
                <input type="text" id="name" name="name" value="<?php echo $data['user']['name']?>" required>
            </div>
            <div class="div_input">
                <input class="button" type="submit" value="Actualizar datos de usuario">
            </div>
            <br>
            <div class="div_input">
                <a class="button" href="index.php?a=index">Volver</a>
            </div>
        </form>
    </div>
    
