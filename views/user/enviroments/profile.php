<div class="section-profile">
    <div class="">
        <p class="profile-text">PERFIL</p>

        <table>
            <tr> 
            <td>Nombre</td>
            <td>Apellido</td>
            <td>DNI</td>
            </tr>
            <tr>
                <td><?php echo $user->getName() ?></td>
                <td><?php echo $user->getLastName() ?></td>
                <td><?php echo $user->getNationalID() ?></td>
            </tr>
            <tr>

            <td>Correo</td>
            <td>Licencia</td>
            <td>Tipo Licencia</td>
            </tr>
            <tr>

                <td><?php echo $user->getMailAddress() ?></td>
                <td><?php echo $user->getNLicense() ?></td>
                <td><?php echo $user->getTypeLicense() ?></td>

            </tr>
        </table>

        <?php echo $user->getDebts() ?>
    </div>
</div>