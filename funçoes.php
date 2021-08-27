
<?php
function aprovar(array &$aluno)
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
?>