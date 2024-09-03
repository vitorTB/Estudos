<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes do Ticket</title>
    <link rel="stylesheet" href="\CSS\detalhes.css">
</head>
<body>
    <div class="container">
        <h1>Detalhes do Ticket</h1>
        <div id="ticketDetails">
            <?php
                // Função para obter o ID do ticket da URL
                function getTicketId() {
                    return isset($_GET['id']) ? $_GET['id'] : null;
                }

                // Obter o ID do ticket
                $ticketId = getTicketId();

                // Recuperar tickets do cookie
                $tickets = isset($_COOKIE['tickets']) ? json_decode($_COOKIE['tickets'], true) : [];

                // Encontrar o ticket específico pelo ID
                $ticket = null;
                foreach ($tickets as $t) {
                    if ($t['id'] == $ticketId) {
                        $ticket = $t;
                        break;
                    }
                }

                if ($ticket) {
                    echo "<p><strong>ID:</strong> {$ticket['id']}</p>";
                    echo "<p><strong>Nome:</strong> {$ticket['nome']}</p>";
                    echo "<p><strong>Tipo de Erro:</strong> {$ticket['tipoErro']}</p>";
                    echo "<p><strong>Descrição:</strong> {$ticket['descricao']}</p>";
                    echo "<p><strong>Data de Criação:</strong> {$ticket['dataCriacao']}</p>";
                } else {
                    echo '<p>Ticket não encontrado.</p>';
                }
            ?>
        </div>
    </div>
</body>
</html>
