<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

?>
<?php astra_content_bottom(); ?>
	</div> <!-- ast-container -->
	</div><!-- #content -->
<?php 
	astra_content_after();
		
	astra_footer_before();
		
	astra_footer();
		
	astra_footer_after(); 
?>
	</div><!-- #page -->
<?php 
	astra_body_bottom();    
	wp_footer(); 
?>
<!-- Botão Voltar ao Topo Deslizante -->
<a id="subirTopo" class="voltar-ao-topo">^</a>

<script type="text/javascript">
   jQuery(document).ready(function(){
      jQuery("#subirTopo").hide();
      
      Query('a#subirTopo').click(function () {
          jQuery('body,html').animate({
              scrollTop: 0
          }, 800);
          return false;
      });
      jQuery(window).scroll(function () {
					if (jQuery(this).scrollTop() > 100) {
            jQuery('#subirTopo').fadeIn();
					} else {
            jQuery('#subirTopo').fadeOut();
         }
      });
    });
 </script>

	</body>
</html>
