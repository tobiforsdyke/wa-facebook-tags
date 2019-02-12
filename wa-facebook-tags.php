<?php
/*
Plugin Name: WA Facebook Tags
Plugin URI: http://www.tobiforsdyke.co.uk/
Description: Plugin that adds Facebook Open Graph tags to our single posts.
Version: 1.0.0
Author: Tobi Forsdyke
Author URI: http://www.tobiforsdyke.co.uk/
License: GPL2
License URI: http://www.gnu.org/licenses/gpl-2.0.txt
*/

add_action( 'wp_head', 'wa_facebook_tags' );
function wa_facebook_tags() {
  if( is_single() ) {
  ?>
    <meta property="og:title" content="<?php the_title() ?>" />
    <meta property="og:site_name" content="<?php bloginfo( 'name' ) ?>" />
    <meta property="og:url" content="<?php the_permalink() ?>" />
    <meta property="og:description" content="<?php the_excerpt() ?>" />
    <meta property="og:type" content="article" />

    <?php
      if ( has_post_thumbnail() ) :
        $image = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' );
    ?>
      <meta property="og:image" content="<?php echo $image[0]; ?>"/>
    <?php endif; ?>

  <?php
  }
}
