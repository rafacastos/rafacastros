<?php get_header(); ?>

<section class="container-fluid">
    <div class="row rotate">
        <div class="homepage-hero-module">
            <div class="video-container">
                <div class="filter"></div>
                <video autoplay loop class="fillWidth">
                <source src="<?php echo get_template_directory_uri(); ?>/assets/MP4/Aloha-Mundo.mp4" type="video/mp4" />Your browser does not support the video tag. I suggest you upgrade your browser.
                <source src="<?php echo get_template_directory_uri(); ?>/assets/WEBM/Aloha-Mundo.webm" type="video/webm" />Your browser does not support the video tag. I suggest you upgrade your browser.
            </video>
                <div class="poster hidden">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/Snapshots/Aloha-Mundo.jpg" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="row" id="servicos">
        <div  id="rotate2">
            <div class="container">
                <div class="row" id="demos">
                    <div class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="row line">
                                <img src="<?php echo get_template_directory_uri(); ?>/imagens/sites.png" alt="">
                                <h2>Criação de Sites</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, adipisci!</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row line">
                                <img src="<?php echo get_template_directory_uri(); ?>/imagens/responsivo.png" alt="">
                                <h2>Sites Responsivos</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat, laborum?</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row">
                                <img src="<?php echo get_template_directory_uri(); ?>/imagens/layouts.png" alt="">
                                <h2>Criação de Layouts</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, quaerat.</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row">
                                <img src="<?php echo get_template_directory_uri(); ?>/imagens/seo-analytics.png" alt="">
                                <h2>SEO e Analytics</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet, repellat!</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row">
                                <img src="<?php echo get_template_directory_uri(); ?>/imagens/mkt-digital.png" alt="">
                                <h2>Marketing Digital</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos, tempora?</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row">
                                <img src="<?php echo get_template_directory_uri(); ?>/imagens/email.png" alt="">
                                <h2>E-mail Marketing</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi, voluptatem.</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row">
                                <img src="<?php echo get_template_directory_uri(); ?>/imagens/tecnologia.png" alt="">
                                <h2>Tecnologia</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit, cumque!</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row">
                                <img src="<?php echo get_template_directory_uri(); ?>/imagens/grafico.png" alt="">
                                <h2>Design Gráfico</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi, ex.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




<?php get_footer(); ?>
