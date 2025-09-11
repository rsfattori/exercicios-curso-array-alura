<?php
/*

Exercício 3 — Manipulação avançada e compactação

Instrução: Complete para extrair os 3 alunos com melhores notas, criar variáveis usando extract() e retornar uma string formatada com os nomes separados por vírgula.
*/
$alunos = [
    ['nome' => 'Carlos', 'nota' => 7.5],
    ['nome' => 'Fernanda', 'nota' => 9.3],
    ['nome' => 'Ana', 'nota' => 8.8],
    ['nome' => 'Bruno', 'nota' => 6.7],
    ['nome' => 'Débora', 'nota' => 9.0],
];

// 1. Ordene os alunos por nota (decrescente)
// 2. Pegue os 3 primeiros
// 3. Extraia os nomes em variáveis individuais usando extract/compact
// 4. Retorne uma string com os nomes separados por vírgula

function topAlunos(array $alunos): string {
    // Seu código aqui
}

echo topAlunos($alunos);
