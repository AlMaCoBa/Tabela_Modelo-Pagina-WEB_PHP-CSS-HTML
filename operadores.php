<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores</title>
    <style>
        body {
            text-align: center;
            font-family: arial;
            background-color: rgb(33, 224, 224);
        }

        table {
            background-color: white;
            border-collapse: collapse;
            width: 100%;
        }

        td, 
        th {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        
        h3 {
            color: #fff;
            background: linear-gradient(to right, #00CED1, #eb7a80);
            border-radius: 10px;
            padding: 15px;
        }

    </style>
</head>
<body>
    <h1>Operadores Aritimétivos!</h1>
    <h2>Aluno Al</h2>
    <!--Operadores aritiméticos PHP
Os operadores aritiméticos do PHP são usados com valores numéricos para executar operações aritiméticas comuns, como adição subtração, multiplicação e divisão-->
        <table>
            <tr>
                <th>Operador</th>
                <th>Nome</th>
                <th>Exemplo</th>
                <th>Resultado</th>
            </tr>
            <tr>
                <td>+</td>
                <td>Adição</td>
                <td>$a + $b</td>
                <td>Soma das variávei $a e $b</td>
            </tr>

            <tr>
                <td>-</td>
                <td>Subtração</td>
                <td>$a + $b</td>
                <td>Diferente entre $a e $b</td>
            </tr>

            <tr>
                <td>*</td>
                <td>Multiplicação</td>
                <td>$a * $b</td>
                <td>Produto de $a e $b</td>
            </tr>

            <tr>
                <td>/</td>
                <td>Divisão</td>
                <td>$a / $b</td>
                <td>Quociente da $a e $b</td>
            </tr>
            
            <tr>
                <td>%</td>
                <td>Módulo</td>
                <td>$a % $b</td>
                <td>Resto da divisão de $a e $b</td>
            </tr>

            <tr>
                <td>**</td>
                <td>Exponeciação</td>
                <td>$a ** $b</td>
                <td>Resultado da exponenciação de $a para a potência de $b</td>
            </tr>

        </table>

        <?php
            $a = 2;
            $b = 4;
            $c = $a + $b;
            echo "<h3>o resultado da soma é: $c</h3>"
        ?>
    
</body>
</html> 