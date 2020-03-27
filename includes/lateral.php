<?php
require_once 'includes/helpers.php';
?>
<!-- BARRA LATERAL -->
<aside id="barraLateral">
    <div id="login" class="bloque">
        <h3>Identificate</h3>
        <form action="login.php" method="post">
            <label>Email</label>
            <input type="email" name="email"/>
            <label>Password</label>
            <input type="password" name="password"/>
            <input type="submit" value="Entrar">
        </form>
    </div>
    <div id="registro" class="bloque">
        <h3>Registro</h3>
        <form action="registro.php" method="post">
            <label>Nombre</label>
            <input type="text" name="nombre"/>
            <?php echo mostrarError($_SESSION['errores'],'nombre'); ?>
            <label>Apellidos</label>
            <input type="text" name="apellidos"/>
            <?php echo mostrarError($_SESSION['errores'],'apellidos'); ?>
            <label>Email</label>
            <input type="email" name="email"/>
            <?php echo mostrarError($_SESSION['errores'],'email'); ?>
            <label>Password</label>
            <input type="password" name="password"/>

            <input type="submit" value="Registro" name="submit">
        </form>
        <?php borrarError() ?>
    </div>
</aside>
