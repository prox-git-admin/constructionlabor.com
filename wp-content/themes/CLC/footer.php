<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
<!-- footer -->
<div class="footer">
	<!-- footer Membres of -->
    <div class="footerMembers">
        <div class="container">
           <h3> Members of:</h3>
            <?php dynamic_sidebar('Members'); ?>
          
           <i class="clearBoth"></i>
        </div>
    </div>
    <!-- footer Members of end -->
    <!-- footerInner -->
    <div class="footerInner">
        <div class="container">
        	 <!-- contactadd -->
            <div class="contactadd">
             <?php dynamic_sidebar('Contact Us'); ?>
            
               
            </div>
             <!-- contactadd end -->
              <!-- locationsMap -->
            <div class="locationsMap">
            	<h3>Locations</h3>
                <div class="map"> <?php dynamic_sidebar('Locations'); ?></div>
            </div>
              <!-- locationsMap end -->
              <!-- footerNavigation -->
            <div class="footerNavigation">
            
                <?php dynamic_sidebar('Navigation'); ?>
            </div>
             <!-- footerNavigation end -->
             <i class="clearBoth"></i>
        </div>
    </div>
    <!-- footerInner end -->
</div>
<!-- footer end -->

<?php wp_footer(); ?>
</body>
</html>