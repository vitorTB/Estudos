<div class="titulo">$_POST</div>
<div class="descripcion"><?= implode(', ', $_POST) ?></div>
<?php
// O $_POST é uma superglobal do PHP que armazena dados enviados pelo método POST de um formulário.
// Os dados são armazenados em um array associativo, onde as chaves são os nomes dos campos do formulário e os valores são os dados enviados.
// Neste exemplo, estamos usando a função implode() para concatenar os valores do array $_POST em uma string, separados por vírgulas.
// A função array_map() é usada para aplicar a função utf8_encode() a cada valor do array $_POST, garantindo que os dados sejam exibidos corretamente em UTF-8.
