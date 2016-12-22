<?php include './_header.php'; ?>
<?php include './_menu-principal.php'; ?>

<div class="suite-single">

    <?php
    $urlImagem = 'img/lush_spa_splash_02.png';
    $nomeSuite = "Lush Spa Splash";
    include './_vitrine.php';
    ?>


    <div class="container-fluid faixa-detalhes">
        <div class="row">

            <div class="col-sm-5 col-sm-offset-1 atributos">

                <ul>
                    <li>
                        Piscina aquecida com cachoeira
                    </li>
                    <li>
                        Área externa com teto solar
                    </li>
                    <li>
                        Sauna
                    </li>
                    <li>
                        Hidromassagem
                    </li>
                    <li>
                        Ducha dupla com cromoterapia
                    </li>
                    <li>
                        2 TVs de LED de 40 polegadas
                    </li>
                    <li>
                        Ar split (quente e frio)
                    </li>
                    <li>
                        Frigobar
                    </li>
                    <li>
                        Adega de vinhos
                    </li>
                    <li>
                        Som com MP3 Player
                    </li>
                    <li>
                        Internet Wi-fi 
                    </li>
                    <li>
                        Garagem privativa
                    </li>
                </ul>
            </div><!-- descricao --> 

            <div class="col-sm-5 info-preco">

<!--                <p class="descricao">
                    Uma suite exuberante e única, completa com piscina aquecida 
                    privativa dentro da suite, 75 m2 com muito conforto, 
                    entretenimento e privacidade.
                </p>-->

                <div class="tabela-preco">
                    <p>Período <span>R$ 500</span></p>
                    <p>Período (domingo à quinta) <span>R$ 500</span></p>
                    <p>Período (sábado e domingo)<span>R$ 500</span></p>
                    <p>Período (3h)<span>R$ 500</span></p>
                    <p>Hora adicional <span>R$ 500</span></p>
                </div>
                
                <p class="info-checkin">
                    Check-in 15h e check-out as 13h do dia seguinte.
                </p>


            </div><!-- info-preco -->


        </div><!-- row -->

        <div class="col-xs-12 info-reserve">
            <a href="#" class="brn-reserve-suite">RESERVAR ESTA SUÍTE</a>
        </div>


        <?php
        $titulo_compartilhe = "Convide quem vai vivenciar uma experiência inesquecível com você nessa suíte.";
        include './faixa-compartilhar.php';
        ?>

    </div><!-- faixa-detalhes -->

    <div class="container-fluid faixa-fotos-produto">

        <div class="row">


            <?php include './_carousel-suite-2.php'; ?> 

        </div>

    </div><!-- faixa-fotos-produto -->

    <div class="container-fluid faixa-outras-suites-list">
        <div class="row">

            <div class="col-xs-12 titulo">
                <h2>Outras suítes</h2>
            </div>                       
        </div>

        <div class="row">

            <div class="col-sm-6 col-md-4 suite-item">
                <a href="#">
                    <div class="outra-site-item">
                        <img src="img/suite_splash@2x.png">
                        <div class="img-filter"></div>
                    </div><!-- outra-site-item -->
                    <p><span>R$ 280</span> Lush Spa</p>
                </a>
            </div><!-- suite-item -->
            <div class="col-sm-6 col-md-4 suite-item">
                <a href="#">
                    <div class="outra-site-item">
                        <img src="img/suite_splash@2x.png">
                        <div class="img-filter"></div>
                    </div><!-- outra-site-item -->
                    <p><span>R$ 280</span> Lush Spa</p>
                </a>
            </div><!-- suite-item -->
            <div class="col-sm-6 col-md-4 suite-item">
                <a href="#">
                    <div class="outra-site-item">
                        <img src="img/suite_splash@2x.png">
                        <div class="img-filter"></div>
                    </div><!-- outra-site-item -->
                    <p><span>R$ 280</span> Lush Spa</p>
                </a>
            </div><!-- suite-item -->
            <div class="col-sm-6 col-md-4 suite-item">
                <a href="#">
                    <div class="outra-site-item">
                        <img src="img/suite_splash@2x.png">
                        <div class="img-filter"></div>
                    </div><!-- outra-site-item -->
                    <p><span>R$ 280</span> Lush Spa</p>
                </a>
            </div><!-- suite-item -->
            <div class="col-sm-6 col-md-4 suite-item">
                <a href="#">
                    <div class="outra-site-item">
                        <img src="img/suite_splash@2x.png">
                        <div class="img-filter"></div>
                    </div><!-- outra-site-item -->
                    <p><span>R$ 280</span> Lush Spa</p>
                </a>
            </div><!-- suite-item -->
            <div class="col-sm-6 col-md-4 suite-item">
                <a href="#">
                    <div class="outra-site-item">
                        <img src="img/suite_splash@2x.png">
                        <div class="img-filter"></div>
                    </div><!-- outra-site-item -->
                    <p><span>R$ 280</span> Lush Spa</p>
                </a>
            </div><!-- suite-item -->




        </div><!-- row -->
    </div><!-- faixa-outras-suites -->


</div><!-- suite-single -->

<?php include './faixa-concierge.php';?>


<?php
include './_footer.php';
