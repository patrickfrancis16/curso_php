<div class="titulo">Integração CSS</div>

<h1>
    <?php
        echo 'Olá, ';
        echo '<small>';
        echo ' Mundo ';
        echo '</small>';
    ?>
</h1>

<?= "<div>Outra forma de expressar</div>" ?>

<br>
<div><button><?= 'Botão' ?></button></div>

<style>
    button{
        padding: 5px 20px;
        background: #4286f4;
        color: #fff;
        font-weight: bold;
        border-radius: 10px;
    }
</style>