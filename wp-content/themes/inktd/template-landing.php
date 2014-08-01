<?php
/*
Template Name: Landing Page v2
*/
?>

<!-- Call global lpboxes -->
<?php
      global $landing;
      $lp = get_post_meta(get_the_ID(), $landing->get_the_id(), TRUE);
      get_header();
      require_once( 'header-landing.php' );?>

<!-- Hero -->
<div class="hero landing">
      <div class="container">
            <div class="row">
                        <div class="col-md-6 cta">
                           <h1 itemprop="headline"><?php echo $lp['landing-title']; ?></h1>
                           <p itemprop="description"><?php echo $lp['landing-description']; ?></p>
                        </div>
                        <div class="col-md-6 product-image">
                           <?php echo "<img class='img-responsive' src=".$lp['landing-image'].">"; ?>
                        </div>
            </div>
      </div>
        <?php if (has_post_thumbnail( $post->ID ) ): ?>
        <?php $image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'med-custom');
         echo "<?php echo $image_url; ?>";
         echo "<div class='featured-image' style='background-image: url($image_url[0])' itemprop='image' alt='landing page image'></div>";
       ?>
      <?php endif; ?>
</div><!-- /hero -->

<main class="main landing" role="main" itemprop="mainContentOfPage" itemscope="itemscope" itemtype="http://schema.org/WebPage">
  <div class="blue">
    <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <h2 class="intro" itemprop="headline"><?php echo $lp['landing-copy-head']; ?></h2>
              <p>
                <?php echo $lp['landing-copy-desc']; ?>
              </p>
          </div><!-- /col-md-6 -->
          <div class="landing-form col-sm-6">
                    <?php echo "<div class='form-body'>". do_shortcode($lp["landing-form-shortcode"]);
//                          echo "<p><a class='btn btn-primary'>".$lp['landing-form-button']."</a></p></div>";
                    ?>
          </div>
        </div><!-- /row -->
    </div><!-- /container -->
  </div>
</div> <!-- /blue -->


<div class="loops blog">
    <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="section-title">Why is Managing Tradigital Marketing Channels Important?<h2>
          <?php if ( have_posts() ): ?>
              <?php $my_query = new WP_Query( array(
                'posts_per_page' => '3',
                  )
                ); ?>
              <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
                  <div class="entry col-sm-4">
                      <div class="entry-meta">
                        <a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark"><?php the_post_thumbnail('thumbnail');?></a>
                        <h2 class="blog-title" itemprop="headline"><a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
                        <?php the_excerpt(); ?>
                      </div>
                    </div>
                <?php endwhile; ?>
              <?php else: ?>
              <h2>No posts to display</h2>
              <?php endif; ?>
        </section>
      </div><!-- /col-md-6-->
    </div>
  </div>
</div>


<div class="violator whitepaper">
      <div class="container">
            <div class="col-md-8">
                  <h4><?php echo $lp['violator-sub'];?></h4>
                  <h2 itemprop="headline"><?php echo $lp['violator-title'];?></h2>
                  <p itemprop="description"><?php echo $lp['violator-description'];?></p>
                  <a class="btn btn-primary btn-lg" href="<?php echo $lp['violator-btn-link'];?>" target="_blank"><?php echo $lp['violator-btn'];?></a>
            </div><!-- /col-md-8 -->
            <div class="col-md-4 button">
              <img class="img-responsive center-block" src="<?php echo $lp['violator-img'];?>"/>
            </div><!-- /col-md-6 -->
      </div><!-- /container -->
</div><!-- /violator -->


<div class="secondary-landing">
  <div class="container">
    <div class="row">
      <h2 class="section-title">Learn more about how Atmosferiq is tailored to your needs</h2>
          <div class="col-sm-6 webinar">
            <h2>For Business Owners</h2>
            <p>Get a guided tour of our solution from one of our knowledgeable sales people.</p>
            <a href="#">Learn More &raquo;</a>
          </div>
          <div class="col-sm-6 demo">
            <h2>For Agencies</h2>
            <p>Get a guided tour of our solution from one of our knowledgeable sales people.</p>
            <a href="#">Learn More &raquo;</a>
          </div>
    </div>
  </div>
</div>
</main>


 <?php get_footer('landing'); ?>