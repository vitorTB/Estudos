<div class="titulo">Switch</div>

<form action="#" method='POST'>
    <label for="categoria">Tipo de carro:</label>
    <input type="text"id="categoria" name="categoria">
<button type="submit">enviar</button>

</form>



<?php
if(($_POST['categoria'])){
    $categoria = $_POST['categoria'];


    switch($categoria){
        case 'luxo':
            $carros = 'Mercedes';
            $preco = 40000;
            break;
        case 'pobre':
            $carros = 'Uno';
            $preco = 3500;
            break;
        default:
            $carros = 'Mobi';
            $preco = 63000;
            break;
        }

    }
        $precoformatado= number_format($preco, 2,',','.');

        echo "<p>Carro: $carros<br> Preco: $precoformatado</p> ";

// $categoria = '???';
// switch($categoria){
//     case 'Luxo':
//         $carro='Mercedes';
//         $preco= 240000;
//         break;
// }
