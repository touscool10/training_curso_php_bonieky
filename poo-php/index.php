<?php

require "vendor/autoload.php";

use operacao\matematica\Basico;

use Monolog\Level;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;


$calc = new Basico(); 

$result = $calc->somar(7, 8);


echo "TOTAL: " . $result . '<br><br>';



// create a log channel
$log = new Logger('name');
$log->pushHandler(new StreamHandler('path/to/your.log', Level::Warning));

// add records to the log
$log->warning('Foo');
$log->error('Bar');








































































































































//require "autoload.php";

/* use matematica\Class_1;
use matematica\Class_2;
use  matematica\Basico;
use matematica\Algo;
use matematica\Calculadora; 
use foto\Upload;  */
/* require "class_1.php";
require "class_2.php";
require "classes/matematica/basico.php";

use classes\matematica\Basico as Basico;
use classe1\MinhaClasse;
use classe2\MinhaClasse as MinhaClasse2;
 */
// total 20
//require "calculadora.php";
 
/* 
$calc = new Calculadora(); 

$calc->add(12);
$calc->add(2);
$calc->sub(1);
$calc->multiply(3);
$calc->divide(2);
$calc->add(0.5);

echo "TOTAL: " . $calc->total() . '<br><br>';

$calc->clear();


echo "TOTAL: " . $calc->total() . '<br><br>';

$teste1 = new Class_1();
$teste2 = new Class_2();

$soma = new Basico() ;

echo "Teste 1: "; echo $teste1->testar() . '<br><br>';
echo "Teste 2: " ; echo $teste2->testar() . '<br><br>';

$result = $soma->somar(5,4);

echo "Resultado = " ; echo $result . '<br><br>';

$algo = new Algo();

$upload = new Upload();
 */




