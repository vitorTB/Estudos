<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualização de Tickets</title>
    <link rel="stylesheet" href="\CSS\visualizar.css">
</head>
<body>
    <div class="botaoInicio">
        <a href="Index.php"><button>Inicio</button></a>
    </div>
    <div class="container">
        <h1>Tickets Criados</h1>
        <table id="ticketsTable">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Tipo de Erro</th>
                    <th>Data de Criação</th>
                    <th>Estado</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    // Recuperar tickets do cookie
                    $tickets = isset($_COOKIE['tickets']) ? json_decode($_COOKIE['tickets'], true) : [];

                    if (empty($tickets)) {
                        echo '<tr class="no-tickets"><td colspan="5">Nenhum ticket encontrado.</td></tr>';
                    } else {
                        foreach ($tickets as $ticket) {
                            echo '<tr>';
                            echo '<td><a href="detalhes_ticket.php?id=' . $ticket['id'] . '">' . $ticket['id'] . '</a></td>';
                            echo '<td>' . $ticket['nome'] . '</td>';
                            echo '<td>' . $ticket['tipoErro'] . '</td>';
                            echo '<td>' . $ticket['dataCriacao'] . '</td>';
                            echo '<td><img src="imagem/amarela.png" alt="icone"></td>';
                            echo '</tr>';
                        }
                    }
                ?>
            </tbody>
        </table>
        <div class="botao">
            <a href="Abertura_Ticket.php"><button>Abrir novo ticket</button></a>
            <form method="post">
                <button type="submit" name="reset" id="resetButton" class="reset">Resetar Lista de Tickets</button>
            </form>
            <?php
                if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['reset'])) {
                    setcookie('tickets', '', time() - 3600, "/"); // Excluir cookie
                    echo "<script>alert('Lista de tickets resetada.'); window.location.href='visualizar_tickets.php';</script>";
                }
            ?>
        </div>
    </div>
</body>
</html>
