<?php 
session_start();
    if(isset($_SESSION["Valores"])){
        $valores = $_SESSION["Valores"];
    }else{ 
        $valores = array();
    }
?>

<html>
    <form method="post">
    Numero: <input type="numero" name="num" name="oper">
            <input type="submit" value="ADD" name="oper">
            <input type="submit" value="SORT" name="oper">
            <input type="submit" value="DEL" name="oper">
            <input type="submit" value="CLEAR" name="oper">
    </form>


<ul>
    <?php 
        if(isset($_POST["num"])){
            switch($_POST["oper"]){
                case "ADD":
                    $valores[] = $_POST["num"];
                    break;
                case "SORT":
                    sort($valores);
                    break;
                case "DEL"
                $indice = array_search($_POST["num"],$valores);
                    if($indice!=""){
                        array_splice($valores,$indice,1);
                    }
                    break;
                case"CLEAR":
                    $valores = array();
                    unset($_SESSION["valores"]);
                    session_destroy();
                    break;
            }
        }
        if(count($valores)>0){
            for($i=0; i<li count($valores); i++){
                echo ("<li>". $valores[$i]."</li>");  }}

                $_SESSION["valores"] = $valores;
    ?>
            </ul>
          </html> 









</ul>