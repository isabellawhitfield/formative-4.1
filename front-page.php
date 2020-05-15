<?php get_header(); ?>

<h1 class="page-name">
  <pre><code>front-page.php</code></pre>
</h1>

<main class="">
    <h1 class=""><?php the_title(); ?></h1>

    <?php get_template_part('includes/section','content'); ?>
</main>

<?php get_footer(); ?>
