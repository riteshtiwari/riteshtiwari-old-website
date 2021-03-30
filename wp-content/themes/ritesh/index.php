<?php

/**

 * The main template file

 *

 * This is the most generic template file in a WordPress theme and one

 * of the two required files for a theme (the other being style.css).

 * It is used to display a page when nothing more specific matches a query,

 * e.g., it puts together the home page when no home.php file exists.

 *

 * @link http://codex.wordpress.org/Template_Hierarchy

 *

 * @package WordPress

 * @subpackage Twenty_Fourteen

 * @since Twenty Fourteen 1.0

 */



get_header(); ?>



<section id="home-id-sec">

		<aside class="container">

        

        <div class="tab-1 tabsec showcont">

        	<div class="tabsection">

        	<div class="laergetext pull-left col-4">hello!</div>

            <div class="introtext pull-left col-2">I AM A <span>WEB DESIGNER / ENTREPRENEUR</span></div>

            </div>

            <div class="boxsec pull-right col-4">

            	<div class="boxlinearrow">see whats inside the box<img src="<?php echo get_template_directory_uri(); ?>/images/arrowline.png" alt=""></div>

                <div class="boxliimg"><!--<img src="images/box.png" alt="">--></div>

            </div>

            <div class="clr"></div>

          </div>

          

           <div class="tab-2 tabsec">

        	<div class="tabsection">

        	<div class="texttab-2">I started working in graphic design in 2004 with the release of my first major web project. I always pay attention to finest detail, am closely following technical innovations and aiming use the expertise in my projects.</div>

            </div>

            <div class="boxsec pull-right col-4">

            	<div class="boxlinearrow">What I offer ?<img src="<?php echo get_template_directory_uri(); ?>/images/arrowline.png" alt=""></div>

                <div class="boxliimg"><!--<a href=""><img src="images/box.png" alt=""></a>--></div>

            </div>

          </div>

           <div class="tab-3 tabsec">

        	<div class="tabsection">

              <div class="texttab-3">

        			<div class="whati-offer">

                   		<span class="wIf_title">What I offer ? </span>

                        <div class="wIf_arrow"><img src="<?php echo get_template_directory_uri(); ?>/images/what-i-arrow.png" alt=""></div>

                    </div>

                 	<ul>

                    	<li>Project management</li>

                        <li>Web Design</li>

                        <li>Content management systems</li>

                        <li>Banners</li>

                    </ul>

                 </div>

            </div>

            <div class="boxsec pull-right col-4">

            	<div class="boxlinearrow">Few things about me<img src="<?php echo get_template_directory_uri(); ?>/images/arrowline.png" alt=""></div>

                <div class="boxliimg"><!--<a href=""><img src="images/box.png" alt=""></a>--></div>

            </div>

          </div>

          

           <div class="tab-4 tabsec">

        	<div class="tabsection">

        	<div class="texttab-4">

           	 <div class="texttab-4a">

                    <span>I am have interests in <br>

                    cinema, music,<br>

                    architecture and civil aviation</span>

                    <div class="cityname">Favourite city - Paris</div>

             </div>

             <div class="birthSec">

             		<div class="birthtitle">I was born on Monday</div>

                    Favourite color - blue

             </div>

             <div class="texttab-4-row-1">Favourite sport - football <span>Favourite passtime: cinema, concerts and bicyle</span></div>

             <div class="texttab-4-row-2">Languages: Lithuanian, English, Russian and a bit of French*</div>

  <div class="texttab-4-row-3">(* - enough to understand where one word finishes and another starts or say a useless phrase 

like "un bus rouge est passé" which means "red bus has just passed".)</div>

                 </div>

            

            </div>

            <div class="boxsec pull-right col-4">

            	<div class="boxlinearrow">My offer <img src="<?php echo get_template_directory_uri(); ?>/images/arrowline.png" alt=""></div>

                <div class="boxliimg"><!--<a href=""><img src="images/box.png" alt=""></a>--></div>

            </div>

          </div>

          

           <div class="tab-5 tabsec">

        	<div class="tabsection">

        	<div class="texttab-5">

            <span>It is very important to establish the right level of communication and discussion <br>when involved in creative projects that's why <br>I invite you for a cup of coffee so we can talk about <br>your idea and turn it into reality*</span>

            <div class="texttab-5-row-2"> * - For obvious reasons this is available to Lithuanian clients only, but if you are up for a virtual coffee meet-up let me know and I meet you there!</div>

            </div>

           

            </div>

            <div class="boxsec pull-right col-4">

            	<div class="boxlinearrow">Lets meet up <img alt="" src="<?php echo get_template_directory_uri(); ?>/images/arrowline.png"></div>

                <div class="boxliimg"><!--<a href=""><img src="images/box.png" alt=""></a>--></div>

            </div>

          </div>

          

           <div class="tab-6 tabsec">

        	<div class="tabsection">

            <div class="texttab-6">

    <!--    	<form>

            	<div class="forminrow">

                <label class="form_col_left">Your name :</label>

                <label class="form_col_right"><input type="text"></label>

                </div>

                <div class="forminrow">

                <label class="form_col_left">Your email :</label>

                <label class="form_col_right"><input type="text"></label>

                </div>

                <div class="forminrow">

                <label class="form_col_left">City :</label>

                <label class="form_col_right"><input type="text"></label>

                </div>

                

                 <div class="forminrow subbutton">

                <input type="submit" name="" value="SEND">

                </div>

            </form>-->

            <?php echo do_shortcode('[contact-form-7 id="24" title="Contact"]'); ?>

            </div>

            </div>

            <div class="boxsec pull-right col-4">

            	<div class="boxlinearrow">Lets meet up !<br><img src="<?php echo get_template_directory_uri(); ?>/images/letme-us-arrow.png" alt=""></div>

                <div class="boxliimg"><!--<a href=""><img src="images/box.png" alt=""></a>--></div>

            </div>

          </div>

          

           <div class="clr"></div> 

   

        </aside>

          

        <div class="hrline"></div>

