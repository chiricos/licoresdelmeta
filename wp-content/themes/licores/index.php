<?php
/*
* Template Name: Licores
*/
    get_header();

?>

<section class="menu-empresa hidden">
    <div>
        <p>Unidad de Licores del Meta</p>
        <article>
            <p>Información institucional.</p>
            <section class="content-menu-empresa section-empresa">
                <a href="">Historia</a>
                <a href="">Objetivo</a>
                <a href="">Organigrama</a>
                <a href="">Estados Financieros</a>
            </section >

            <section class="content-menu-empresa">
                <a href="">Mision Vision</a>
                <a href="">Presupuestos</a>
                <a href="">Plan Anticorrupción</a>
                <a href="<?php bloginfo('template_url'); ?>/page.php">Control Interno</a>
            </section>
        </article>
    </div>
</section>

<section class="menu-productos hidden">
    <section class="content-menu-productos ">
        <figure>
            <img src="<?php bloginfo('template_url'); ?>/images/mini1.png" />
        </figure>
        <div>
            <span>Aguardiente Llanero</span>
            <p>Tradicional</p>
        </div>
    </section >

    <section class="content-menu-productos ">
        <figure>
            <img src="<?php bloginfo('template_url'); ?>/images/mini2.png" />
        </figure>
        <div>
            <span>Aguardiente Llanero</span>
            <p>Tapa Azul</p>
        </div>
    </section>
</section>

</section>

<section class="content-social ">
    <img src="<?php bloginfo('template_url'); ?>/images/facebook.png">
    <img src="<?php bloginfo('template_url'); ?>/images/twitter.png">
    <img src="<?php bloginfo('template_url'); ?>/images/youtube.png">
</section>




<div class="wrapper">
  <h1 class="entry-title"><?php the_title(); ?></h1>
 <?php
// TO SHOW THE PAGE CONTENTS
while ( have_posts() ) : the_post(); ?> <!--Because the_content() works only inside a WP Loop -->
    <div class="entry-content-page">
        <?php the_content(); ?> <!-- Page Content -->
    </div><!-- .entry-content-page -->

<?php
endwhile; //resetting the page loop
wp_reset_query(); //resetting the page query
?>


   <!-- <div class="content-wrapper">
        <section>
            <figure class="content-img">
                <img src="<?php bloginfo('template_url'); ?>/images/llaneroaguardiente.png" />
            </figure>
        </section>
        <section class="content-control">
            <figure>
                <img class="img-table" src="<?php bloginfo('template_url'); ?>/images/table.png">
                <p class="p-table">Control interno</p>
            </figure>
            <div class="control-income">
                <p>La unidad de licores del Meta presenta el informe de Control Interno.</p>
                <section>
                    <p>Control Interno</p>
                    <a href="">2013</a>
                    <a href="">2014</a>
                    <a href="">2015</a>
                </section>
            </div>
        </section>
    </div>-->
</div>
<?php
    get_footer();

