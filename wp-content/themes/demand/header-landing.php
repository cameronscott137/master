<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">
    <div class="navbar-wrapper navbar-landing fixed">
	     <header role="banner" itemscope="itemscope" itemtype="http://schema.org/WPHeader">
              <nav class="navbar navbar-default" role="navigation">
                  <div class="container">
                      <div class="row">
                          <div class="navbar-header">
                            	<a class="navbar-brand" href="<?php bloginfo('url'); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.svg" alt="Atmosferiq Logo"></a>
                          </div><!-- navbar-header -->
                          <div class="navbar-contact text-right">
                          	<i class="fa fa-phone"></i><p>Interested in Atmosferiq? <span class="break">Call <a href="tel:8442866733">(844) ATMOSFERIQ</a></span></p>
                          </div>
                    </div><!-- /row -->
              </div><!-- /container -->
          <!--<?php if ( is_page_template('template-archetype.php') && !is_page( 20 ) ) { ?>
                <div class="sub-navigation">
                      <div class="container">
                          <?php wp_nav_menu( array( 'theme_location' => 'archetype', 'items_wrap' => '<ul class="nav navbar-nav">%3$s</ul>') ); ?>
                      </div>
                </div>
          <?php }?>-->
            </div><!-- /navbar -->
      </header>
  </div> <!-- /navbar-wrapper -->