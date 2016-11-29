<?php
include './_header.php';
?>

<div class="suite-single">

    <?php
    $urlImagem = 'img/lush_spa_splash_02.png';
    include './_vitrine.php';
    ?>

    <div class="container-fluid faixa-detalhes">
        <div class="row">

            <div class="col-sm-5 col-sm-offset-1 descricao">
                <p>
                    Uma suite exuberante e única, completa com piscina aquecida 
                    privativa dentro da suite, 75 m2 com muito conforto, 
                    entretenimento e privacidade.
                </p>

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

            <div class="col-sm-4 col-sm-offset-1 info-preco">

                <div class="tabela-preco">
                    <table>
                        <tbody>
                            <tr>
                                <td>Período</td>
                                <td>R$ 480,00</td>
                            </tr>
                            <tr>
                                <td colspan="2" class="linha"><hr/></td>
                            </tr>
                            <tr>
                                <td>Pernoite (Dom a Qui)</td>
                                <td>R$ 480,00</td>
                            </tr>
                            <tr>
                                <td colspan="2" class="linha"><hr/></td>
                            </tr>
                            <tr>
                                <td>Pernoite (Sab e Dom)</td>
                                <td>R$ 515,00</td>
                            </tr>
                            <tr>
                                <td colspan="2" class="linha"><hr/></td>
                            </tr>
                            <tr>
                                <td>Promocional 3h</td>
                                <td>R$ 350,00</td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <a class="btn-reservar">Reservar suite</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                </div>

                <div class="compartilhar">


                    <p>CONVIDE SEU PAR PARA COMPARTILHAR ESTA SUÍTE:</p>

                    <ul class="icones">
                        <li><img src="img/icones_msg@2x.png"></li>
                        <li><img src="img/icone_whatsapp@2x.png"></li>
                        <li><img src="img/icones_msg@2x.png"></li>
                    </ul>

                </div>

            </div><!-- info-preco -->


        </div><!-- row -->
    </div><!-- faixa-detalhes -->

    <div class="container-fluid faixa-fotos-produto">

        <div class="row">


            <?php include './_carousel-suite.php'; ?> 

        </div>

    </div><!-- faixa-fotos-produto -->

    <div class="container-fluid faixa-outras-suites-list">
        <div class="row">

            <div class="col-xs-12 titulo">
                <h2>Outras suítes</h2>
            </div>                       
        </div>

        <div class="row">

            <div class="col-sm-6 suite-item">
                <a href="#">
                    <div class="outra-site-item">

                        <img src="img/suite_splash@2x.png">

                        <div class="info-suite">

                            <h3>LUSH SPLASH</h3>
                            <p>a partir de </p>
                            <p class="price"><span class="amout">R$ 350</span></p>

                        </div><!-- info-suite -->
                        <div class="img-filter"></div>
                    </div><!-- outra-site-item -->
                </a>
            </div><!-- suite-item -->

            <div class="col-sm-6 suite-item">
                <a href="#">
                    <div class="outra-site-item">

                        <img src="img/suite_splash@2x.png">

                        <div class="info-suite">

                            <h3>LUSH SPLASH</h3>
                            <p>a partir de </p>
                            <p class="price"><span class="amout">R$ 350</span></p>

                        </div><!-- info-suite -->
                        <div class="img-filter"></div>
                    </div><!-- outra-site-item -->
                </a>
            </div><!-- suite-item -->

            <div class="col-sm-6 suite-item">
                <a href="#">
                    <div class="outra-site-item">

                        <img src="img/suite_splash@2x.png">

                        <div class="info-suite">

                            <h3>LUSH SPLASH</h3>
                            <p>a partir de </p>
                            <p class="price"><span class="amout">R$ 350</span></p>

                        </div><!-- info-suite -->
                        <div class="img-filter"></div>
                    </div><!-- outra-site-item -->
                </a>
            </div><!-- suite-item -->

            <div class="col-sm-6 suite-item">
                <a href="#">
                    <div class="outra-site-item">

                        <img src="img/suite_splash@2x.png">

                        <div class="info-suite">

                            <h3>LUSH SPLASH</h3>
                            <p>a partir de </p>
                            <p class="price"><span class="amout">R$ 350</span></p>

                        </div><!-- info-suite -->
                        <div class="img-filter"></div>
                    </div><!-- outra-site-item -->
                </a>
            </div><!-- suite-item -->


        </div><!-- row -->
    </div><!-- faixa-outras-suites -->


</div><!-- suite-single -->

<?php
include './_footer.php';
