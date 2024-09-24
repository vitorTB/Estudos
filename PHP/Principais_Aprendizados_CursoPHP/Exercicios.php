<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="Assets\CSS\Estilo.css">
    <link rel="stylesheet" href="Assets\CSS\Exercicios.css">
    
    <title>Visualização</title>
</head>
<body class="exercicios">
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Visualização dos exercicios</h2>
    </header> 
   <!-- Faz a barra de navegação -->
    <nav class="navegacao">
        <!-- <a href="<?="#" ?>" class="verde"> Sem Formatação</a> -->
        <a href="Index.php" class="vermelho">Voltar</a>
    </nav>
       <!-- Aqui faz a parte do quadro Main onde fica todo conteudo princiapl  -->
    <main class="principal">
        <div class="conteudo">
            <?php 
            //Faz um include da pasta onde está os arquivos 
            //setando o padrão de acesso, não preciso ficar redigitando o codigo sempre que mudar o arquivo, o tornando mais dinamico.
            //__DIR___ pega o diretorio REAL antes do /GET'DIR' solicito o Diretorio e / GET "FILE" o arquivo e coloco a concatenação de .PHP
        include(__DIR__ . "/{$_GET['dir']}/{$_GET['file']}.php");
            ?>
        </div>
    </main>
    <footer class="rodape">
<!--Aqui eu escrevo o rodapé onde Função DATE, pega o Ano automatico. Pode ser usado M,S,D,Y. para solicitar outros dados. -->
        Vitor Toldato @ <?= date('Y'); ?>
    </footer>
</body>
</html>