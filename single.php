<?php get_header(); ?>
<div class="topics-firstview firstview">
  <div class="firstview__content">
    <h2 class="firstview__catchcopy">特集</h2>
    <p class="firstview__ss-txt">Topics</p>
    <a href="<?php echo esc_url($is_archive); ?>" class="firstview__btn">特集一覧ページへ</a>
  </div>
</div>

<?php if (have_posts()) : the_post(); ?>
  <main class="single-main">
    <div class="container">
      <h1><?php the_title(); ?></h1>

      <?php if (has_post_thumbnail()) : ?>
        <?php the_post_thumbnail(); ?>
      <?php else : ?>
        <img src="<?php echo get_template_directory_uri(); ?>/img/no-images.png" alt="">
      <?php endif; ?>

      <?php the_content(); ?>
    </div>

  </main>
<?php endif; ?>



<?php get_footer(); ?>