<div class="titulo">Desafio Tabela #2</div>

<form action="#" method="post">
    <label for="colunas">Colunas</label>
        <input type="number" value =<?=$_POST['colunas']?? 5 ?> name="colunas">
    <label for="linhas">Linhas: </label>
        <input type="number" value =<?=$_POST['linhas']?? 5 ?> name="linhas">
        <button>enviar</button>
</form>

<table>
<?php
    echo'<br>';
    if(isset($_POST['linhas'])&& isset($_POST['colunas'])){
    $linhas = intval($_POST['linhas']);
    $colunas = intval($_POST['colunas']);
    $num = 1;

    if(!$linhas)$linhas = 5;
    if(!$colunas)$colunas = 5;

    for($i = 0; $i < $linhas; $i++){
        echo"<tr>";
        for($j=0; $j < $colunas; $j++ ){
            echo"<td>$num</td>";
            $num++;
        }
        echo"</tr>";

    }
}
?>
</table>


<style>

    form * {
        font-size:1.8rem;
    }

    table{
        border: 1px solid #444;
        border-collapse: collapse;
        margin:2px 0px;
    }
    table tr{
        border: 1px solid #444;
    }
    table td {
        padding: 10px 20px;
    }
</style>