
<?php

$alunos = [
    ['nome' => 'Carlos', 'nota' => 7.5],
    ['nome' => 'Fernanda', 'nota' => 9.3],
    ['nome' => 'Ana', 'nota' => 8.8],
    ['nome' => 'Bruno', 'nota' => 6.7],
    ['nome' => 'Débora', 'nota' => 9.0],
];


usort($alunos, function($a, $b) {
    return $b['nota'] - $a['nota'];
});


$maiores = array_slice($alunos, 0, 3);

echo $maiores[0]['nome'] . ', ' . $maiores[1]['nome'] . ', ' . $maiores[2]['nome'];

