<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(isset($_GET["error"]))
    echo("<hr/><h2>".$_GET["error"]."</h2><hr/>");
    ?>
    <form action="login.php" method="post">
        <p>login: <input type="text" name="login" /></p>
        <p>senha> <input type="password" name="senha"/></p>
        <input type="submit" value="enviar"/>
    </form>
</body>
</html>
<!-- ESSE PHP MOSTRA A PAGINA SE ESTIVER LOGADO, OU FAZ VOLTAR -->
<?php 
sesseion_start();
if(!isset($_SESSION["usuario"]))
   //redirecionar para o formulario de login.
header("location: form_login.php", true,301);
    //se nao Mostra a pagina.
else{
?>
<html>
<body>
    <h1>Olá<?php echo($_SESSION["usuario"]) ?></h1>
    <h2><a href="index.php">Retornar</a></h2>
</body></html>
<?php
    }
?>
<!-- VALIDANDO O LOGIN -->
<?php 
session_start();
$error="";
if(!isset($_POST["login"]) or ($_POST["login"]==""))
$error = "Preencha o Login";
console.log("error");
elseif(
    !isset($_POST["senha"] ) or ($_POST["senha"] ==""))
    $error = "Preencha a senha";
else{
    $login=$_POST["login"];
    $senha=$_POST["senha"];
    if($login!="admin" or $senha!="1234"){
        $error="login ou senha invalidos";
    }else{
        $_SESSION["usuario"] ="Administrador";
    }
}
if($error!="")
header("Location: form_login.php?error=$error", true, 301);
else
header("Location: protegida.php", true, 301);

?>