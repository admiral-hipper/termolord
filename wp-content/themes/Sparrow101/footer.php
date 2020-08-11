<!-- footer
   ================================================== -->
   <footer>

      <div class="row">

         <div class="twelve columns">
            <?php wp_nav_menu( [
	'theme_location'  => 'bottom',
	'menu'            => 'ul', 
	'container'       => null, 
	'container_class' => '', 
	'container_id'    => '',
	'menu_class'      => 'footer-nav', 
	'menu_id'         => '',
	'echo'            => true,
	'fallback_cb'     => 'wp_page_menu',
	'before'          => '',
	'after'           => '',
	'link_before'     => '',
	'link_after'      => '',
	'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
	'depth'           => 0,
	'walker'          => '',
] );?>
            <!-- <ul class="footer-nav">
					<li><a href="#">Home.</a></li>
              	<li><a href="#">Blog.</a></li>
              	<li><a href="#">Portfolio.</a></li>
              	<li><a href="#">About.</a></li>
              	<li><a href="#">Contact.</a></li>
               <li><a href="#">Features.</a></li>
			   </ul> -->

            <ul class="footer-social">
               <li><a href="#"><i class="fa fa-facebook"></i></a></li>
               <li><a href="#"><i class="fa fa-twitter"></i></a></li>
               <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
               <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
               <li><a href="#"><i class="fa fa-skype"></i></a></li>
               <li><a href="#"><i class="fa fa-rss"></i></a></li>
            </ul>

            <ul class="copyright">
               <li>Copyright &copy; 2014 Sparrow</li> 
               <audio src="https://ruby-lyrics.org.ru/music/1097098_added_en.lyrsense.com.mp3"></audio>
               <li>Design by <a href="http://www.styleshout.com/">Styleshout</a></li>               
            </ul>

         </div>

         <div id="go-top" style="display: block;"><a title="Back to Top" href="#">Go To Top</a></div>

      </div>
      <?php //wp_nav_menu(array('theme_location'=>'bottom')); ?>
   <?php wp_footer()?>
   </footer> <!-- Footer End-->

   <!-- Java Script
   ================================================== -->
  

</body>

</html>