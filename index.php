<?php get_header(); ?>

<h1 class="page-name">
  <pre><code>index.php</code></pre>
</h1>

<h1><?php echo single_cat_title(); ?></h1>
  
<?php get_template_part('includes/section','archive'); ?>

<?php previous_posts_link();  ?>
<?php next_posts_link();  ?>

<?php get_footer(); ?>
