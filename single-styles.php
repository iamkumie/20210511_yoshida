<?php get_header(); ?>
<?php if (have_posts()) : the_post(); ?>

  <div class="styles-single">
    <div class="styles-single__img">
      <?php echo get_the_post_thumbnail($post = 100); ?>
      <img src="<?php echo get_template_directory_uri(); ?>/img/no-images.png" alt="">
    </div>
    <div class="styles-single__content">
      <?php the_content(); ?>
    </div>
  </div>
  <a class="styles-single__btn" href="archive-styles.html">Styles一覧へ</a>
<?php endif; ?>

<?php get_footer(); ?>