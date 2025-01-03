<div class="titulo">Variaveis</div>

<?php
    $variavel = 'valor';
    echo $variavel;
    echo '<br>';
    echo $variavel = 'novo valor';
    echo '<br>';
    var_dump($variavel);

    echo '<br>';
    $a = 3;
    $b = 2;
    $soma = $a + $b;
    echo $soma;

    echo '<br>';
    echo isset($soma);

    echo '<br>';
    unset($soma);
    var_dump($soma)
    
?>