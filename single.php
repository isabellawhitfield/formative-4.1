<?php get_header(); ?>

<h1 class="page-name">
  <pre><code>single.php</code></pre>
</h1>

<section class="page-wrap">
<div class="container row">
  <div class="col">
    <?php if(has_post_thumbnail()): ?>
        This has a featured image
        <div>
          <img src="<?php the_post_thumbnail_url('blog-large'); ?>" alt="<?php the_title(); ?>" class="mb-3 img-fluid img-thumbnail">
        </div>
    <?php endif; ?>
   </div>

    <div class="col">
      <h1> <?php the_title(); ?>   </h1>
      <?php get_template_part('includes/section','blogcontent'); ?>
         <?php wp_link_pages(); ?>
    </div>
</div>
</section>
<?php get_footer(); ?>
