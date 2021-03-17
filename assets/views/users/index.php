
    <?php
        require_once 'assets/views/partials/message.php';
    ?>

    <a class="button" href="index.php?a=create">Agregar nuevo usuario</a>

    <br><br>
    
    <div class="div_table">
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Nombre</th>
                    <th>Fecha de Creación</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($data['users'] as $user){ ?>
                    <tr>
                        <td><?php echo $user['id'] ?></td>
                        <td><?php echo $user['username'] ?></td>
                        <td><?php echo $user['email'] ?></td>
                        <td><?php echo $user['name'] ?></td>
                        <td><?php echo $user['created_at'] ?></td>
                        <td>
                            <a href="index.php?a=edit&id=<?php echo $user['id']?>">Modificar</a>
                            <a href="index.php?a=destroy&id=<?php echo $user['id']?>" onclick="return confirm('¿Seguro deseas eliminar este usuario?')">Eliminar</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>