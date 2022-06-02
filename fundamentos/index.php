<?php

$array = [
    'nome' => 'Setonde',
    'idade' => '29',
    'empresa' => 'Setonde Business Group',
    'cor' => 'Azul',
    'profissão' => 'Engenheiro de Software',
    'cidade' => 'Floripa',
];

$chaves = array_keys($array) ;
$valores = array_values($array);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Functions</title>
    <style type="text/css">
        
    </style>
</head>
<body>

    <section id="secao_1">
        <table border="1">
            <thead>
                <tr>
                    <?php foreach ($chaves as $chave) : ?>
                        <th><?php echo $chave ;  ?></th>
                    <?php endforeach ; ?>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php foreach ($valores as $valor) : ?>
                        <td><?php echo $valor ;  ?></td>
                    <?php endforeach ; ?>
                </tr>
            </tbody>
        </table>
    </section><br><br>

    <section id="secao_2">
        <table border="1">
            <?php foreach ($array as $key => $value) : ?>
                <tr> 
                    <th><?php echo $key ;  ?></th>
                    <td><?php echo $value ;  ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </section>

</body>
</html>

<?php
/* function writeInFile(string $text) {

    $last_text  =  file_get_contents('nome_2.txt') ;
    $last_text .= "\n";

    $texto      =  $last_text . $text ;
    file_put_contents('nome_2.txt',  $texto);

    echo 'Arquivo criado com sucesso. <br><br>' ;
}

writeInFile('Hermann Nougbodohoue');
writeInFile('Prisca Nougbodohoue'); */

/* $texto = file_get_contents('texto.txt') ;

$texto_tamanho = strlen($texto); echo $texto_tamanho . '<br><br>' ;

$texto = explode('\n', $texto);

echo '<h1>Novo Array: </h1> ';

echo '<pre>';

print_r($texto);

echo '</pre>';
 ; */

/* echo date('d/m/Y - H:i:s',  time()); */

/* $data = "2022-05-04T05:35:07.3Z";

$time = strtotime($data);

$formated_date = date('d/m/Y H:i:s', $time);

echo $formated_date; */


/* echo date('Y m N H:i:s'). '<br/>';// em millisegundos desde a data ZÉRO

echo date('W'). '<br/>'; */

// Data ZÉRO --> 01/01/1970
/* $applicants = [
    'crespin', 'cnicet', 'ctonde', 'ciacre', 'gildas', 'hermann', 'agathe'
];

$implode_example = implode(' ',$applicants);

echo $implode_example. '<br/>';

$explode_example = explode(' ', $implode_example);

print_r($explode_example) ;

 */

/* 
$applicants = [
    'crespin', 'cnicet', 'ctonde', 'ciacre', 'gildas', 'hermann', 'agathe'
];

$succeeded_applicants = [
    'crespin', 'anicet', 'setonde'
] ;

$novo = array_map(function($item) {

    $first_letter = substr($item, 0, 1);

    if ($first_letter != 'c') {
        return "não possui 'c' não <br>";
    } else {
        return "possui 'c' sim <br>";
    }

}, $applicants);

echo '<h1>Novo Array: </h1> ';

echo '<pre>';

print_r($novo);

echo '</pre>';  */



/* echo '<h1>filtered_applicants: </h1> ';

echo '<pre>';

print_r($filtered_applicants);

echo '</pre>'; */

/* $applicants = [
    'crespin', 'cnicet', 'ctonde', 'ciacre', 'gildas', 'hermann', 'agathe'
];

$succeeded_applicants = [
    'crespin', 'anicet', 'setonde'
] ;

$filtered_applicants = array_filter( $applicants, function($item) {

    $first_letter = substr($item, 0, 1);

    if ($first_letter != 'c') {
        return true;
    } else {
        return false;
    }

});

echo '<h1>filtered_applicants: </h1> ';

echo '<pre>';

print_r($filtered_applicants);

echo '</pre>'; */
/* 

$new_filtered_applicants = [...$filtered_applicants];


echo '<h1>new_filtered_applicants: </h1> ';

echo '<pre>';

print_r($new_filtered_applicants);

echo '</pre>';

 */


/* 
$applicants = [
    'crespin', 'anicet', 'setonde', 'fiacre', 'gildas', 'hermann', 'agathe'
];

$succeeded_applicants = [
    'crespin', 'anicet', 'setonde'
] ;

$failed_applicants = array_diff($applicants,$succeeded_applicants);

echo '<h1>failed_applicants: </h1> ';

echo '<pre>';

print_r($failed_applicants);

echo '</pre>';

$new_array = [...$failed_applicants];

echo '<h1>new_array: </h1> ';
echo '<pre>';

print_r($new_array);

echo '</pre>'; */



/* $nomeCompleto = 'setonde toussaint crespin nougbodohoue';

$posicao = strpos($nomeCompleto,'houde');

if ($posicao > -1) {
    echo $posicao;
} else {
    echo 'não achou'; 
} 

 */

/* $nome = substr($nomeCompleto, 7);

echo $nome; */
/* 
function divide($number) {

    $half = $number / 2;
    echo $half . '<br>';
    if (round($half) > 0) {
        divide($half);
    }
}

divide(100);

 */

/* $dizimo = fn(int $valor) => $valor * 0.1  ;

echo $dizimo(121);

 */

/* for ($i=0; $i < 20 ; $i++) { 
    echo 'Linha'.$i.': ';

    echo '<h1>';
     for ($j=0; $j <= $i ; $j++) { 
        if ($j != 0) {
            echo '-';
        }       
    }
    echo'<br><br>'; 
    echo '</h1>';
}  */

/* $tracinho = '-';
$linha = '';
$coluna = '';

for ($i=0; $i < 10; $i++) { 
    $linha .= $tracinho ; 
}
$linha = '<h1>' . $linha . '</h1>';

for ($i=0; $i < 10; $i++) { 
    $coluna .= $linha; 
} 

echo $coluna;


 */



/* 
$ingredients = [
    'açucar',
    'farinha de trigo',
    'ovo',
    'leite',
    'fermento em pó'
];

echo '<h1>Ingredientes</h1>';

echo '<ol>';

foreach($ingredients as $key => $ingredient) {
    echo '<li>' . $ingredient . '<br><br>' . '</li>';
}

echo '<ol>'; */

/*
$ingredients = [
    'primeiro ingrediente'  =>  'açucar',
    'segundo ingrediente'   =>  'farinha de trigo',
    'terceiro ingrediente'  =>  'ovo',
    'quarto ingrediente'    =>  'leite',
    'quinto ingrediente'    =>  'fermento em pó'
];

echo '<h1>Ingredientes</h1>';
foreach($ingredients as $key => $ingredient) {
    echo $key.':    '.  $ingredient  .'<br><br>';
}

*/ 

/* $nome = 'Crespin';
$sobrenome = 'Nougbodohoue';

$nomeCompleto  = ($nome ?? 'Visitante');
$nomeCompleto .= ' '.($sobrenome ?? 'Visitante ii');

echo $nomeCompleto; */
  
/* 
    $bolo1 = [
        'açucar','trigo'
    ];

    $bolo2 = [
        'agua', 'ovo',
        ...$bolo1,
        'corante'
    ];


    for ($i=0; $i < count($bolo2) ; $i++) { 
        echo $bolo2[$i].'<br><br>';
    }

    echo '<pre>';

    print_r($bolo2);
    
    echo '</pre>'; */


    ?>