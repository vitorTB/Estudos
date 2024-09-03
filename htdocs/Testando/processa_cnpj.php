<div class="titulo">Processa CNPJ</div>

<?php
if (isset($_POST['cnpj'])) {
    $cnpj = preg_replace('/[^0-9]/', '', $_POST['cnpj']); // Remove caracteres não numéricos

    if (strlen($cnpj) == 14) {
        $url = "https://www.receitaws.com.br/v1/cnpj/$cnpj";

        // Inicializa cURL
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_TIMEOUT, 30);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

        // Executa a requisição
        $response = curl_exec($ch);
        curl_close($ch);

        // Decodifica a resposta JSON
        $data = json_decode($response, true);

        if (isset($data['status']) && $data['status'] === "OK") {
            // Retorna os dados como JSON
            echo json_encode($data);
        } else {
            echo json_encode(["status" => "ERROR", "message" => "CNPJ não encontrado."]);
        }
    } else {
        echo json_encode(["status" => "ERROR", "message" => "CNPJ inválido."]);
    }
} else {
    echo json_encode(["status" => "ERROR", "message" => "CNPJ não fornecido."]);
}
?>
