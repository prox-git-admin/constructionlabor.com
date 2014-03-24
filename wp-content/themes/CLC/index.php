<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

<!-- Slider -->
<div class="banner">
<?php echo do_shortcode('[layerslider id="1"] '); ?>

</div>
<!-- Slider End -->
<!-- midcontent -->
<div class="midcontent">
	<div class="container">
    	<!-- leftContent -->
       	<div class="leftContent">
<?php
$page1 = get_page_by_path('contractors');
query_posts('post_type=page&page_id='.$page1->ID);
while(have_posts()): the_post();
?>
        	<div class="left">

            	<div class="learnBox">
                	<span>
                    	<b><?php the_title(); ?> :</b>
                        <em><?php echo get_post_meta($post->ID,'sub-title',true); ?></em>
                    </span>
                    <a href="<?php echo get_post_meta($post->ID,'learn More',true); ?>">learn More</a>
                    <i class="clearBoth"></i>
                </div>
                
        	 <?php the_excerpt(); ?>
	        </div>
<?php
endwhile;
wp_reset_query();
?>

<?php
$page1 = get_page_by_path('craftsmen');
query_posts('post_type=page&page_id='.$page1->ID);
while(have_posts()): the_post();
?>
            <div class="right">
            	<div class="learnBox">
                	<span>
                    	<b><?php the_title(); ?>:</b>
                        <em><?php echo get_post_meta($post->ID,'sub-title',true); ?></em>
                    </span>
                    <a href="<?php echo get_post_meta($post->ID,'learn More',true); ?>">learn More</a>
                    <i class="clearBoth"></i>
                </div>
            	
        		 <?php the_excerpt(); ?>
	        </div>
<?php
endwhile;
wp_reset_query();
?>

            <i class="clearBoth"></i>
            
            <div class="findhere">
              <?php dynamic_sidebar('Call toll-free'); ?>
            
            </div>
        </div>
        <!-- leftContent End -->
        
        
        
         <!-- sideBar -->
        <div class="sideBar">

	       	<div class="box">
            	<h4>Recent Articles</h4>
                <ul>
<?php
query_posts('category_name=&posts_per_page=3');
while(have_posts()): the_post();
?>
                	<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a></li>
<?php
endwhile;
wp_reset_query();
?>
                   
                </ul>
            </div>
            
            <div class="box last">
            	<h4>Testimonials</h4>
<?php
query_posts('category_name=testimonials&posts_per_page=1');
while(have_posts()): the_post();
?>
                <?php the_excerpt(); ?>
                <a href="<?php the_permalink(); ?>" class="more">...More</a>
<?php
endwhile;
wp_reset_query();
?>
                
                <i class="clearBoth"></i>
            </div>
            
        </div>
         <!-- sideBar end -->
         
         <i class="clearBoth"></i>
    </div>
</div>
<!-- midcontent end -->
<?php get_footer(); ?>