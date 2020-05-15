<?php get_header(); ?>

<h1 class="page-name">
  <pre><code>archive.php</code></pre>
</h1>

<section class="page-wrap">
<div class="container">

  <section class="row">
    <?php if(is_active_sidebar('blog-sidebar')) :?>
      <div class="col-lg-3 widget">
        <?php dynamic_sidebar('blog-sidebar'); ?>
      </div>
    <?php endif; ?>

    <div class="col-lg-9">

      <h1> <?php echo single_cat_title(); ?> </h1>
      <?php get_template_part('includes/section','archive'); ?>
      <!-- Pagination Method 1 -->
   <?php previous_posts_link();  ?>
   <?php next_posts_link();  ?>



   <!-- Pagination Method 2 -->
   <?php
      // global $wp_query;
      // $big = 99999999999;
      // echo paginate_links(array(
      //   'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
      //   'format'=>'?paged-%#%',
      //   'current' => max(1, get_query_var('paged')),
      //   'total' => $wp_query -> max_num_pages
      // ));

   ?>
   </div>
</section>
</div>
</section>
<?php get_footer(); ?>
