<div class="titulo">Desafio Switch</div>


<form action="#" method="post">
    <input type="text" name="parametro">
    <select name="conversao" id="conversao">
        <option value="Km->Milha">Km->Milha</option>
        <option value="Milha->Km">Milha->Km</option>
        <option value="Metro->Km">Metro->Km</option>
        <option value="Km->Metro">Km->Metro</option>
        <option value="Cel->Far">Celsius->Fahrenheit</option>
    </select>
    <button>Calcular</button>
</form>

<?php
   const FAZ_COM_VIRUGULA = 1.609;
   const FAZ_SEM_VIRUGLA = 1000;
   
   if(isset($_POST['conversao'])){
    $parametro = (int)$_POST['parametro'];
    $conversao = $_POST['conversao'];
    

    switch($conversao){
        case"Km->Milha":
            $resultado = $parametro / FAZ_COM_VIRUGULA;
            break;
        case"Milha->Km":
            $resultado = $parametro * FAZ_COM_VIRUGULA;
            break;
        case"Metro->Km":
            $resultado = $parametro / FAZ_SEM_VIRUGLA;
            break;
        case"Km->Metro":
            $resultado = $parametro * FAZ_SEM_VIRUGLA;
            break;
        case"Cel->Far":
            $resultado = ($parametro*1.8)+32;
            break;
    }
     echo "<p> O resuldade de $parametro, $conversao, $resultado </p>";
}  


