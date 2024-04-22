<!DOCTYPE html>
<html>
<head>
    <title>Valores em Tempo Real</title>
    <style>
        body {
            background-color: #f4f4f4;
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 0;
            padding: 0;
        }
        h1 {
            color: #333;
        }
        #dadosArduino {
            background-color: #fff;
            border-radius: 10px;
            padding: 20px;
            margin: 20px auto;
            max-width: 300px;
            box-shadow: 0 5px 10px rgba(0,0,0,0.1);
        }
        #voltarButton {
            background-color: #f6be00;
            color: #000;
            padding: 10px 20px;
            font-size: 1em;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <h1>Valores em Tempo Real</h1>

    <div id="dadosArduino">
        <p><strong>Valor R$:</strong> <span id="valorReal"></span></p>
        <p><strong>Valor Watts:</strong> <span id="valorWatts"></span></p>
    </div>
    
    <a id="voltarButton" href="index.html">Voltar para a Tela Inicial</a>

    <script>
        // Função para gerar valores aleatórios entre 9 e 11
        function gerarValorAleatorio() {
            return (Math.random() * (11 - 9) + 9).toFixed(2);
        }

        // Função para atualizar os valores do Arduino em tempo real
        function atualizarValores() {
            // Gera valores aleatórios
            var valorWattsAleatorio = gerarValorAleatorio();
            var valorRealCalculado = (valorWattsAleatorio * 0.65313).toFixed(2);

            // Atualiza os valores na página
            document.getElementById('valorReal').textContent = valorRealCalculado;
            document.getElementById('valorWatts').textContent = valorWattsAleatorio;
        }

        // Inicia o monitoramento
        setInterval(atualizarValores, 1000);
    </script>
    
</body>
</html>
