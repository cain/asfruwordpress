<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

		<footer>
  <div class="container">
    <div class="row"><br>
      <div class="col-md-4 col-sm-6 footerleft ">
        <h6 class="heading7"><img src="<?php bloginfo('template_directory'); ?>/images/logo-s.png" width="20px"> ASFRU</h6>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley.</p>

        <p><i class="fa fa-steam"></i> Steam</p>
        <p><i class="fa fa-facebook"></i> Facebook</p>
        <p><i class="fa fa-youtube"></i> Youtube</p>
        <p><i class="fa fa-envelope"></i> info@asfru.com</p>
        <p><i class="fa fa-code"></i>  By <a href="http://cainhall.me">CainHall.me</a></p>

        
      </div>
      <div class="col-md-2 col-sm-6 paddingtop-bottom footer-class">
        <h6 class="heading7">LINKS</h6>
<?php wp_list_pages( 'sort_column=menu_order&title_li=' ); ?>
      </div>
      <div class="col-md-3 col-sm-6 paddingtop-bottom footer-class" >
              <h6 class="heading7">POSTS</h6>
<?php wp_get_archives('type=postbypost&limit=10'); ?>
          
      </div>

    </div>
      
  </div>

</footer>

<!--footer start from here-->


           </main> <!-- cd-main-content --> 

<?php wp_footer(); ?>




</body>
</html>
