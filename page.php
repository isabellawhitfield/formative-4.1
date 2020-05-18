
<?php get_header(); ?>

<h1 class="page-name">
  <pre><code>page.php</code></pre>
</h1>

<section class="page-wrap">
<div class="container">

  <h1> <?php the_title(); ?>   </h1>

  <?php get_template_part('includes/section','content'); ?>
</div>

<?php get_footer(); ?>
