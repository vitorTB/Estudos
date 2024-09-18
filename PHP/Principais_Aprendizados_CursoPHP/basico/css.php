<div class="titulo">CSS in PHP</div>

<h1 center>
<?php 
echo 'Olá';
echo '<small>';
echo ' Mundo';
echo '</small>';
?>
</h1>

<?= "<div>Outra forma de me 'expressar' ! </div>" ?>

<br>

<div><button><?= "legal" ?></button></div>

<style>

    button{
        padding: 5px 20px;
        background-color: #4286f4;
        color: #EEE;
        font-weight: bold;
        border-radius:10px; 
    }

    [center]{
        display:flex;
        justify-content: center;
    }





</style>