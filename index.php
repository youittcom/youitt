<?php
require_once 'includes/cabecera.php';
require_once 'includes/lateral.php'?>
<!-- CAJA PRINCIPAL -->
<div id="cajaPrincipal">
    <?php if(isset($_SESSION['usuario'])){?>
        <div>
            <p> PAGINA DEL PERFIL DEL USUARIO</p>
        </div>
    <?php }else{?>
        <h1>Ultimas Entradas</h1>
        <article class="entrada">
            <h2>Titulo de la Entrada</h2>
            <p>Contrary to popular belief, Lorem Ipsum is not simply random text.
                It has roots in a piece of classical Latin literature from 45 BC,
                making it over 2000 years old. Richard McClintock, a Latin professor
                at Hampden-Sydney College in Virginia, looked up one of the more
                obscure Latin words, consectetur, from a Lorem Ipsum passage,
                and going through the cites of the word in classical literature,
                discovered the undoubtable source. Lorem Ipsum comes from sections
                1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes
                of Good and Evil) by Cicero, written in 45 BC. This book is a
                treatise on the theory of ethics, very popular during the Renaissance.
                The first line of Lorem Ipsum, "Lorem ipsum dolor sit am
                et..", comes from a line in section 1.10.32.
            </p>
        </article>
        <article class="entrada">
            <h2>Titulo de la Entrada</h2>
            <p>Contrary to popular belief, Lorem Ipsum is not simply random text.
                It has roots in a piece of classical Latin literature from 45 BC,
                making it over 2000 years old. Richard McClintock, a Latin professor
                at Hampden-Sydney College in Virginia, looked up one of the more
                obscure Latin words, consectetur, from a Lorem Ipsum passage,
                and going through the cites of the word in classical literature,
                discovered the undoubtable source. Lorem Ipsum comes from sections
                1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes
                of Good and Evil) by Cicero, written in 45 BC. This book is a
                treatise on the theory of ethics, very popular during the Renaissance.
                The first line of Lorem Ipsum, "Lorem ipsum dolor sit am
                et..", comes from a line in section 1.10.32.
            </p>
        </article>
        <article class="entrada">
            <h2>Titulo de la Entrada</h2>
            <p>Contrary to popular belief, Lorem Ipsum is not simply random text.
                It has roots in a piece of classical Latin literature from 45 BC,
                making it over 2000 years old. Richard McClintock, a Latin professor
                at Hampden-Sydney College in Virginia, looked up one of the more
                obscure Latin words, consectetur, from a Lorem Ipsum passage,
                and going through the cites of the word in classical literature,
                discovered the undoubtable source. Lorem Ipsum comes from sections
                1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes
                of Good and Evil) by Cicero, written in 45 BC. This book is a
                treatise on the theory of ethics, very popular during the Renaissance.
                The first line of Lorem Ipsum, "Lorem ipsum dolor sit am
                et..", comes from a line in section 1.10.32.
            </p>
        </article>
        <article class="entrada">
            <h2>Titulo de la Entrada</h2>
            <p>Contrary to popular belief, Lorem Ipsum is not simply random text.
                It has roots in a piece of classical Latin literature from 45 BC,
                making it over 2000 years old. Richard McClintock, a Latin professor
                at Hampden-Sydney College in Virginia, looked up one of the more
                obscure Latin words, consectetur, from a Lorem Ipsum passage,
                and going through the cites of the word in classical literature,
                discovered the undoubtable source. Lorem Ipsum comes from sections
                1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes
                of Good and Evil) by Cicero, written in 45 BC. This book is a
                treatise on the theory of ethics, very popular during the Renaissance.
                The first line of Lorem Ipsum, "Lorem ipsum dolor sit am
                et..", comes from a line in section 1.10.32.
            </p>
        </article>
        <div id="verTodas">
            <a href="">Ver Todas</a>
        </div>
    <?php };?>
</div>

<?php require_once 'includes/pie.php'?>

