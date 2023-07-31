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