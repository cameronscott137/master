<?php
/*
Template Name: Tabbed Template
*/
?>
<?php get_header();?>
<main class="main" itemprop="mainContentOfPage" itemscope="itemscope" itemtype="http://schema.org/WebPage">
      <!-- Hero -->
      <div class="hero">
               <div class="container">
                         <div class="row social">
                            <div class="col-sm-12 ">
                              <?php
                                if( have_rows('social_icons') ):
                                    while ( have_rows('social_icons') ) : the_row();?>
                                        <a href="<?php the_sub_field('social_url');?>" target="_blank">
                                          <?php $icon = get_sub_field('icon');
                                              if (!empty($icon) ){
                                                echo "<img class='img-responsive social-icon pull-right' src='".$icon['url']."' alt=".$icon['alt']." />";
                                              }?>
                                        </a>
                                    <?php endwhile;
                                endif;
                              ?>
                            </div><!-- /col-sm-12 -->
                          </div><!--/row -->
                          <div class="row">
                            <img class="center-block img-responsive site-logo" src="<?php echo get_stylesheet_directory_uri();?>/images/logo.svg" alt="EyeCare PD Logo">
                          </div>
                     <div class="row">
                         <div class="col-md-12">
                                <h2 itemprop="headline" class="site-headline"><?php the_field('site_headline'); ?></h2>
                         </div>
                     </div>

                     <div class="row tabs">
                          <nav class="primary" itemscope itemtype="http://schema.org/SiteNavigationElement">
                              <?php wp_nav_menu( array( 'theme_location' => 'primary', 'items_wrap' => '<ul class="nav">%3$s</ul>') ); ?>
                          </nav>
                     </div><!-- .row -->
               </div>
                <?php $bg = get_field('hero_background_image');
                    if( !empty($bg) ): ?>
                     <div class='featured-image' style='background-image: url(<?php echo $bg['url']; ?>)' itemprop='image' alt=''></div>
                <?php endif; ?>
      </div><!-- /hero -->

    <section class="intro text-center">
      <div class="container">
          <h2 itemprop="headline"><?php the_field('intro_headline'); ?></h2>
          <?php the_field('intro_copy'); ?>
          <a class="btn btn-primary center-block" href="#contact"><?php the_field('intro_button_text');?></a>
            <?php $intro = get_field('intro_image_array');
            if (!empty($intro) ){
              echo "<img class='img-responsive intro-array center-block' src='".$intro['url']."' alt=".$intro['alt']." />";
            }?>
      </div><!-- /container -->
    </section>

    <section class="col3 container text-center">
      	<div class="row">
            <h2 class="section-title"><?php the_field('why_use_travelgroups_headline');?></h2>
                <?php
                  if( have_rows('why_use_travelgroups') ):
                      while ( have_rows('why_use_travelgroups') ) : the_row();?>
    	        	    <div class="col-md-4">
                      <?php $why_image = get_sub_field('image');
    		              if (!empty($why_image) ){
                        echo "<img class='img-responsive center-block' src='".$why_image['url']."' alt=".$why_image['alt']." />";
                      }?>
    		              <?php the_sub_field('content'); ?>
    		            </div><!-- col-md-4 -->
                <?php endwhile; endif;?>
		    </div><!-- /row -->
      </section><!-- features -->


<?php if (get_field('do_you_need_this_section') == 'Yes') {?>

<section class="form text-center groups" id="contact">
  <div class="container">
    <div class="row">
      <h2 class="section-title"><?php the_field('form_headline');?></h2>
      <p class="section-subtitle"><?php the_field('form_subheadline');?></p>
        <div class="col-md-5 col-md-push-6 text-left">
          <h4>What we're looking forward to discussing:</h4>
          <ul>
              <?php
                if( have_rows('sidebar_bullets') ):
                    while ( have_rows('sidebar_bullets') ) : the_row();?>
                  <li><?php the_sub_field('bullet');?>
                <?php endwhile; endif;?>
          </ul>
        </div><!-- col-md-5 -->
        <div class="col-md-6 col-md-pull-5 text-left">
          <?php $form = get_field('form');
          echo do_shortcode('[gravityform id='.$form.' title=false description=false ajax=true tabindex=49]');?>
        </div><!-- col-md-8 -->
    </div><!-- /row -->
  </div><!-- /container -->
</section><!-- features --> 


<?php } else { ?>
<section class="form text-center wallet" id="contact">
  <div class="container">
    <div class="row">
      <h2 class="section-title"><?php the_field('form_headline');?></h2>
      <p class="section-subtitle"><?php the_field('form_subheadline');?></p>
        <div class="col-md-6 center-block">
        <?php $form = get_field('form');
        echo do_shortcode('[gravityform id='.$form.' title=false description=false ajax=true tabindex=49]');?>
        </div><!-- col-md-8 -->
    </div><!-- /row -->
  </div><!-- /container -->
</section><!-- features --> 

<?php } ?>
<section class="footer">
  <div class="container">
    <div class="row">
        <div class="col-md-8 ">
          <?php the_field('footer_content');?>
        </div><!-- col-md-8 -->
    </div><!-- /row -->
    <div class="row social">
        <div class="col-md-6 col-md-push-6 text-right ">
          <?php
            if( have_rows('footer_social_icons') ):
                while ( have_rows('footer_social_icons') ) : the_row();?>
                    <a href="<?php the_sub_field('social_url');?>" target="_blank">
                      <?php $icon = get_sub_field('social_icon');
                          if (!empty($icon) ){
                            echo "<img class='img-responsive social-icon pull-right' src='".$icon['url']."' alt=".$icon['alt']." />";
                          }?>
                    </a>
                <?php endwhile;
            endif;
          ?>
        </div><!-- /col-sm-6 -->
      </div><!--/social -->
  </div><!-- /container -->
</section><!-- footer --> 

<section class="copyright">
  <div class="container">
    <div class="row">
        <div class="col-md-6 ">
          <?php the_field('copyright_content');?>
        </div><!-- col-md-6 -->
        <div class="col-md-6">
            <?php $footer_logo = get_field('copyright_logo');
              if (!empty($footer_logo) ){
                echo "<img class='img-responsive copyright-logo pull-right' src='".$footer_logo['url']."' alt=".$footer_logo['alt']." />";
              }?>
        </div><!-- col-md-6 -->
    </div><!-- /row -->
  </div><!-- /container -->
</section><!-- footer --> 
</main>
 <?php get_footer(); ?>