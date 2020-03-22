<?php
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
            <label>Apellidos</label>
            <input type="text" name="apellidos"/>
            <label>Email</label>
            <input type="email" name="email"/>
            <label>Password</label>
            <input type="password" name="password"/>
            <input type="submit" value="Registro">
        </form>
    </div>
</aside>
