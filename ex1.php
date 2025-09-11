<?php
/*
Exercício 1 — Filtragem e transformação de dados

Instrução: Complete a função para filtrar apenas os produtos com estoque maior que 0, aplicar um desconto de 10% em seus preços e retornar apenas os nomes e preços finais, ordenados alfabeticamente pelo nome.

*/

$produtos = [
    ['nome' => 'Teclado', 'preco' => 150, 'estoque' => 5],
    ['nome' => 'Mouse', 'preco' => 80, 'estoque' => 0],
    ['nome' => 'Monitor', 'preco' => 900, 'estoque' => 3],
    ['nome' => 'Cabo HDMI', 'preco' => 35, 'estoque' => 10],
];

function processaProdutos(array $lista): array {
    // 1. Filtre apenas os produtos com estoque > 0
    // 2. Aplique desconto de 10% ao preço
    // 3. Retorne apenas ['nome' => ..., 'preco' => ...]
    // 4. Ordene alfabeticamente pelo nome
    
    // Seu código aqui
}

$resultado = processaProdutos($produtos);
print_r($resultado);
