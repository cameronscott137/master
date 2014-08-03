<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<!--[if lte IE 7]>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <?php include('ie7.php');?>
<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon.ico"/>
<link rel="apple-touch-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/touch-icon.png"/>
<meta name="application-name" content="Atmosferiq"/>
<!-- Windows 8 -->
<meta name="msapplication-TileColor" content="#1e6fec"/>
<meta name="msapplication-square70x70logo" content="tiny.png"/>
<meta name="msapplication-square150x150logo" content="square.png"/>
<meta name="msapplication-wide310x150logo" content="wide.png"/>
<meta name="msapplication-square310x310logo" content="large.png"/>
<!-- Twitter Cards -->
<meta name="twitter:card" content="summary" />
<meta name="twitter:description" content="Demand is a customer experience design firm that strives to  plan, produce and measure demand-driven sales, marketing and product strategies."
<meta name="twitter:site" content="@getdemand" />
<meta name="twitter:title" content="Demand" />
<meta name="twitter:url" content="https://www.thedemandco.com" />

<!--[if IE 8]>
    <script src="<?php echo get_template_directory_uri(); ?>/bootstrap/js/html5shiv.js" type="text/javascript"></script>
    <script src="http://atmosferiq.com/wp-content/themes/starter-theme/bootstrap/js/respond.min.js" type="text/javascript"></script>
<![endif]-->
<!-- Analytics -->
</head>
<?php wp_head();?>
<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">
    <div class="navbar-wrapper fixed">
       <header class="brand center-block" role="banner" itemscope="itemscope" itemtype="http://schema.org/WPHeader">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
               viewBox="0 0 102.5 133" enable-background="new 0 0 102.5 133" xml:space="preserve">
            <g id="ART">
              <g>
                <path fill="#FFFFFF" d="M26.5,133V99.2H0V0h32.5C52.1,0,70,6.7,82.8,18.9C95.5,31,102.5,47.8,102.5,66v0.3
                  c0,36.8-28,64.7-66.5,66.2L26.5,133z M18.2,81h26.5v32.4c23.7-4.6,39.6-22.9,39.6-47V66c0-27.7-21.8-47.9-51.8-47.9H18.2V81z"/>
              </g>
            </g>
            </svg>
      </header>
  </div> <!-- /navbar-wrapper -->
