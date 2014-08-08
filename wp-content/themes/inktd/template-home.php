<?php
/*
Template Name: Home
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
                            <h2 itemprop="description"><?php the_field('hero_sub'); ?></h2>
                            <a class="btn btn-primary" href="https://inktd.herokuapp.com/sign_up" target="_blank"><?php the_field('hero_btn'); ?></a>
                    		    <p>No credit card required</p>
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

    <section class="archetype-features container">
      	<div class="row">
	        <h2>Need Headline</h2>
	        	<div class="col-md-4">
		               <?php $feature_image = get_field('feature_1_image');
		               echo "<img class='img-responsive img-circle center-block' src='".$feature_image['url']."' alt=".$feature_image['alt']." />";?>
		              <h3>Know the Details</h3>
		              <p>Inktd’s automated reports crunch the numbers for you better than paper ever could, which means you can spot slower months ahead of time and get ‘em filled.</p>
		            </div><!-- col-md-4 -->
		            <div class="col-md-4">
		               <?php $feature_image = get_field('feature_2_image');
		               echo "<img class='img-responsive img-circle center-block' src='".$feature_image['url']."' alt=".$feature_image['alt']." />";?>
		              <h3>Keep 'em Coming</h3>
		              <p>Our cloud-based scheduler gives you access to appointment books for both your artists and your shop, so you always know who’s coming through the door.</p>
		            </div><!-- col-md-4 -->
		            <div class="col-md-4">
		               <?php $feature_image = get_field('feature_3_image');
		               echo "<img class='img-responsive img-circle center-block' src='".$feature_image['url']."' alt=".$feature_image['alt']." />";?>
		              <h3>Show Off Your Shop</h3>
		              <p>Inktd’s embedded social tools allows your shop to promote its latest work—and to reel in its newest clients.</p>
	            </div><!-- col-md-4 -->
		    </div>
		    <div class="row buttons">	
				<a class="btn btn-primary" href="<?php bloginfo('url');?>/for-shop-owners/">For Shop Owners</a>
		    	<a class="btn btn-primary" href="<?php bloginfo('url');?>/for-artists/">For Artists</a>
		    </div>
      </section><!-- archetype-features -->
      <section class="feature-bullets">
      	<div class="container">
      		<div class="row">
      			<div class="col-md-4">
      				<h2>Inktd at a Glance</h2>
      				<ul>
	      				<?php if( have_rows('bullets') ):
	                        while ( have_rows('bullets') ) : the_row();?>
	                            <li><?php the_sub_field('bullet');?></li>
	                    <?php endwhile; endif;?>
	                </ul>
	               	<a class="btn btn-primary" href="<?php bloginfo('url');?>/product/">Learn More About Inktd</a>
      			</div><!-- /col-md-6 -->
      			<img class="img-responsive" src="<?php echo get_stylesheet_directory_uri();?>/images/home_bullets_laptop.png">
      		</div><!-- /row -->
      	</div>
      </section>

    <section class="artists container">
      	<div class="row">
	        <h2>Need Headline</h2>
	        	<div class="col-md-4">
		               <?php $artist_image = get_field('artist_1_image');
		               echo "<img class='img-responsive img-circle center-block' src='".$artist_image['url']."' alt=".$artist_image['alt']." />";?>
		              <h3><?php the_field('artist_1_headline'); ?></h3>
		              <p><?php the_field('artist_1_copy'); ?></p>
		            </div><!-- col-md-4 -->
		            <div class="col-md-4">
		               <?php $artist_image = get_field('artist_2_image');
		               echo "<img class='img-responsive img-circle center-block' src='".$artist_image['url']."' alt=".$artist_image['alt']." />";?>
		              <h3><?php the_field('artist_2_headline'); ?></h3>
		              <p><?php the_field('artist_2_copy'); ?></p>
		            </div><!-- col-md-4 -->
		            <div class="col-md-4">
		               <?php $artist_image = get_field('artist_3_image');
		               echo "<img class='img-responsive img-circle center-block' src='".$artist_image['url']."' alt=".$artist_image['alt']." />";?>
		              <h3><?php the_field('artist_3_headline'); ?></h3>
		              <p><?php the_field('artist_3_copy'); ?></p>
	            </div><!-- col-md-4 -->
		    </div>
      </section><!-- artists -->

      <section class="demo">
        <div class="container">
            <div class="row">
                <div class="col-md-12 center-block text-center">
                    <h2 itemprop="headline">Want to see how Inktd could help your shop?</h2>
                    <p itempop="description">Request a demo fo the product.</p>
                    <?php echo do_shortcode('[gravityform id=1 title=false description=false ajax=true tabindex=49]');?>
                </div>
            </div><!-- /row -->
        </div><!-- /container -->
      </section>
       <!-- Violator -->
      <section class="violator">
          <div class="container">
                <div class="col-md-6 col-md-push-6 button">
                	<h2><?php the_field('violator_headline'); ?></h2>
                	<p><?php the_field('violator_copy'); ?></p>
                		<a class="btn btn-primary btn-lg" href="https://inktd.herokuapp.com/sign_up" target="_blank"><?php the_field('violator_btn'); ?></a>
                </div><!-- /col-md-6 -->
                <div class="col-md-6 col-md-pull-6 product">
               <?php $violator_image = get_field('violator_image');
               echo "<img class='img-responsive center-block' src='".$violator_image['url']."' alt=".$violator_image['alt']." />";?>
                </div><!-- /col-md-8 -->
          </div><!-- /container -->
      </section><!-- /violator -->      
</main>
 <?php get_footer(); ?>