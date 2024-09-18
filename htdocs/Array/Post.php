<div class="titulo">$_POST</div>
<div class="descripcion"><?= implode(', ', $_POST) ?></div>

// O $_POST é uma superglobal do PHP que armazena dados enviados pelo método POST de um formulário.
// Os dados são armazenados em um array associativo, onde as chaves são os nomes dos campos do formulário e os valores são os dados enviados.
// Neste exemplo, estamos usando a função implode() para concatenar os valores do array $_POST em uma string, separados por vírgulas.
// A função array_map() é usada para aplicar a função utf8_encode() a cada valor do array $_POST, garantindo que os dados sejam exibidos corretamente em UTF-8.
<div class="titulo">$_Post</div>

 <form action="#" method="post">
    <input type="text" name="nome">
    <input type="text" name="sobrenome">
    <button>Enviar</button>
</form>

<style>
    form>*{
        font-sinze: 1.8rem;
    }
</style>

<?php

print_r($_POST);