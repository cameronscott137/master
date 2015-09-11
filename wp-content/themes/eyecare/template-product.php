<?php
/*
Template Name: Features
*/
?>

<!-- Call global metaboxes -->
<?php get_header();?>
<main class="main" role="main" itemprop="mainContentOfPage" itemscope="itemscope" itemtype="http://schema.org/WebPage">
      <!-- Hero -->
      <div class="hero">
               <div class="container">
                     <div class="row">
                         <div class="col-md-12">
                            <h1 itemprop="headline"><?php the_field('hero_headline'); ?></h1>
                            <?php if (!empty(get_field('hero_sub')) ) {?>
                                <h2 itemprop="description"><?php the_field('hero_sub'); ?></h2>
                            <?php } ?>
                            <?php $hero_image = get_field('hero_img');
                            if( !empty($bg) ):
                                echo "<img class='img-responsive center-block' src='".$hero_image['url']."' alt=".$hero_image['alt']." />";
                            endif;?>
                         </div>
                     </div>
               </div>
                <?php $bg = get_field('hero_background_image');
                    if( !empty($bg) ): ?>
                     <div class='featured-image' style='background-image: url(<?php echo $bg['url']; ?>)' itemprop='image' alt=''></div>
                <?php endif; ?>
      </div><!-- /hero -->
      <div class="container features">   
<?php

// check if the repeater field has rows of data
if( have_rows('three_column_features') ):
    while ( have_rows('three_column_features') ) : the_row();?>
 
          <div class="row">
              <?php $headline = get_sub_field('headline');
              if (!empty($headline) ){ ?>
                    <h1 class="section-title" itemprop="headline"><?php the_sub_field('headline');?></h1>
              <?php }
              $description = get_sub_field('description');
              if (!empty($description) ){ ?>
                      <p class="description" itemprop="description"><?php the_sub_field('description');?></p>
              <?php }

              if (get_sub_field('columns') == '1') {?>
                        <div class="col-md-12">
                            <?php $image = get_sub_field('column_1_image');
                            if( !empty($image) ): ?>
                                <img class="img-responsive center-block" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                            <?php endif; ?>
                            <h2 class="feature-title"><?php the_sub_field('column_1_headline');?></h2>
                            <p><?php the_sub_field('column_1_copy');?></p>
                        </div> <!-- /col-md-12 -->
              <?php } else if (get_sub_field('columns') == '2')  {?>
                        <div class="col-md-6">
                            <?php $image = get_sub_field('column_1_image');
                            if( !empty($image) ): ?>
                                <img class="img-responsive center-block" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                            <?php endif; ?>
                            <h2 class="feature-title"><?php the_sub_field('column_1_headline');?></h2>
                            <p><?php the_sub_field('column_1_copy');?></p>
                        </div> <!-- /col-md-6 -->
                        <div class="col-md-6">
                            <?php $image = get_sub_field('column_2_image');
                            if( !empty($image) ): ?>
                                <img class="img-responsive center-block" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                            <?php endif; ?>
                            <h2 class="feature-title"><?php the_sub_field('column_2_headline');?></h2>
                            <p><?php the_sub_field('column_2_copy');?></p>
                        </div> <!-- /col-md-6 -->
              <?php } else if (get_sub_field('columns') == '3')  {?>
                                  <div class="col-md-4">
                                      <?php $image = get_sub_field('column_1_image');
                                      if( !empty($image) ): ?>
                                          <img class="img-responsive center-block" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                      <?php endif; ?>
                                      <h2 class="feature-title"><?php the_sub_field('column_1_headline');?></h2>
                                      <p><?php the_sub_field('column_1_copy');?></p>
                                  </div> <!-- /col-md-4 -->
                                  <div class="col-md-4">
                                      <?php $image = get_sub_field('column_2_image');
                                      if( !empty($image) ): ?>
                                          <img class="img-responsive center-block" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                      <?php endif; ?>
                                      <h2 class="feature-title"><?php the_sub_field('column_2_headline');?></h2>
                                      <p><?php the_sub_field('column_2_copy');?></p>
                                  </div> <!-- /col-md-4 -->
                                  <div class="col-md-4">  
                                        <?php $image = get_sub_field('column_3_image');
                                        if( !empty($image) ): ?>
                                            <img class="img-responsive center-block" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                        <?php endif; ?>
                                        <h2 class="feature-title"><?php the_sub_field('column_3_headline');?></h2>
                                        <p><?php the_sub_field('column_3_copy');?></p>
                                  </div> <!-- /col-md-4 -->
              <?php } ?>
          </div><!-- /row -->


<?php 
endwhile;
endif;
?>
      </div><!-- /container -->
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
</div>
 <?php get_footer(); ?>