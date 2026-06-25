<?php

include 'inc-cabecalho.php';
include 'inc-conexao.php';

?>
 
    <main>
        <div class="container" align="center">
            <div class="row justify-content-center">

        <?php
        include "inc-conexao.php";
        $sql = "SELECT * FROM tb_produtos";
        $resultado = mysqli_query($conn, $sql);
        while($linha = mysqli_fetch_assoc($resultado) ){
            ?>
            <div class="card mb-3 col-6 me-5" style="width: 22rem;">
                <img src="<?= $linha['foto'];?>" class="card-img-top" alt="leaozinho">
                <div class="card-body">
                    <h2 class="card-title"><?= $linha['nome']; ?></h2>
                    <p class="card-text"><?= $linha['descricao']; ?><br>
                    <p class="card-text"><?= $linha['tamanho']; ?></p>
                    <p class="card-text"><?= "R$" . number_format($linha['valor'], 2, ',', '.'); ?></p>
                    <p>Encomendas por DM ✨</p>
                </div>
            </div>
            <?php

        }
        ?>

            </div>
        </div>

    <?php 
    include 'inc-footer.php'; 
    ?>