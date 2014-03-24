<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

<!-- midcontent -->
<div class="midcontent">
	<div class="container">
    	<!-- leftContent -->
    <?php  while(have_posts()): the_post(); ?>
       	<div class="leftContent">
         <?php the_content(); ?> 		
        </div>
    <?php endwhile; ?>
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