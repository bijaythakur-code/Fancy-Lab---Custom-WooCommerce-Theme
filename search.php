<?php

/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Fancy Lab
 */

get_header();
?>
<div class="content-area">
  <main>
    <div class="container">
      <div class="row">

        <h1><?php _e('Search results for', 'fancy-lab'); ?>: <?php echo get_search_query(); ?></h1>

        <?php

        get_search_form();

        // If there are any posts
        if (have_posts()) :

          // Load posts loop
          while (have_posts()) : the_post();
            get_template_part('template-parts/content', 'search');
          endwhile;
          the_posts_pagination(array(
            'prev_text'      =>  __('Previous', 'fancy-lab'),
            'next_text'      =>  __('Next', 'fancy-lab'),
          ));
        else :
        ?>
          <p><?php _e('Nothing to display.', 'fancy-lab'); ?></p>
        <?php endif; ?>
      </div>
    </div>
  </main>
</div>
<?php get_footer(); ?>