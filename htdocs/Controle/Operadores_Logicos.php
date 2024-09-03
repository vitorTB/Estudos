<div class="titulo">Operadores Lógicos</div>

<?php
var_dump(true);
echo '<br>';
var_dump(!true);

echo "<p class='divissao'>Tabela verdade</p><hr>";

$PagouPrevidencia = true;
$idadeF= 50;
$sexo= 'M';
$idadeM= 65;

$homempode_Aposentar = $PagouPrevidencia && ($idadeM >= 65 && $sexo === 'M');
$mulherpode_Aposentar = $PagouPrevidencia && ($idadeF >=60&& $sexo ==='F');
$podeSeAposentar = $homempode_Aposentar || $mulherpode_Aposentar;

if($podeSeAposentar){
    echo 'Pode se aposentar<br>';
}if($homempode_Aposentar){
    echo 'Homem pode se aposentar';
}else if($mulherpode_Aposentar){
    echo 'Mulher pode se aposentar';
}
else{
    echo 'Não pode se aposentar';
}

