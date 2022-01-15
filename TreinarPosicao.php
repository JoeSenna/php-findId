<?php
$array1=[
    1,
    2,
    3
];

$array2=[
    'teste1',
    'teste2',
    'teste3'
];

$array3=[
    ['posicao1-1', 'Posicao1-2']
    ['posicao1-2', 'Posicao2-2']
    ['posicao1-3', 'Posicao3-2']
    ['posicao1-4', 'Posicao4-2']
];

echo $array3[2][1];

foreach($array3 as$item){
    echo $item[1][7]. "\n"; //posição 7 do item 1
}

?>