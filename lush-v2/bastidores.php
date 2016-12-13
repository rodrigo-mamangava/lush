<?php include './_header.php'; ?>
<?php include './_menu-principal.php'; ?>

<div class="bastidores">


    <?php
    $urlImagem = 'img/v2/lush-fachada@3x.jpg';
    $nomeSuite = "Bastidores";
    include './_vitrine.php';
    ?>


    <div class="faixa-bastidores container">

        <?php for ($i = 1; $i <= 10; $i++): ?>
            <?php include './bastidores-item.php'; ?>
        <?php endfor; ?>

        <div class="row">
            <div class="passador">
                <div class="col-sm-8 col-sm-offset-2 text-center">

                    <ul>
<!--                        <li class="pull-left">;
                            <a class="" href="#">
                                Anterior
                            </a>
                        </li>-->
                        <li>
                            <a href="#">
                                1
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                2
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                3
                            </a>
                        </li>
                        <li class="pull-right">
                            <a class="" href="#">
                                Próximo
                            </a>
                        </li>
                    </ul>

                </div>
            </div><!-- passador -->
        </div>

    </div>




</div>

<?php
include './_footer.php';
