<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Empresa</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<form class='formularioCNPJ' 	action="#" method="post">
    <label for="cnpj">CNPJ:</label>
    <input type="text" id="cnpj" name="cnpj" maxlength="14" required>
    
    <label for="razao_social">Razão Social:</label>
    <input type="text" id="razao_social" name="razao_social" readonly>

    <label for="nome_fantasia">Nome Fantasia:</label>
    <input type="text" id="nome_fantasia" name="nome_fantasia" readonly>

    <label for="endereco">Endereço:</label>
    <input type="text" id="endereco" name="endereco" readonly>
    <!-- Outros campos que você queira preencher automaticamente -->
    <button type="submit">Cadastrar</button>
</form>

</html>
<?php
if (isset($_GET['cnpj'])) {
    $cnpj = preg_replace('/\D/', '', $_GET['cnpj']); // Remove caracteres não numéricos

    $url = "https://www.receitaws.com.br/v1/cnpj/" . $cnpj;
    
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);
    echo $response;
}

if(isset($_POST['razao_social'])){ echo $_POST['razao_social'];}
?>



<script>
    $(document).ready(function() {
        $("#cnpj").blur(function() {
            var cnpj = $(this).val().replace(/\D/g, ''); // Remove caracteres não numéricos
            if(cnpj.length === 14) {
                $.ajax({
                    url: 'https://www.receitaws.com.br/v1/cnpj/' + cnpj,
                    type: 'GET',
                    dataType: 'jsonp',
                    success: function(data) {
                        if (data.status === "OK") {
                            $("#razao_social").val(data.nome);
                            $("#nome_fantasia").val(data.fantasia);
                            $("#endereco").val(data.logradouro + ", " + data.numero + " - " + data.bairro + ", " + data.municipio + " - " + data.uf);
                            // Preencher outros campos conforme necessário
                        } else {
                            alert("CNPJ não encontrado.");
                        }
                    }
                });
            } 
        });
    });
</script>

<style>
   .conteudo{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
   }
   .formularioCNPJ {
    display: flex;
    flex-direction: column;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            margin-right: 20px; /* Espaçamento da direita, opcional */
        }

        .label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            width: 300px;
        }
        
    </style>