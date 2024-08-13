<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style\style.css">
    <title>Document</title>
</head>
<body>
    <?php
    if(isset($_GET["error"]))
    echo("<hr/><h2>".$_GET["error"]."</h2><hr/>");
    ?>
    <form action="login.php" method="post" id="formu">
        <label for="logar">Login:</label>
        <input type="text" name="login"/>
        <label for="senha">Senha:</label>
        <input type="password" name="senha"/>
        <input class="sub" type="submit" value="enviar"/>
    </form>
</body>
</html>
<!-- ESSE PHP MOSTRA A PAGINA SE ESTIVER LOGADO, OU FAZ VOLTAR -->