<?php include './_header.php'; ?>
<?php include './_menu-principal.php'; ?>

<div class="experiencia-single">


    <?php
    $urlImagem = 'img/v2/img-centro@2x_1.jpg';
    $nomeSuite = "noite romântica";
    include './_vitrine.php';
    ?>

    <div class="faixa-texto-simples">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                    <h2>
                        O LUSH te ajuda a transformar sua comemoração em uma 
                        experiência sensorial completa. Acrescente na reserva da 
                        suíte um dos pacotes abaixo.
                    </h2>
                </div>
            </div>
        </div>
    </div>

    <div class="pacote-loop">
        <div class="container-fluid">
            <div class="row">
                <?php for ($i = 1; $i <= 10; $i++): ?>
                    <?php include './_experiencia-item.php'; ?>
                <?php endfor; ?>
            </div>
        </div>
    </div><!-- pacote-loop -->


    <div class="container-fluid">

        <div class="row">
            <?php
            $titulo_compartilhe = "Convide quem vai vivenciar uma experiência inesquecível com você.";
            include './faixa-compartilhar.php';
            ?>
        </div>

    </div>



</div><!-- experiencia-single -->

<?php
include './_footer.php';
