
<?php
function aprovar(array &$turma){


    foreach ($turma as $chave => $aluno) {
        if ($aluno["nota"] >= 50) {
            $turma[$chave]["situacao"] = "Aprovado";
            echo "<br><br>";
        } else{ 
            $turma[$chave]["situacao"] = "Reprovado";
        }
    }
}
function MudarNota(array &$turma, $nome, $MudarNota){
 
    foreach($turma as $chave => $aluno) {
        if($aluno["nome"] == $nome ){
            $turma[$chave]["nota"] = $MudarNota;
 
            return;
        }
    }
}