<?php
$cta_bg = get_field('cta_big_background');
$cta_title = get_field('cta_big_title');
$cta_subtitle = get_field('cta_big_subtitle');
$cta_big_cta_text = get_field('cta_big_cta_text');
$cta_big_cta_url = get_field('cta_big_cta_url');

if( $cta_bg ) :
?>
<section id="parcours" class="cta-section" style="background-image: url('<?= $cta_bg['url']?>');">
    <div class="container">
        <h2 class="font-title"><?= $cta_title; ?></h2>
        <p class="cta-subtitle"><?= $cta_subtitle; ?></p>    
        <a href="<?= $cta_big_cta_url; ?>" class="btn btn-orange"><?= $cta_big_cta_text; ?></a>
    </div>
</section>
<?php endif ;?>