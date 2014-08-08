<?php
/*
Template Name: Pricing
*/
?>

<!-- Call global metaboxes -->
<?php get_header();?>
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
               <?php if (has_post_thumbnail( $post->ID ) ): ?>
               <?php $image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'med-custom');
               echo "<?php echo $image_url; ?>";
               echo "<div class='featured-image' style='background-image: url($image_url[0])' itemprop='image'></div>";
             ?>
            <?php endif; ?>
      </div><!-- /hero -->

      <div class="pricing-grid">
          <div class="container">
            <div class="row">
                        <div class="col-md-6 pricing-column">
                           <header class="pricing-header">
                              <h2><?php the_field('pricing_headline1'); ?></h2>
                              <hr>
                           </header>
                           <div class="pricing-body">
                              <h3 class="price"><?php the_field('price1'); ?></h3>
                              <p class="pricing-desc">per month</p>
                           </div>
                           <div class="pricing-footer">
                              <ul class="pricing-features">
                                <?php if( have_rows('features1') ):
                                          while ( have_rows('features1') ) : the_row();?>
                                              <li><?php the_sub_field('feature');?></li>
                                <?php endwhile; endif;?>
                              </ul>
                              <a class="btn btn-primary" href="https://inktd.herokuapp.com/sign_up" target="_blank">Sign Up Now</a>
                          </div>
                          <p class="caption">Have Questions? Email or call us at xxx-xxx-xxxx</a>
                        </div><!-- col-md-6-->
                        <div class="col-md-6 pricing-column">
                           <header class="pricing-header">
                              <h2><?php the_field('pricing_headline2'); ?></h2>
                              <hr>
                           </header>
                           <div class="pricing-body">
                              <h3 class="price"><?php the_field('price2'); ?></h3>
                              <p class="pricing-desc">per month</p>
                           </div>
                           <div class="pricing-footer">
                              <ul class="pricing-features">
                                <?php if( have_rows('features1') ):
                                          while ( have_rows('features2') ) : the_row();?>
                                              <li><?php the_sub_field('feature');?></li>
                                <?php endwhile; endif;?>
                              </ul>
                              <a class="btn btn-primary" href="https://inktd.herokuapp.com/sign_up" target="_blank">Sign Up Now</a>
                          </div>
                          <p class="caption">*No Credit Card Required for 30 day trial.</a>
                        </div><!-- col-md-6-->
            </div><!-- /row -->
         </div> <!-- /container -->
      </div> <!-- /pricing grid -->
</div><!-- /main -->
 <?php get_footer(); ?>