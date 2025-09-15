
<?php

$compras = [
    ['cliente' => 'Ana', 'valor' => 120],
    ['cliente' => 'João', 'valor' => 75],
    ['cliente' => 'Ana', 'valor' => 30],
    ['cliente' => 'Marcos', 'valor' => 200],
];

$resultado = array_reduce($compras, function($acumulador, $compra) {
    $cliente = $compra['cliente'];
    $valor = $compra['valor'];

    if (isset($acumulador[$cliente])) {
        $acumulador[$cliente] += $valor;
    } else {
        $acumulador[$cliente] = $valor;
    }

    return $acumulador;
}, []);

print_r($resultado);
