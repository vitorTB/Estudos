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