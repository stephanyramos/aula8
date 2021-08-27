<?php
require("./alunos.php")
?>

<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet"/>
    <title>Notas dos alunos</title>
</head>
<body>
    <section>
    <h1>Tabela de Notas</h1>
    <table>
        <tr>
            <th>Nome</th>
            <th>Idade</th>
            <th>Nota</th>
            <th>Situação</th>
        </tr>
        <?php
    foreach ($alunos as $aluno) {
?>
<tr>
    <td>
        <?php
        echo $aluno["nome"];
        ?>
    </td>
    <td>
        <?phpfunction aprovar(array &$turma)
{
    foreach ($turma as $chave => $aluno) {
        if ($aluno["nota"] >= 50) {
            $turma[$chave]["situacao"] = "aprovado";
            echo "<br><br>";
        } else{ 
            $turma[$chave]["situacao"] = "Reprovado";
        }
    }
}
        echo $aluno["idade"];
        ?>
    </td>
    <td>
        <?php
        echo $aluno["nota"];
        ?>
    </td>
    <td>
        <?php
        isset($aluno["situacao"]) ?
        $aluno["situacao"] : 
        "";
        ?>
    </td>
</tr>

 <?php
}
?>
    </table>
</section>
</body>
</html>