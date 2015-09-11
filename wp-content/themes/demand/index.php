<?php
/**
 * The main template file
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file 
 *
 * Please see /external/starkers-utilities.php for info on Starkers_Utilities::get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<?php get_header();
require_once( 'header-nav.php' );?>

    <div class="blog-search">
        <div class="container">
            <div class="row">
                <div class="pull-left">
                    <?php get_search_form(); ?>
                </div><!-- pull-left -->
                <div class="pull-right">
                    <a class="category-toggle">Search by Category <b class="caret"></b></a>
                    <ul class="categories">
                            <?php $args = array(
                                'title_li' => __( '' ),
                            );
                            wp_list_categories($args); ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>

            <main class="container" role="main" itemprop="mainContentOfPage" itemscope="itemscope"  itemtype="http://schema.org/Blog">
                <?php if ( have_posts() ): ?>
                    <?php while ( have_posts() ) : the_post(); ?>
                         <div class="row">
                                <article class="post-<?php the_ID(); ?> entry-excerpt col-md-12" itemscope="itemscope" itemtype="http://schema.org/CreativeWork">
                                        <h1 class="blog-title" itemprop="headline"><a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
                                        <h4 class="post-meta">Posted in: <?php the_category(', '); ?> | <time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate itemprop="datePublished"><?php echo get_the_date(); ?></time> | <?php comments_popup_link('Leave a Comment', '1 Comment', '% Comments');
                                        if ( is_user_logged_in() ) {
                                                    echo " | ";
                                                    edit_post_link('Edit Post');
                                            } ?>
                                        </h4>
                                        <a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark"><?php the_post_thumbnail('atmosferiq');?></a>
                                        <?php the_excerpt(); ?>
                                </article>
                        </div><!-- /row -->
                        <?php endwhile; ?>
                        </main> <!-- /container -->
                            <?php if ( if_pagination() ) : ?>
                                <div class="pagination">
                                    <div class="container">
                                        <div class="row">
                                                <div class="pull-right">
                                                    <?php next_posts_link(); ?> 
                                                </div>
                                                <div class="pull-left">
                                                    <?php previous_posts_link(); ?> 
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                        <?php else: ?>
                        <h2>No posts to display</h2>
                        <?php endif; ?>
<?php get_footer(); ?>