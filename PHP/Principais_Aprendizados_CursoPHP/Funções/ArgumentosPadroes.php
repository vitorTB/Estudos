<div class="titulo">Argumento padroes  </div>

<?php

function menu($comida, $bebida = "agua"){

    return "Você está comendo $bebida e bebendo $bebida.";
}


echo menu('',"Arroz");