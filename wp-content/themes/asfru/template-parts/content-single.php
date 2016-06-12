<?php
/**
 * The template part for displaying single posts
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

		<!-- put your content here -->
    <img src="<?php bloginfo('template_directory'); ?>/images/logo-s.png" style="; " width="250" class="img-responsive center-block">
<div class="page-container" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        <div class="container  vertical-center-page " style="">
        
            <div class="row " style="">
            
                <div class="col-lg-12">
                    
                    <h1 class="page-header text-center"><?php the_title(); ?></h1>
                    <p class="page-text text-center"><?php the_content(); ?><br/></p>
                    
                    
                    
                </div>
                
            </div>

        </div>
 </div>