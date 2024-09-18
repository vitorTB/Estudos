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
                })
            } 
        })
    })
</script>