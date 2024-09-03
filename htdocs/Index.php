<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="Assets\CSS\Estilo.css">
    <title>Curso PHP</title>
</head>
<body>
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Indice dos Exercícios</h2>
    </header>
    <main class="principal">
        <div class="conteudo">
            <nav class="modulos">
                <div class="modulo verde">
                    <h3>Modulo 01 - BASICO</h3>
                    <ul>
                        <li><a href="exercicios.php?dir=basico&file=ola">Exercício 01 - Olá</a></li>
                    </ul>
                    <ul>
                        <li><a href="exercicios.php?dir=basico&file=html">Exercício 02 - HTML</a></li>
                    </ul>
                    <ul>
                        <li><a href="exercicios.php?dir=basico&file=css">Exercício 03 - CSS</a></li>
                    </ul>
                    <ul>
                        <li><a href="exercicios.php?dir=basico&file=comentario">Exercício 04 - Comentário</a></li>
                    </ul>
                    <ul>
                        <li><a href="exercicios.php?dir=basico&file=desafio">Desafio</a></li>
                    </ul>
                </div>
                <div class="modulo vermelho">
                <h3>Modulo 02 - TIPO BASICO</h3>
                    <ul>
                        <li><a href="exercicios.php?dir=tiposbasico&file=tipoInteiro">Exercicio 01 - Inteiros</a></li>
                    </ul>
                    <ul>
                        <li><a href="exercicios.php?dir=tiposbasico&file=float">Exercicio 02 - Float</a></li>
                    </ul>
                    <ul>
                        <li><a href="exercicios.php?dir=tiposbasico&file=aritmetica">Exercicio 03 - Aritmetica</a></li>
                    </ul>
                    <ul>
                        <li><a href="exercicios.php?dir=tiposbasico&file=string">Exercicio 04 - String</a></li>
                    </ul>
                    <ul>
                        <li><a href="exercicios.php?dir=tiposbasico&file=desafio">Desafio - String</a></li>
                    </ul>
                </div>
                <div class="modulo roxo">
                <h3>Modulo 03 - VARIAVEIS</h3>
                    <ul>
                        <li><a href="exercicios.php?dir=variaveis&file=basico">Exercicio 01 - Variaveis</a></li>
                    </ul>
                    <ul>
                        <li><a href="exercicios.php?dir=variaveis&file=desafio">Exercicio 02 - Desafio Variaveis</a></li>
                    </ul>
                    <ul>
                        <li><a href="exercicios.php?dir=variaveis&file=atribuicoes">Exercicio 03 - Atribuições</a></li>
                    </ul>
                    <ul>
                        <li><a href="exercicios.php?dir=variaveis&file=interpolacao">Exercicio 04 - interpolacao</a></li>
                    </ul>
                    <ul>
                        <li><a href="exercicios.php?dir=variaveis&file=variaveisV">Exercicio 04 - Variaveis Variavies</a></li>
                    </ul>
                    <ul>
                        <li><a href="exercicios.php?dir=variaveis&file=desafioVV">Desafio 05 - Variaveis Variavies</a></li>
                    </ul>
                    <ul>
                        <li><a href="exercicios.php?dir=variaveis&file=valor_referencia">Exercicio 06 - Valor VS Referencia </a></li>
                    </ul>
                    <ul>
                        <li><a href="exercicios.php?dir=variaveis&file=Constantes">Exercicio 07 - Constante </a></li>
                    </ul>
                </div>
                <div class="modulo amarelo">
                <h3>Modulo 04 - CONTROLE</h3>
                    <ul>
                        <li><a href="exercicios.php?dir=Controle&file=If_else">Exercicio 01 - IF & ELSE</a></li>
                    </ul>
                    <ul>
                        <li><a href="exercicios.php?dir=Controle&file=Operadores_relacionais">Exercicio 02 - Operadores relacionais</a></li>
                    </ul>
                    <ul>
                        <li><a href="exercicios.php?dir=Controle&file=Operadores_Logicos">Exercicio 03 - Operadores Lógicos</a></li>
                    </ul>
                    <ul>
                        <li><a href="exercicios.php?dir=Controle&file=DesafioControladores">Desafio - Controladores Lógicos</a></li>
                    </ul>
                    <ul>
                        <li><a href="exercicios.php?dir=Controle&file=Operador_ternario">Exercicio 04 - Operador Ternário</a></li>
                    </ul>
                    <ul>
                        <li><a href="exercicios.php?dir=Controle&file=Switch">Exercicio 05 - Switch</a></li>
                    </ul>
                    <ul>
                        <li><a href="exercicios.php?dir=Controle&file=DesafioSwitch">Desafio - Switch</a></li>
                    </ul>
                </div>
                <div class="modulo azul">
                <h3>Modulo 05 - ARRAY</h3>
                    <ul>
                        <li><a href="exercicios.php?dir=Array&file=">Exercicio 01 - Array</a></li>
                    </ul>
                </div>
                <div class="modulo preto">
                <h3>CONHECIMENTOS, ALEATORIOS &#128128</h3>
                    <ul>
                        <li><a href="exercicios.php?dir=Testando&file=ValidadorCNPJ">Exercicio 01 - CNPJ</a></li>
                    </ul>
                </div>
                
            </nav>
        </div>
    </main>
    <footer class="rodape">
        Vitor Toldato @ <?= date('Y'); ?>
    </footer>
</body>
</html>