</section>



<section id="project-id-sec">







		<aside class="container">



        	<h1>Projects</h1>



                <div class="sliderSection">



                	



			<div class="projectSlider">



            	  <?php 

							$pid=7;

							if(get_field('project_area',$pid)){

							

						while( the_repeater_field('project_area',$pid) ){ ?>

				

                        <div class="projectSlider_box">

                <div class="slider-imgBox"><img src="<?php echo the_sub_field("projects_image");?>" alt=""></div>



                <div class="slider_contentBox">



                    <div class="project_title"><?php echo the_sub_field("project_name");?></div>



                    <div class="project_url"><a href="<?php echo the_sub_field("projects_link");?>"><?php echo the_sub_field("projects_link");?></a></div>



                    </div>



                </div><?php }} ?>



            </div>



                </div>



         <div class="clr"></div>



         <div class="topbutton"><a class="scrollToTop" href="javascript:void(0);"><span>TOP</span></a></div>







         



        </aside>



        



         <div class="clr"></div>



        <div class="hrline"></div>



	



</section>







<section id="testimonials-id-sec">







		<aside class="container">



        	<h1>Testimonials</h1>



                <div class="testimonialslidersection">



                <div class="testimonialSlider">

                 <?php 

				 

				  $id=9;

				  if(get_field('testimonial_area',$id)){

				  

				  

				  while( the_repeater_field('testimonial_area',$id) ){ 

						

						

			     ?>

                <div class="testimonialContent">



                	<img src="<?php echo the_sub_field("testimonial_image");?>" alt="">



                    <span><?php echo the_sub_field("testimonial_content");?></span>



                    <div class="testmonial-name"><?php echo the_sub_field("testimonial_writter_name");?></div>



                    <div class="testmonial-position"><?php echo the_sub_field("designation");?></div>



                </div>

               <?php }} ?>

              <!--  <div class="testimonialContent">



                	<img src="<?php echo get_template_directory_uri(); ?>/images/testmonial-img.png" alt="">



                    <span>Cras tincidunt neque et consectetur lobortis! Morbi consequat eu odio at faucibus. Morbi cursus molestie dui; a egestas leo porttitor quis. Vestibulum porttitor laoreet leo, sed fringilla ante. Cras sit amet sapien sed felis.</span>



                    <div class="testmonial-name"> TRUONG</div>



                    <div class="testmonial-position">SENIOR MANAGER, VMWARE</div>



                </div>



                <div class="testimonialContent">



                	<img src="<?php echo get_template_directory_uri(); ?>/images/testmonial-img.png" alt="">



                    <span>Cras tincidunt neque et consectetur lobortis! Morbi consequat eu odio at faucibus. Morbi cursus molestie dui; a egestas leo porttitor quis. Vestibulum porttitor laoreet leo, sed fringilla ante. Cras sit amet sapien sed felis.</span>



                    <div class="testmonial-name">JAMES </div>



                    <div class="testmonial-position">SENIOR MANAGER, VMWARE</div>



                </div>-->



                </div>



                </div>



         <div class="clr"></div>



         <div class="topbutton"><a class="scrollToTop" href="javascript:void(0);"><span>TOP</span></a></div>



         



        </aside>



        



         <div class="clr"></div>



        <div class="hrline"></div>



	



</section>







<section id="ask-id-sec">



	<aside class="container">



        	<h1>Ask</h1>



            <div class="ask-inner">



            	<?php /*?><form>



                <label class="froemrow">



                	<label class="pull-left"><input type="text" placeholder="Email for resume"></label>



                    <label class="pull-right"><input type="submit" value="Request"></label>



                    </label>



                 



                </form><?php */?>

                

                <?php echo do_shortcode('[contact-form-7 id="5" title="Contact form 1"]');  ?>

					

                  <div class="froemrow">



                	<div class="pull-left"><a href="mailto:riteshtiwari@riteshtiwari.com">riteshtiwari@riteshtiwari.com</a></div>



                    <div class="pull-right"><a class="say_hi" href="mailto:riteshtiwari@riteshtiwari.com">say hi</a></div>



                    </div>



            </div>



            <div class="clr"></div>



         <div class="topbutton"><a class="scrollToTop" href="javascript:void(0);"><span>TOP</span></a></div>



            </aside>



        <div class="clr"></div>



        <div class="hrline"></div>



            </section><!-- #main-content -->



<?php

//get_sidebar();

get_footer();

