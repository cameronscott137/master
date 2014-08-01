<?php
/*
Template Name: Home
*/
global $home;
$home = get_post_meta(get_the_ID(), $home->get_the_id(), TRUE);
get_header();
require_once( 'header-nav.php' );?>

      <div class="hero js">
          <div class="container">
                  <div class="row">
                    <div class="col-md-12 page-header">
                        <h1 itemprop="headline"><?php echo $home['heading-title'];?></h1>
                        <h2 itemprop="description"><?php echo $home['heading-description'];?></h2>
                        <a class="btn btn-primary btn-lg" href="<?php echo $home['btn-link'];?>" target="_blank"><?php echo $home['btn-text'];?></a>
                        <img class="home-header img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/images/home_header.png" alt="Header iPad">
                    </div> <!-- /col md 12 -->
                  </div><!-- /row --> 
        </div><!-- /container -->
        <?php if (has_post_thumbnail( $post->ID ) ): ?>
                <?php $image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'med-custom');
             echo "<?php echo $image_url; ?>";
             echo "<div class='featured-image' style='background-image: url($image_url[0])' itemprop='image' alt='marketing mix management'></div>";
           ?>
          <?php endif; ?>
      </div><!-- /hero -->

<main class="main" role="main" itemprop="mainContentOfPage" itemscope="itemscope" itemtype="http://schema.org/WebPage">
      <div class="violator whitepaper">
            <div class="container">
                  <div class="col-md-8">
                        <h4><?php echo $home['violator-sub'];?></h4>
                        <h2 itemprop="headline"><?php echo $home['violator-title'];?></h2>
                        <p itemprop="description"><?php echo $home['violator-description'];?></p>
                        <a class="btn btn-primary btn-lg" href="<?php echo $home['violator-btn-link'];?>" target="_blank"><?php echo $home['violator-btn'];?></a>
                  </div><!-- /col-md-8 -->
                  <div class="col-md-4 button">
                    <img class="img-responsive center-block" src="<?php echo $home['violator-img'];?>"/>
                  </div><!-- /col-md-6 -->
            </div><!-- /container -->
      </div><!-- /violator -->
    <div class="container container-home">    
        <div class="row tradigital">
        	<h1 class="section-title" itemprop="headline"><?php echo $home['tradigital-title'];?></h1>
        	<div class="lede">
            <p itemprop="description"><?php echo $home['tradigital-description'];?></p>
          </div>
      		<div class="col-md-4">
              <h2 class="percent"><a href="http://atmosferiq.com/the-market/tradigital" target="_blank" onClick="_gaq.push(['_trackEvent', 'Home', 'home-click', 'Home Page Tradigital Link']);"><?php echo $home['tradigital-col1-stat'];?></a></h2>
              <p><?php echo $home['tradigital-col1-desc'];?></p>
		          <p><a class="pull-right" href="<?php echo $home['tradigital-col1-link'];?>">Read more &raquo;</a></p>
		    </div> <!-- /col-md-4 -->
      		<div class="col-md-4">
              <h2 class="percent"><a href="http://atmosferiq.com/the-market/money-going-sticking-traditional-media/" target="_blank" onClick="_gaq.push(['_trackEvent', 'Home', 'home-click', 'Home Page Traditional Media Link']);"><?php echo $home['tradigital-col2-stat'];?></a></h2>
              <p><?php echo $home['tradigital-col2-desc'];?></p>
              <p><a class="pull-right" href="<?php echo $home['tradigital-col2-link'];?>">Read more &raquo;</a></p>
		    </div> <!-- /col-md-4 -->
      		<div class="col-md-4">	
              <h2 class="percent"><a href="http://atmosferiq.com/the-market/famous-quote-history-advertising/" target="_blank" onClick="_gaq.push(['_trackEvent', 'Home', 'home-click', 'Home Page Wasted Budget Link']);"><?php echo $home['tradigital-col3-stat'];?></a></h2>
              <p><?php echo $home['tradigital-col3-desc'];?></p>
              <p><a class="pull-right" href="<?php echo $home['tradigital-col3-link'];?>">Read more &raquo;</a></p>
		    </div> <!-- /col-md-4 -->
		</div>
    </div><!-- /container -->

      <div class="violator grey">
            <div class="container">
                  <div class="col-md-8">
                        <h2 itemprop="headline"><?php echo $home['violator2-title'];?></h2>
                        <p itemprop="description"><?php echo $home['violator2-description'];?></p>
                  </div><!-- /col-md-8 -->
                  <div class="col-md-4 form">
                        <?php echo do_shortcode('[gravityform id=10 title=false description=false ajax=true tabindex=49]');?>
                        <script type="text/javascript">
                            var __ss_noform = __ss_noform || [];
                            __ss_noform.push(['baseURI', 'https://app-NST254.sharpspring.com/webforms/receivePostback/MzQ0MwIA/']);
                            __ss_noform.push(['endpoint', '5c9ca23b-cf96-4128-aa09-616581981881']);
                        </script>
                        <script type="text/javascript" src="https://koi-NST254.sharpspring.com/client/noform.js?ver=1.0" ></script>

                  </div><!-- /col-md-6 -->
            </div><!-- /container -->
      </div><!-- /violator -->

    <div class="home-features">
	      <div class="container container-home">
		        <div class="col-md-6">
		        	<h1 class="section-title"><?php echo $home['checklist-title'];?></h1>
			        <p><?php echo $home['checklist-desc'];?></p>
              <ul>
                  <li><i class="fa fa-check-square-o fa-lg"></i><?php echo $home['checklist-bullet1'];?></li>
                  <li><i class="fa fa-check-square-o fa-lg"></i><?php echo $home['checklist-bullet2'];?></li>
                  <li><i class="fa fa-check-square-o fa-lg"></i><?php echo $home['checklist-bullet3'];?></li>
              </ul>
			        <p><a href="<?php bloginfo('url');?>/software/" class="btn btn-lg btn-primary"><?php echo $home['checklist-btn'];?></a></p>
		        </div><!-- /col-md-6" -->
            <div class="col-md-6 ipad">
            </div><!-- /col-md-6" -->
	      </div><!-- /container -->
    </div><!-- /hero -->

    <div class="container container-home">
        <h1 class="section-title">What Businesses Are Already Saying About Us</h1>
    		<div class="row">
              <div class="col-md-12 testimonials">

                        <?php 
                          $var= $home['docs'];
                          if($var != null){
                            foreach( $var as $v=>$x_val) {
                              echo "<div class='row'><div class='col-sm-2'>";
                              echo "<img class='img-responsive img-circle' src='".site_url()."/".$x_val['testimonial-image']."'></div>";
                              echo "<div class='col-sm-10'><h3>".$x_val['testimonial-title']."</h3>";
                              echo "<p>&quot;".$x_val['testimonial-copy']."&quot;</p>";
                              echo "<cite><strong>".$x_val['testimonial-owner'].",</strong>&nbsp;".$x_val['testimonial-place']."</cite></div></div>";
                            }
                          }
                        ?>  
            </div><!-- /col-md-12 -->
      </div><!-- /row -->
    </div><!-- /container -->

  <div class="social">
    <div class="container container-home">
      <div class="row">
        <h1 class="section-title">Follow Us and Stay On Top of the Whether</h1>
        <div class="col-sm-3">
        	<a href="https://www.facebook.com/Atmosferiq" target="_blank">
        		<button class="facebook">
        			<div class="left">
        				<i class="fa fa-facebook fa-lg"></i>
        			</div>
        			<div class="right">
        				Facebook
        			</div>
        		</button>
        	</a>
        </div>
        <div class="col-sm-3">
        	<a href="http://www.twitter.com/atmosferiq" target="_blank">
        		<button class="twitter">
        			<div class="left">
        				<i class="fa fa-twitter fa-lg"></i>
        			</div>
        			<div class="right">
        				Twitter
					</div>
        		</button>
        	</a>
        </div>
        <div class="col-sm-3">
        	<a href="http://www.linkedin.com/company/atmosferiq" target="_blank">
        		<button class="linkedin">
            			<div class="left">
            				<i class="fa fa-linkedin fa-lg"></i>
            			</div>
            			<div class="right">
            				LinkedIn
      					   </div><!-- /right -->
        		</button>
        	</a>
        </div><!-- /col-sm-3 -->
        <div class="col-sm-3">
          <a href="https://plus.google.com/+Atmosferiq/posts" target="_blank">
            <button class="google">
                  <div class="left">
                    <i class="fa fa-google-plus fa-lg"></i>
                  </div>
                  <div class="right">
                    Google+
                   </div><!-- /right -->
            </button>
          </a>
        </div><!-- /col-sm-3 -->


      </div><!-- /row -->
    </div><!-- /container -->
  </div><!-- /social -->

  <div class="violator">
        <div class="container">
              <div class="col-md-8">
                    <h2 itemprop="headline"><?php echo $home['violator3-title'];?></h2>
                    <p itemprop="description"><?php echo $home['violator3-description'];?></p>
              </div><!-- /col-md-8 -->
              <div class="col-md-4 button">
                    <a class="btn btn-primary btn-lg" href="http://app.atmosferiq.com/sign_up" target="_blank"><?php echo $home['violator3-btn'];?></a>
              </div><!-- /col-md-6 -->
        </div><!-- /container -->
  </div><!-- /violator -->

</main><!-- /main -->

 <?php get_footer(); ?>