<?php
require_once 'includes/helpers.php';
?>
<!-- BARRA LATERAL -->
<aside id="barraLateral">
    <?php if(isset($_SESSION['usuario'])):?>
        <div id="usuario_logeado" class="bloque">
            <span class="green">&nbsp;</span>
            <h3><?php echo $_SESSION['usuario']['nombre'].' '.$_SESSION['usuario']['apellidos'];?></h3>
            <a href="logout.php">Cerrar Sesión</a>
        </div>
    <?php endif;?>
        <div id="login" class="bloque">
            <h3>Identificate</h3>
            <?php if(isset($_SESSION['error_login'])):?>
                <div class="alerta alerta-error">
                    <h3><?php echo $_SESSION['error_login'];?></h3>

                </div>
            <?php endif;?>
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
        <?php if(isset($_SESSION['completado'])):?>
            <div>
                <?php echo $_SESSION['completado']?>
            </div>
        <?php elseif(isset($_SESSION['errores']['general'])):?>
            <div>
                <?php echo $_SESSION['errores']['general'];?>
            </div>
        <?php elseif(isset($_SESSION['errores']['registrado'])):?>
            <div>
                <?php echo $_SESSION['errores']['registrado'];?>
            </div>
        <?php endif;?>
        <form action="../registro.php" method="post">
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
