<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #h1 {
            color: #000;
            margin-left: 0px;
        }
        
        #btn {
            width: 100px;
            height: 50px;
        }
    </style>
    <script>
        function normal() {
            document.getElementById('h1').style.color = "black";
        }
        function Verde() {
            document.getElementById('h1').style.color = "green";
        }
        function Vermelho() {
            document.getElementById('h1').style.color = "red";
        }
        function mover(){
            document.getElementById('h1').style.marginLeft = "100px";
        }

        function acrescenta() {
            let div = document.getElementById('div_1');
            let p = document.createElement('p');
            p.innerText = 'Teste de conteudo.';
            div.append(p);

        }
    </script>
</head>
<body>
    
    <h1 id="h1">Teste JS</h1>
        <button id="btn" onclick="normal();">Preto</button>
        <button id="btn" onclick="Verde();">Verde</button>
        <button id="btn" onclick="Vermelho();">Vermelho</button>
        <div id="div_1">
            <br>
            <button id="btn_1" onclick="acrescenta();">+</button>
            <p id="p_1">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
            when an unknown printer took a galley of type and scrambled it to make a type specimen book.
            </p>
        </div>
</body>
</html>