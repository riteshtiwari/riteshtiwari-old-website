<?php

/**

 * The template for displaying the footer

 *

 * Contains footer content and the closing of the #main and #page div elements.

 *

 * @package WordPress

 * @subpackage Twenty_Fourteen

 * @since Twenty Fourteen 1.0

 */

?>



		<!-- #main -->



<section id="footer-id">



	<aside class="container">



        	<h1></h1>



            <div class="sicialiconBox">

                <?php 

				 

				  $id=22;

				  if(get_field('social_area',$id)){

				  

				  

				  while( the_repeater_field('social_area',$id) ){ 

						

						

			     ?>



        <a href="<?php echo the_sub_field("social_icon_link");?>" class="<?php echo the_sub_field("social_icon_class");?>"></a>

        <?php }} ?>

<!--

         <a href="javascript:void(0);" class="linkedin"></a>



        <a href="javascript:void(0);" class="twitter"></a>



        <a href="javascript:void(0);" class="google-plus"></a>-->



       



   



        



        </div>



            <div class="copyright">&copy; 2014 "Ritesh Tiwari". All rights reserved. | Powered by: <a target="_blank" href="http://skyramtechnologies.com"> Skyram Technologies Pvt Ltd.</a></div>



            <div class="clr"></div>



         <div class="topbutton"><a class="scrollToTop" href="javascript:void(0)"><span>TOP</span></a></div>



            </aside>



        <div class="clr"></div>



     



            </section>


<?php wp_footer();
	//get_footer(); ?>




</body>



</html>