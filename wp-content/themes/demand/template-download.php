<?php
/*
Template Name: Download
*/
?>

<!-- Call global lpboxes -->
<?php
      global $download;
      $dl = get_post_meta(get_the_ID(), $download->get_the_id(), TRUE);
      $var = $dl['confirmation'];
?>

<?php get_header();
require_once( 'header-landing.php' );?>

<!-- Modal -->
<div class="modal fade" id="friend" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/modal-logo.svg" alt="atmosferiq logo">
            <h4 class="modal-title">Send to a Friend</h4>
      </div>
      <div class="modal-body">
        <?php echo do_shortcode('[gravityform id=9 title=false description=false ajax=true tabindex=49]'); ?>
<script type="text/javascript">
    var __ss_noform = __ss_noform || [];
    __ss_noform.push(['baseURI', 'https://app-NST254.sharpspring.com/webforms/receivePostback/MzQ0MwIA/']);
    __ss_noform.push(['endpoint', '8d9cacf9-62b2-4ef0-9a0f-0fbc6cf030e5']);
</script>
<script type="text/javascript" src="https://koi-NST254.sharpspring.com/client/noform.js?ver=1.0" ></script>


      </div>
    </div>
  </div>
</div>

<!-- Hero -->
<div class="hero download">
      <div class="container">
            <div class="row">
              <?php if ($var == 'Yes'){?>
                    <div class="col-md-12 confirm">
                      <h2 itemprop="headline"><?php echo $dl['confirm-title']; ?></h2>
                      <a href="<?php echo $dl['button-link1']; ?>" class="btn btn-primary"><?php echo $dl['button-text1']; ?></a>
                      <a data-toggle="modal" data-target="#friend" class="btn btn-primary btn-send"><?php echo $dl['button-text2']; ?></a>
                    </div>

                <?php } else {?>
                    <div class="col-md-12">
                       <h1 itemprop="headline"><?php echo $dl['heading-title']; ?></h1>
                       <h2 itemprop="description"><?php echo $dl['heading-description']; ?></h2>
                    </div>
                <?php }?>
            </div>
      </div>
        <?php if (has_post_thumbnail( $post->ID ) ): ?>
        <?php $image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'med-custom');
         echo "<?php echo $image_url; ?>";
         echo "<div class='featured-image' style='background-image: url($image_url[0])' itemprop='image' alt='landing page image'></div>";
       ?>
      <?php endif; ?>
</div><!-- /hero -->

<main class="main download" role="main" itemprop="mainContentOfPage" itemscope="itemscope" itemtype="http://schema.org/WebPage">
    <div class="container">
        <div class="row">
          <div class="landing-copy col-sm-6">
              <?php 
              if ($var == 'Yes'){?>
                <h2><?php echo $dl['left-col-heading']; ?></h2>
              <?php } ?>
              <p><?php echo $dl['left-col-copy']; ?></p>
              <?php 
              if ($var == 'Yes'){
                    $bullet = $dl['bullets'];
                    echo "<ul>";
                      foreach( $bullet as $v=>$x_val) {
                        echo "<li><i class='fa fa-check-square-o fa-lg'></i>".$x_val['bullet']."</li>";
                    }
                    echo "</ul>";
              } else {
                echo "<img class='img-responsive center-block' src='". $dl['left-col-img']."'/>";
              }
              ?>
              <h3><?php echo $dl['left-col-caption']; ?></h3>
          </div><!-- /col-md-6 -->
          <div class="landing-form col-sm-6">
            <?php if ($var == 'Yes'){
                echo "<a class='btn btn-primary signup' href='http://app.atmosferiq.com/sign_up' target='_blank'>".$dl['right-col-heading']."</a>";?>
                <img class="img-responsive center-block" src="<?php echo $dl['left-col-img'];?>"/>
            <?php } else {
                echo "<h2 class='form-header'>".$dl['right-col-heading']."</h2>";?>
                <div class='form-body'>
                    <script type="text/javascript">
                        var ss_form = {'account': 'MzQ0MwIA', 'formID': 'S7Y0NDUzTEvWtTC1SNU1MTIy0E00NzfSNU82MbQwME1ONTE2BgA'};
                        ss_form.width = '100%';
                        ss_form.height = '1000';
                        ss_form.domain = 'app-NST254.sharpspring.com';
                    </script>
                    <script type="text/javascript" src="https://koi-NST254.sharpspring.com/client/form.js?ver=1.1.1"></script>
                </div>
            <?php }?>

          </div> <!-- landing-form -->
        </div><!-- /row -->
    </div><!-- /container -->
</main>

<?php if ($var == 'No') {?>
  <footer class="footer-widgets">
      <div class="container">
          <div class="row">
              <div class="col-md-12 mailer">
                <p itemprop="description"><?php echo $dl['violator-desc']; ?></p>
                <a data-toggle="modal" data-target="#friend" class="btn btn-primary btn-lg btn-send">Tell A Friend</a>
              </div>
          </div>
      </div>
  </footer>
<?php } ?>

<footer class="copyright">
    <div class="social">
        <a href="https://www.facebook.com/Atmosferiq" target="_blank"><i class="fa fa-facebook"></i></a>
        <a href="https://twitter.com/atmosferiq" target="_blank"><i class="fa fa-twitter"></i></a>
        <a href="http://www.linkedin.com/company/atmosferiq" target="_blank"><i class="fa fa-linkedin"></i></a>
        <a href="https://plus.google.com/+Atmosferiq/posts" target="_blank"><i class="fa fa-google-plus"></i></a>
    </div>
    &copy; <?php echo date("Y"); ?> <?php bloginfo( 'name' ); ?>. All rights reserved.
</footer>
    
  <?php wp_footer(); ?>
  </body>
</html>