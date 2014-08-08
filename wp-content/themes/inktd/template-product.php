<?php
/*
Template Name: Product
*/
?>

<!-- Call global metaboxes -->
<?php
      get_header();?>
      
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

<div class="main">

      <!-- Feature Set #1 -->
      <div class="container">
          <h1>Shop Management Made Easy</h1>
            <div class="row feature-set">
                <div class="col-md-6">
                    <h2><?php the_field('feature_headline1'); ?></h2>
                    <p><?php the_field('feature_copy1'); ?></p>
                </div>
                <div class="col-md-6">
                    <?php $feature_image = get_field('feature_img1');
                    echo "<img class='img-responsive  center-block' src='".$feature_image['url']."' alt=".$feature_image['alt']." />";?>
                </div>
            </div><!-- /row -->
            <div class="row feature-set">
                <div class="col-md-6">
                    <?php $feature_image = get_field('feature_img2');
                    echo "<img class='img-responsive  center-block' src='".$feature_image['url']."' alt=".$feature_image['alt']." />";?>
                </div>
                <div class="col-md-6">
                    <h2><?php the_field('feature_headline2'); ?></h2>
                    <p><?php the_field('feature_copy2'); ?></p>
                </div>
            </div><!-- /row -->
            <div class="row feature-set">
                <div class="col-md-6">
                    <h2><?php the_field('feature_headline3'); ?></h2>
                    <p><?php the_field('feature_copy3'); ?></p>
                </div>
                <div class="col-md-6">
                    <?php $feature_image = get_field('feature_img3');
                    echo "<img class='img-responsive  center-block' src='".$feature_image['url']."' alt=".$feature_image['alt']." />";?>
                </div>
            </div><!-- /row -->
            <div class="row feature-set">
                <div class="col-md-6">
                    <?php $feature_image = get_field('feature_img4');
                    echo "<img class='img-responsive  center-block' src='".$feature_image['url']."' alt=".$feature_image['alt']." />";?>
                </div>
                <div class="col-md-6">
                    <h2><?php the_field('feature_headline4'); ?></h2>
                    <p><?php the_field('feature_copy4'); ?></p>
                </div>
            </div><!-- /row -->
      </div> <!-- /features -->


      <!-- Feature Set #2 -->
      <div class="feature-set set-2">
          <div class="container">
            <div class="row">
                  <h1><?php echo $meta['heading-title2']; ?></h1>
                  <h2><?php echo $meta['heading-description2']; ?></h2>
                       <?php echo "<img class='img-responsive' src=".$meta['feature-image2-1'].">"; ?>
                        <div class="col-md-4 feature-list">
                              <?php echo "<h3>".$meta['feature-title2-1']."</h3>";
                                    echo "<p>".$meta['feature-description2-1']."</p>";
                              ?>
                        </div><!-- col-md-4 -->
                        <div class="col-md-4 feature-list">
                              <?php echo "<h3>".$meta['feature-title2-2']."</h3>";
                                    echo "<p>".$meta['feature-description2-2']."</p>";
                              ?>
                        </div><!-- col-md-4 -->
                        <div class="col-md-4 feature-list">
                              <?php echo "<h3>".$meta['feature-title2-3']."</h3>";
                                    echo "<p>".$meta['feature-description2-3']."</p>";
                              ?>
                        </div><!-- col-md-4 -->
            </div><!-- /row -->
         </div> <!-- /container -->
      </div> <!-- /features -->


      <!-- Feature Set #3 -->
      <div class="feature-set set-3">
          <div class="container">
            <div class="row">
                  <h1><?php echo $meta['heading-title3']; ?></h1>
                  <h2><?php echo $meta['heading-description3']; ?></h2>
                        <div class="col-md-4 feature-list">
                              <?php echo "<img class='img-responsive' src=".$meta['feature-image3-1'].">"; ?>
                              <?php echo "<h3>".$meta['feature-title3-1']."</h3>";
                                    echo "<p>".$meta['feature-description3-1']."</p>";
                              ?>
                        </div><!-- col-md-4 -->
                        <div class="col-md-4 feature-list">
                               <?php echo "<img class='img-responsive' src=".$meta['feature-image3-2'].">"; ?>
                              <?php echo "<h3>".$meta['feature-title3-2']."</h3>";
                                    echo "<p>".$meta['feature-description3-2']."</p>";
                              ?>
                        </div><!-- col-md-4 -->
                        <div class="col-md-4 feature-list">
                               <?php echo "<img class='img-responsive' src=".$meta['feature-image3-3'].">"; ?>
                              <?php echo "<h3>".$meta['feature-title3-3']."</h3>";
                                    echo "<p>".$meta['feature-description3-3']."</p>";
                              ?>
                        </div><!-- col-md-4 -->
            </div><!-- /row -->
         </div> <!-- /container -->
      </div> <!-- /features -->


      <!-- Violator -->
      <div class="violator grey">
            <div class="container">
                  <div class="col-md-8">
                        <h2 itemprop="headline"><?php echo $meta['violator-title'];?></h2>
                        <p itemprop="description"><?php echo $meta['violator-description'];?></p>
                  </div><!-- /col-md-8 -->
                  <div class="col-md-4 button">
                        <a data-toggle="modal" data-target="#webinar" class="btn btn-primary btn-lg"><?php echo $meta['violator-btn'];?></a>
                  </div><!-- /col-md-6 -->
            </div><!-- /container -->
      </div><!-- /violator -->

</div>
 <?php get_footer(); ?>