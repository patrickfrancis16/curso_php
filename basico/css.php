<div class="titulo">Integração CSS</div>

<h1 center>
    <?php
        echo 'Olá, ';
        echo '<small>';
        echo ' Mundo !';
        echo '</small>';
    ?>
</h1>

<?= "<div center azul>Outra forma de expressar</div>" ?>

<br>
<div center><button dobro><?= 'Botão' ?></button></div>

<style>
    button{
        padding: 5px 20px;
        background: #4286f4;
        color: #fff;
        font-weight: bold;
        border-radius: 10px;
    }
    [center]{
        display: flex;
        justify-content: center;
    }

    [azul]{
        color: #4286f4;
    }

    [dobro]{
        font-size: 2rem;}
</style>