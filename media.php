<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Média Diária e Semanal</title>
    <style>
        @import url('https://fonts.cdnfonts.com/css/helvetica-neue-5');
        body {
            background-color: #f4f4f4;
            font-family: 'Helvetica Neue', sans-serif;
            text-align: center;
            margin: 0;
            padding: 0;
        }

        h1 {
            color: #333;
            margin-top: 100px;
        }

        .container {
            display: flex;
            align-items: flex-start;
            justify-content: center;
            flex-direction: column;
            margin: 20px;
            gap: 20px;
        }

        .button {
            background-color: #f6be00;
            color: #000;
            padding: 20px 30px;
            font-size: 1.2em;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin: 20px;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
        }

        .box {
            color: #666;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            background-color: #fff;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            margin: auto;
        }

        table {
            border-collapse: collapse;
            width: 80%;
            margin: 20px auto;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
            background-color: #fff;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
            border-radius: 10px;
        }
    </style>
</head>

<body>
    <h1>Média Diária e Semanal</h1>
    <table>
        <thead>
            <tr>
                <th>Dia</th>
                <th>Valor em Watts</th>
                <th>Valor em Reais</th>
            </tr>
        </thead>
        <tbody id="tabelaCorpo">
            <!-- Os valores serão preenchidos dinamicamente com JavaScript -->
        </tbody>
    </table>
    <div class="box">
        <h2>Média</h2>
        <div>Média de Watts: <span id="mediaWatts"></span></div>
        <div>Média de Reais: <span id="mediaReais"></span>
        </div>
    </div>
    <div class="box">
        <h2>Total Semanal</h2>
        <div>Total Semanal em Watts: <span id="totalWatts"></span> W</div>
        <div>Total Semanal em Reais: <span id="totalReais"></span> R$</div>
    </div>
    <button class="button" onclick="window.location.href='index.html'">
        Voltar para a tela inicial
    </button>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            // Arrays para armazenar os valores de cada dia
            const valoresWatts = [];
            let totalReais = 0;
            let totalWatts = 0;

            // Preenche a tabela com valores aleatórios e calcula os valores em Reais
            for (let dia = 1; dia <= 7; dia++) {
                const valorAleatorio = (Math.random() * (11 - 9) + 9).toFixed(2);
                const valorReais = (valorAleatorio * 0.65313).toFixed(2);

                // Adiciona os valores aos arrays
                valoresWatts.push(parseFloat(valorAleatorio));
                totalWatts += parseFloat(valorAleatorio);
                totalReais += parseFloat(valorReais);

                // Adiciona uma nova linha à tabela
                const newRow = document.getElementById("tabelaCorpo").insertRow();
                newRow.innerHTML = `<td>${dia}</td><td>${valorAleatorio} W</td><td>${valorReais} R$</td>`;
            }

            // Calcula a média dos valores de Watts
            const mediaWatts = (totalWatts / valoresWatts.length).toFixed(2);

            // Calcula a média dos valores em Reais
            const mediaReais = (mediaWatts * 0.65313).toFixed(2);

            // Atualiza os elementos HTML com as médias e os totais semanais
            document.getElementById("mediaWatts").innerText = `${mediaWatts} W`;
            document.getElementById("mediaReais").innerText = `${mediaReais} R$`;
            document.getElementById("totalWatts").innerText = `${totalWatts.toFixed(2)}`;
            document.getElementById("totalReais").innerText = `${totalReais.toFixed(2)}`;
        });
    </script>
</body>

</html>
