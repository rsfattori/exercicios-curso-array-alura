<?php 

/*
Exercício 2 — Agrupamento e soma com array_reduce

Instrução: Complete para somar o total gasto por cada cliente. O resultado final deve ser um array associativo com o nome do cliente como chave e o total como valor.
*/

$compras = [
    ['cliente' => 'Ana', 'valor' => 120],
    ['cliente' => 'João', 'valor' => 75],
    ['cliente' => 'Ana', 'valor' => 30],
    ['cliente' => 'Marcos', 'valor' => 200],
];

// Use array_reduce para acumular os totais por cliente
function somaPorCliente(array $compras): array {
    return array_reduce($compras, function($acumulador, $compra) {
        // Complete aqui para somar corretamente
        return $acumulador;
    }, []);
}

print_r(somaPorCliente($compras));
