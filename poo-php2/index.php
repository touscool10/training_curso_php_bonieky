<?php

interface MatematicaBasica {
    public function somar($a, $b);
}

class Basico1 implements MatematicaBasica {
    public function somar($a, $b) {
        return $a + $b;
    }
}

class Basico2 implements MatematicaBasica {
    public function somar($a, $b) {
        $result = $a . $b;

/*         for ($i=0; $i < $b; $i++) { 
            $result++;
        } */
        return $result;

    }
}

class Matematica {
    private $basico; 

    const VERSION = '1.0';

    public function __construct(MatematicaBasica $b) {
        $this->basico = $b;
    }

    public function somar($x, $y) {
        return  $this->basico->somar($x, $y);
    }
}

$soma1 = new Matematica( new Basico1());
$soma2 = new Matematica( new Basico2());


$resultSoma1 = $soma1->somar(7,8);
$resultSoma2 = $soma2->somar('Oi,', ' Tudo bem?');

echo "resultSoma1: "; echo $resultSoma1 . '<br><br>';
echo "resultSoma2: "; echo $resultSoma2 . '<br><br>';
echo "Versão: "; echo Matematica::VERSION . '<br><br>';