<div class="titulo">Aritiméticas</div>

<?php   
    echo 1 + 1, '<br>';
    var_dump(1 + 1);
    echo '<br>';
    echo 1 +2.5, '<br>';
    echo 10 - 2, '<br>';    
    echo 2 * 5, '<br>';
    echo 7 / 4, '<br>';

    echo intdiv(7, 4), '<br>';
    echo round(7 / 4), '<br>';
    echo 7 % 4, '<br>';
    //echo 7 / 0, '<br>';

    //Precedência de Operadores
    echo '<p>Precedência de Operadores</p>';
    echo 2 + 5 * 3, '<br>';
    echo (2 + 5) * 3, '<br>';
    echo 2 + 3 * 4 ** 2, '<br>';