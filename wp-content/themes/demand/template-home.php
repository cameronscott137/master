<?php
/*
Template Name: Home
*/
get_header();?>

<main class="main" role="main" itemprop="mainContentOfPage" itemscope itemtype="http://schema.org/WebPage">

<header class="intro center-block">
      <h1 itemprop="headline">Making Buyers Love Sellers</h1>
      <h2 itemprop="description">Demand is a <a href="#">customer experience design</a> firm that strives to  plan, produce and measure demand-driven sales, marketing and product strategies.</h2>
</header>


    <?php
 
// check if the repeater field has rows of data
if( have_rows('clients') ):

  // loop through the rows of data
    while ( have_rows('clients') ) : the_row();
          $main = get_sub_field('main_image');
          $footer_logo = get_sub_field('client_logo_footer');?>
<section class="clients container">
  <article class="client row">
          <header class="client-header">
            <div class="client-brand">
                  <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                     viewBox="0 0 40.4 45.4" enable-background="new 0 0 40.4 45.4" xml:space="preserve">
                      <g id="ART">
                        <g>
                          <g>
                            <g>
                              <path fill="#0071BC" d="M33,45.2l0.2,0.2l0.3,0h6.9v-6.5h-4.8l-4.2-3.5L27,40.2C29.6,42.4,32.4,44.7,33,45.2z"/>
                              <path fill="#0071BC" d="M40.3,22.7l-7.8-8.3l-4.4,4.8l3.2,3.5l-6.5,7.1l0,0l-6.1,6.7c-0.9,0.8-1.8,1.4-2.7,1.9
                                c-0.9,0.5-1.9,0.7-3.1,0.7c-1.7,0-3.1-0.5-4.1-1.4c-1-0.9-1.6-2.2-1.6-3.7c0-1.2,0.3-2.3,0.9-3.3c0.3-0.5,1.2-1.6,1.6-2.1
                                l-4.7-4.2c-1.2,1.1-2.7,2.8-3.4,4c-1.1,2-1.7,4.1-1.7,6.3c0,1.6,0.3,3.1,0.9,4.4c0.6,1.3,1.4,2.4,2.5,3.4
                                c1.1,0.9,2.4,1.7,3.9,2.2c1.5,0.5,3.2,0.8,5.1,0.8c2.1,0,3.9-0.3,5.5-1c1.6-0.6,3.3-1.7,5-3.1L40.3,22.7z"/>
                              <path fill="#0071BC" d="M0.9,6.4C0.3,7.7,0,9.2,0,10.8c0,2.2,0.6,4.2,1.7,6.3c0.6,1.1,4.8,5.4,16.9,15.9l4.4-4.8L10.9,17.7
                                c-0.2-0.2-2.3-2-2.8-2.9c-0.6-1-0.9-2.1-0.9-3.3c0-1.5,0.5-2.7,1.6-3.7c1-0.9,2.4-1.4,4.1-1.4c1.2,0,2.2,0.2,3.1,0.7
                                c0.9,0.4,1.7,1.1,2.7,1.9l2.8,3l4.3-4.7l-3-3.2c-1.7-1.4-3.3-2.4-5-3c-1.6-0.6-3.5-1-5.5-1c-1.9,0-3.6,0.3-5.1,0.8
                                C5.7,1.4,4.4,2.1,3.3,3C2.3,4,1.4,5.1,0.9,6.4z"/>
                            </g>
                          </g>
                        </g>
                      </g>
                  </svg>
            </div><!-- /client-brand -->
           <?php echo "<img class='img-responsive' src='".$main['url']."' alt=".$main['alt']." />";?>
        </header>


          <div class="quote">
            <div class="row">
              <div class="col-md-12">
                  <span class="caret"></span>
                  <h2 itemprop="headline" class="primary"><?php the_sub_field('main-quote');?></h2>
                  <p itemprop="description"><?php the_sub_field('supp_quote');?></p>
                  <cite title="Source Title">Source Title</cite>
                  <footer class="links">
                    <div class="col-md-4 text-left">
                       <?php echo "<img class='img-responsive' src='".$footer_logo['url']."' alt=".$footer_logo['alt']." />";?>
                    </div><!-- /col-md-4 -->
                    <div class="col-md-4 text-center">
                      <?php
                          if( have_rows('client_palette') ):
                              while ( have_rows('client_palette') ) : the_row();
                                  $hex = get_sub_field('hex_code');
                                  echo "<span class='palette' style='background:".$hex."'></span>";
                              endwhile;
                          endif;?>
                    </div><!-- /col-md-4 -->
                    <div class="col-md-4 text-right">
                      web | behance &rarr;
                    </div><!-- /col-md-4 -->
              </div>
            </div><!-- col-md-12-->
          </div><!-- quote -->
  </article><!-- client-->
</section><!-- clients -->


<?php 


    endwhile;
 
else :

endif;?>

</main>

 <?php get_footer(); ?>