<?php

/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Fancy Lab
 */

get_header();
?>

<div class="content-area">
  <main>
    <div class="container">
      <div class="error-404">
        <header>
          <h1><?php _e('Page not found', 'fancy-lab'); ?></h1>
          <p><?php _e('Unfortunately, the page you tried to reach does not exist on this site!', 'fancy-lab'); ?></p>
        </header>
        <?php
        the_widget('WP_Widget_Recent_Posts', array(
          'title'       =>  __('Take a look at Our Latest Posts', 'fancy-lab'),
          'number'      =>  3,
        ));
        ?>
      </div>
    </div>
  </main>
</div>
<?php get_footer(); ?>