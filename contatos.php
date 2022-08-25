<?php 

include_once "includes/_head.php";
include_once "includes/_header.php";

?>

    <div>

        <form action="/formulario-contato" method="post">

            <div>
                <label for="nome">Nome:</label>
                <input type="texto" id="nome" name="nome_usuario">
            </div>
            
            <div>
                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email_usuario">
            </div>
            
            <div>
                <label for="texto">Texto:</label>
                <textarea id="texto" name="texto_usuario"></textarea>
            </div>

            <button class="botão" type="submit">Enviar</button>

        </form>

    </div>

<?php 

include_once "includes/_footer.php";

?>