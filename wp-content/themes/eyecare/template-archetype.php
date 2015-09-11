<?php
/*
Template Name: Archetype
*/
?>

<!-- Call global metaboxes -->
<?php get_header();?>
<main class="main archetype" role="main" itemprop="mainContentOfPage" itemscope="itemscope" itemtype="http://schema.org/WebPage">
      <!-- Hero -->
      <div class="hero">
               <div class="container">
                     <div class="row">
                         <div class="col-md-12">
                            <h1 itemprop="headline"><?php the_field('hero_headline'); ?></h1>
                            <h2 itemprop="description"><?php the_field('hero_sub'); ?></h2>
                         </div>
                     </div>
               </div>
                <?php $bg = get_field('hero_background_image');
                    if( !empty($bg) ): ?>
                     <div class='featured-image' style='background-image: url(<?php echo $bg['url']; ?>)' itemprop='image' alt=''></div>
                <?php endif; ?>
      </div><!-- /hero -->

       <!-- Violator -->
      <section class="violator">
          <div class="container">
                <div class="col-md-8">
                  <h2><?php the_field('violator_headline'); ?></h2>
                  <p><?php the_field('violator_copy'); ?></p>
                </div><!-- /col-md-6 -->
                <div class="col-md-4 button text-center">
                    <a class="btn btn-primary btn-lg" href="https://confirmsubscription.com/h/t/1029DACD45BAE604" target="_blank"><?php the_field('violator_btn'); ?></a>
                </div><!-- /col-md-8 -->
          </div><!-- /container -->
      </section><!-- /violator -->  
    <section class="features col3 container">
        <div class="row">
            <div class="col-md-4">
                  
                  <?php $feature_image = get_field('feature_1_image');
                  if (!empty($feature_image) ){
                    echo "<img class='img-responsive center-block' src='".$feature_image['url']."' alt=".$feature_image['alt']." />";
                  }?>
                  <h3><?php the_field('feature_1_headline'); ?></h3>
                  <p><?php the_field('feature_1_copy'); ?></p>
                </div><!-- col-md-4 -->
                <div class="col-md-4">
                   <?php $feature_image = get_field('feature_2_image');
                    if (!empty($feature_image) ){
                     echo "<img class='img-responsive center-block' src='".$feature_image['url']."' alt=".$feature_image['alt']." />";
                    }?>
                  <h3><?php the_field('feature_2_headline'); ?></h3>
                  <p><?php the_field('feature_2_copy'); ?></p>
                </div><!-- col-md-4 -->
                <div class="col-md-4">
                   <?php $feature_image = get_field('feature_3_image');
                    if (!empty($feature_image) ){
                       echo "<img class='img-responsive center-block' src='".$feature_image['url']."' alt=".$feature_image['alt']." />";
                    }?>
                  <h3><?php the_field('feature_3_headline'); ?></h3>
                  <p><?php the_field('feature_3_copy'); ?></p>
              </div><!-- col-md-4 -->
        </div>
      </section><!-- features -->
      <section class="product-shot">
            <?php $product_image = get_field('product_image');
            echo "<img class='img-responsive center-block' src='".$product_image['url']."' alt=".$feature_image['alt']." />";?>
      </section>
</main>
 <?php get_footer(); ?>