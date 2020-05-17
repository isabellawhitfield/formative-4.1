<?php get_header(); ?>

<h1 class="page-name">
  <pre><code>single.php</code></pre>
</h1>

<main>
  <div class="container">
    <?php if(has_post_thumbnail()): ?>
    <div>
      This has a featured image
      <img src="<?php the_post_thumbnail_url('blog-large'); ?>" alt="<?php the_title(); ?>" class="mb-3 img-fluid img-thumbnail">
    </div>
    <?php endif; ?>

    <div>
      <h1><?php the_title(); ?></h1>

      <?php get_template_part('includes/section','blogcontent'); ?>

      <?php wp_link_pages(); ?>
    </div>
  </div>
</main>

<?php get_footer(); ?>
