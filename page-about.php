<?php
/*
Template Name: about
*/
?>
<?php get_header(); ?>

<div class="about-firstview">
  <?php // 投稿のスラッグを取得
  $page = get_post(get_the_ID());
  $slug = $page->post_name;
  ?>
  <div class="about-firstview__img">
    <?php echo get_the_post_thumbnail($post = 81); ?>
    <img src="<?php echo get_template_directory_uri(); ?>/img/no-images.png" alt="">
  </div>
  <div class="about-firstview__content">
    <h2 class="about-firstview__content-ttl">Make your World</h2>
    <p>Tecoolの簡単な説明文章がここにはたくさん入る予定です。Tecoolの簡単な説明文章がここにはたくさん入る予定です。Tecoolの簡単な説明文章がここにはたくさん入る予定です。Tecoolの簡単な説明文章がここにはたくさん入る予定です。Tecoolの簡単な説明文章がここにはたくさん入る予定です。</p>
    <p class="about-firstview__content-txt">since2000</p>
  </div>
</div>

<div class="about-inner">
  <?php the_content(); ?>
</div>

<?php get_footer(); ?>