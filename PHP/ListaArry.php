<?php 
session_start();
    if(isset($_SESSION["Valores"])){
        $Valores = $_SESSION["Valores"];
    }else { 
        $Valores = array();
    }

        if(isset($_POST["num"])){
            switch($_POST["oper"]){
                case "ADD":
                    $Valores[] = $_POST["num"];
                    break;
                case "SORT":
                    sort($Valores);
                    break;
                    case "DEL":
                        $indice = array_search($_POST["num"], $Valores);
                        if($indice !== false){
                            array_splice($Valores, $indice, 1);
                        }
                        break;
                case"CLEAR":
                    $Valores = array();
                    unset($_SESSION["Valores"]);
                    session_destroy();
                    break;
            }
        }
        $_SESSION["Valores"] = $Valores;

        ?>
        
        <html>
    <form method="post">
    Numero: <input type="number" name="num" valor="num">
            <input type="submit" value="ADD" name="oper">
            <input type="submit" value="SORT" name="oper">
            <input type="submit" value="DEL" name="oper">
            <input type="submit" value="CLEAR" name="oper">
    </form>


        <ul>
        
        <?php
        if(count($Valores) > 0){
            for($i=0 ; $i<count($Valores); $i++){
                echo "<li>".$Valores[$i]."</li>";}
                echo($i);
                echo(count($Valores));
            }  
            ?>
        </ul>
     </html> 
       








