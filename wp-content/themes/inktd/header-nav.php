<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">
    <div class="navbar-wrapper fixed">
	     <header role="banner" itemscope="itemscope" itemtype="http://schema.org/WPHeader">
              <nav class="navbar navbar-default" role="navigation">
                  <div class="container">
                      <div class="row">
                          <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav">
                                  <span class="sr-only">Toggle navigation</span>
                                  <span class="icon-bar"></span>
                                  <span class="icon-bar"></span>
                                  <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="<?php bloginfo('url'); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.svg" alt="Atmosferiq Logo"></a>
                          </div><!-- navbar-header -->
                          <div class="navbar-collapse collapse" id="nav">
                                  <nav class="primary" itemscope itemtype="http://schema.org/SiteNavigationElement">
                                      <?php wp_nav_menu( array( 'theme_location' => 'primary', 'items_wrap' => '<ul class="nav navbar-nav navbar-right">%3$s</ul>') ); ?>
                                  </nav>
                                 <!--<ul class="nav navbar-nav navbar-right">
                                    <li><a href="#" class="pull-right btn btn-default login" data-toggle="modal" data-target="#login">Login</a></li>
                                  </ul>-->
                          </div> <!-- /navbar-collapse -->
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