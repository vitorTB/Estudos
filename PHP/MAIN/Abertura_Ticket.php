<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abertura de Chamado</title>
    <link rel="stylesheet" href="\css\Abertura.css">
</head>
<body>
    <div class="container">
        <h1>Abertura de Chamado</h1>
        <form id="ticketForm" method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required>

            <label for="tipo-erro">Tipo de Erro:</label>
            <select id="tipo-erro" name="tipo-erro" required>
                <option value="">Selecione...</option>
                <option value="Erro no Sistema">Erro no Sistema</option>
                <option value="Problema de Rede">Problema de Rede</option>
                <option value="Dificuldade de Acesso">Dificuldade de Acesso</option>
                <option value="Outro">Outro</option>
            </select>

            <label for="descricao">Descrição:</label>
            <textarea id="descricao" name="descricao" required></textarea>

            <button type="submit">Enviar Chamado</button>
            <button type="reset">resetar</button>
        </form>
        <div id="confirmationMessage">
            <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    // Obter dados do formulário
                    $nome = $_POST['nome'];
                    $tipoErro = $_POST['tipo-erro'];
                    $descricao = $_POST['descricao'];

                    // Gerar ID do ticket
                    $ticketCounter = isset($_COOKIE['ticketCounter']) ? intval($_COOKIE['ticketCounter']) : 0;
                    $ticketCounter++;
                    setcookie('ticketCounter', $ticketCounter, time() + (86400 * 30), "/"); // Expira em 30 dias

                    // Criar o ticket
                    $ticket = [
                        'id' => $ticketCounter,
                        'nome' => $nome,
                        'tipoErro' => $tipoErro,
                        'descricao' => $descricao,
                        'dataCriacao' => date("Y-m-d")
                    ];

                    // Recuperar tickets anteriores
                    $tickets = isset($_COOKIE['tickets']) ? json_decode($_COOKIE['tickets'], true) : [];

                    // Adicionar novo ticket ao array
                    $tickets[] = $ticket;

                    // Salvar tickets no cookie
                    setcookie('tickets', json_encode($tickets), time() + (86400 * 30), "/");

                    // Exibir mensagem de confirmação
                    echo "Ticket enviado com sucesso!<br>Número do ticket: " . $ticketCounter;
                }
            ?>
        </div>
        <div id="botaoRetorno">
            <a href="visualizar_tickets.php"><button>visualizar tickets</button></a>
        </div>
    </div>
</body>
</html>
