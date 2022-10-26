<?php
require_once '../bancoDeDados/conecta.php';

$stmt = $bd->query('SELECT id, nome, turno, inicio FROM alunos');


echo '<table border="1">
        <tr>
            <td>ID</td>
            <td>Nome</td>
            <td>Turno</td>
            <td>Inicio</td>
            <td>Ações</td>
        </tr>';

while($registro = $stmt->fetch(PDO::FETCH_ASSOC)){
    
    echo "  <tr>
            <td>{$registro['id']}</td>
            <td>{$registro['nome']}</td>
            <td>{$registro['turno']}</td>
            <td>{$registro['inicio']}</td>
            <td></td>
        </tr>";
}

echo '</table>';