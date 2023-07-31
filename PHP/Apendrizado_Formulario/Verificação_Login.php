<!-- <?php 
session_start();
$error="";
if(!isset($_POST["login"]) or ($_POST["login"]==""))
$error = "Preencha o Login";

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

?> -->