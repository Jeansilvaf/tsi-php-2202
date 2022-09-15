<?php

//vetores

$diaSemana = [0=> 'Domingo', 1=> 'Segunda', 2=> 'Terça', 3=> 'Quarta', 4=> 'Quinta', 5=> 'Sexta', 6=> 'Sabado'];

$hoje = date('w');
//var_dump($hoje);
echo "Hoje é {$diaSemana[$hoje]}<br><br>"; //interpolação com vetor

//var_dump($diaSemana); função para mostrar a variavel, tipo raio x




$aluno = [ 
     
    0 => ['matricula' => 634545, 'nome' => 'João',
    'semestre' => 2],

    1 => ['matricula' => 8548, 'nome' => 'Paulo',
    'semestre' => 3],

    2 => ['matricula' => 65422, 'nome' => 'Maria',
    'semestre' => 1]];

    echo '<table border = "1">
            <tr>
                <td>Matricula</td>
                <td>Nome</td>
                <td>Semestre</td>
            </tr>';


   for( $i = 0 ; $i <  count($aluno); $i++ ){
  
     echo " <tr>
        
                <td>{$aluno[$i]['matricula']} </td> 
                <td>{$aluno[$i]['nome']} </td> 
                <td>{$aluno[$i]['semestre']} </td>
     
        </tr>";
    

   }

   foreach( $aluno as $ind => $val ) {

    echo "<tr>
                <td>{$val['matricula']}</td>
                <td>{$val['nome']}</td>
                <td>{$val['semestre']}</td>
          </tr>";



}




    echo '</table>';
   








