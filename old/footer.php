<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

	
  <!--scrolling logo end-->
  <div class="clr"></div>
  <!--footer start-->
  <div class="footer">
    <div class="footer-links">
      <h3>Waste Services</h3>
      <ul>
        <li><a href="<?php echo get_page_link('1075'); ?>">Commercial Waste</a> <img src="<?php bloginfo('stylesheet_directory'); ?>/images/arrow.jpg" width="10" height="8" alt="arrow" /></li>
         <li><a href="<?php echo get_page_link('191'); ?>">Domestic Rubbish Removal </a> <img src="<?php bloginfo('stylesheet_directory'); ?>/images/arrow.jpg" width="10" height="8" alt="arrow" /></li>
          <li><a href="<?php echo get_page_link('815'); ?>">Plasterboard Recycling</a> <img src="<?php bloginfo('stylesheet_directory'); ?>/images/arrow.jpg" width="10" height="8" alt="arrow" /></li>
         <li><a href="<?php echo get_page_link('55'); ?>">Environmental Performance</a> <img src="<?php bloginfo('stylesheet_directory'); ?>/images/arrow.jpg" width="10" height="8" alt="arrow" /></li>
      </ul>
    </div>
    <div class="footer-links">
      <h3>Case Studies</h3>
      <ul>
        <li><a href="<?php echo get_page_link('347'); ?>">Housing &amp; Renovation</a> <img src="<?php bloginfo('stylesheet_directory'); ?>/images/arrow.jpg" width="10" height="8" alt="arrow" /></li>
        <li><a href="<?php echo get_page_link('960'); ?>">Installations </a> <img src="<?php bloginfo('stylesheet_directory'); ?>/images/arrow.jpg" width="10" height="8" alt="arrow" /></li>
        <li><a href="<?php echo get_page_link('1033'); ?>">New Build &amp; Construction </a> <img src="<?php bloginfo('stylesheet_directory'); ?>/images/arrow.jpg" width="10" height="8" alt="arrow" /></li>
         <li><a href="<?php echo get_page_link('815'); ?>">Plasterboard Disposal</a> <img src="<?php bloginfo('stylesheet_directory'); ?>/images/arrow.jpg" width="10" height="8" alt="arrow" /></li>
         <li><a href="<?php echo get_page_link('1138'); ?>">Commercial Streamed Waste</a> <img src="<?php bloginfo('stylesheet_directory'); ?>/images/arrow.jpg" width="10" height="8" alt="arrow" /></li>
      </ul>
    </div>
    <div class="footer-links">
      <h3>About Us</h3>
      <ul>
         <li><a href="<?php echo get_page_link('47');?>">Our History</a> <img src="<?php bloginfo('stylesheet_directory'); ?>/images/arrow.jpg" width="10" height="8" alt="arrow" /></li>
         <li><a href="<?php echo get_page_link('14'); ?>">Our Culture </a> <img src="<?php bloginfo('stylesheet_directory'); ?>/images/arrow.jpg" width="10" height="8" alt="arrow" /></li>
         <li><a href="<?php echo get_page_link('88'); ?>">Download Information </a> <img src="<?php bloginfo('stylesheet_directory'); ?>/images/arrow.jpg" width="10" height="8" alt="arrow" /></li>
         <li><a href="<?php echo get_page_link('474'); ?>">Media Centre and Videos</a> <img src="<?php bloginfo('stylesheet_directory'); ?>/images/arrow.jpg" width="10" height="8" alt="arrow" /></li>
          <li><a href="<?php echo get_page_link('42'); ?>">Careers at HIPPOWASTE </a> <img src="<?php bloginfo('stylesheet_directory'); ?>/images/arrow.jpg" width="10" height="8" alt="arrow" /></li>
      </ul>
    </div>
    <div class="footer-links">
      <h3>Contact Us</h3>
      <ul>
        <li><a href="<?php echo get_page_link('1035'); ?>">Our Location</a> <img src="<?php bloginfo('stylesheet_directory'); ?>/images/arrow.jpg" width="10" height="8" alt="arrow" /></li>
        <li><a href="<?php echo get_page_link('1037'); ?>">Request a call back </a> <img src="<?php bloginfo('stylesheet_directory'); ?>/images/arrow.jpg" width="10" height="8" alt="arrow" /></li>
        <li><a href="http://hippobag.co.uk/" target="_blank" onClick="javascript: pageTracker._trackPageview("/G2/http://hippobag.co.uk/");" >Go to Hippobag.co.uk</a> <img src="<?php bloginfo('stylesheet_directory'); ?>/images/arrow.jpg" width="10" height="8" alt="arrow" /></li>
 <li><a href="<?php echo get_page_link('1399'); ?>">Site Map</a> <img src="<?php bloginfo('stylesheet_directory'); ?>/images/arrow.jpg" width="10" height="8" alt="arrow" /></li>
      </ul>
    </div>
    <div class="clr"></div>
    <div class="copyright">
    <p>&copy; 2011 HIPPOWASTE  .  Call us today on 0870 880 2430  .  <a href="mailto:sales@hippowaste.co.uk">Click here to email</a></p>
    <span><a href="<?php echo get_page_link('289'); ?>">Terms and Conditions</a> &nbsp;.  &nbsp;<a href="<?php echo get_page_link('295'); ?>">Privacy Policy</a> &nbsp;&nbsp;.  <a href="<?php echo get_page_link('49'); ?>">Contact Us</a></span>
    </div>
    <div class="bottom">
    <p>Registered address: Templars House, Lulworth Close, Chandlers Ford, Hampshire, SO53 3TL  
Contact address: 1000 Lakeside, North Harbour, Portsmouth, Hampshire PO6 3EN
HIPPOBAG and HIPPOWASTE are registered Trademarks of Waste Management Systems Ltd. 
Registered in England under N4418836. </p>
<div class="logos"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/iso9001.jpg" width="42" height="42" alt="ISO9001" /><img src="<?php bloginfo('stylesheet_directory'); ?>/images/iso14001.jpg" width="40" height="42" alt="ISO4001" /><img src="<?php bloginfo('stylesheet_directory'); ?>/images/member4.jpg" width="45" height="44" alt="hippowaste" /><img src="<?php bloginfo('stylesheet_directory'); ?>/images/member3.jpg" width="42" height="39" alt="Hippowaste" /><img src="<?php bloginfo('stylesheet_directory'); ?>/images/member2.jpg" width="46" height="45" alt="Hippowaste" /><img src="<?php bloginfo('stylesheet_directory'); ?>/images/member1.jpg" width="86" height="28" alt="Hippowaste" /></div>
    </div>
  </div>
  <!--footer start-->
  <div class="clr"></div>
</div>

<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>
</body>
</html>
