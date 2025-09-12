<?php
/*
Exercício 1 — Filtragem e transformação de dados

Instrução: Complete a função para filtrar apenas os produtos com estoque maior que 0, aplicar um desconto de 10% em seus preços e retornar 
apenas os nomes e preços finais, ordenados alfabeticamente pelo nome.

*/

$produtos = [
    ['nome' => 'Teclado', 'preco' => 150, 'estoque' => 5],
    ['nome' => 'Mouse', 'preco' => 80, 'estoque' => 0],
    ['nome' => 'Cabo HDMI', 'preco' => 35, 'estoque' => 10],
    ['nome' => 'Monitor', 'preco' => 900, 'estoque' => 3],
 
];



function processaProdutos(array $lista): array {
    

    print_r($lista);

    $produtosDisponiveis = array_filter($lista, function($produto){
        return $produto["estoque"] > 0;

    
    }); 

    print_r($produtosDisponiveis);

    $produtosComDesconto = array_map(function($lista) 
    {

        $lista["preco"] = $lista["preco"] * (1 - 10 / 100);
        return $lista;

    }, $lista);

    print_r($produtosComDesconto);


    $produtosNomePreco = array_map(function($lista)
    {

        return ['nome' => $lista['nome'], 'preco' => $lista['preco']];

    }, $lista);

    print_r($produtosNomePreco);
    
    // 4. Ordene alfabeticamente pelo nome
    
    // Seu código aqui
    return [];
}

function ordenaProdutos(array $nome1, array $nome2): int
{

    if($nome1['nome'] > $nome2['nome'])
    {
        return 1;
    }
    if($nome2['nome'] > $nome1['nome'])
    {
        return -1;
    }

    return 0;
}

$lista = $produtos;
usort($lista, 'ordenaProdutos');

print_r($lista);
print_r($produtos);

/*
$resultado = processaProdutos($produtos);
print_r($resultado);
*/
