<?php get_header(); ?>

<div class="firstview top-firstview">
  <div class="firstview__content top-firstview__content">
    <h1 class="firstview__catchcopy">呼び覚ませ</h1>
    <p class="firstview__ss-txt">2021 Spring & Summer</p>
  </div>
</div>

<div class="topics">
  <h2 class="topics-ttl">Topics</h2>
  <div class="topics-inner">

    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
        <a href="<?php the_permalink(); ?>" class="topics__item">

          <div class="topics__item-img">
            <?php if (has_post_thumbnail()) : ?>
              <?php the_post_thumbnail(); ?>
            <?php else : ?>
              <img src="<?php echo get_template_directory_uri(); ?>/img/no-images.png" alt="">
            <?php endif; ?>
          </div>

          <div class="topics__item-content">
            <h3 class="topics__item-ttl">
              <?php
              if (mb_strlen($post->post_title, 'UTF-8') > 30) {
                $title = mb_substr($post->post_title, 0, 30, 'UTF-8');
                echo $title . '…';
              } else {
                echo $post->post_title;
              } ?>
            </h3>
          </div>
        </a>
      <?php endwhile; ?>
    <?php else : ?>
      <p>投稿が見つかりません。</p>
    <?php endif; ?>
  </div>
</div>


<div class="styles">
  <h2 class="styles-ttl">Styles</h2>
  <div class="styles-wrap">
    <?php
    $posts = new WP_Query(
      array(
        'post_type' => 'styles',
        'posts_per_page' => 6
      )
    );
    if (have_posts()) : while ($posts->have_posts()) : $posts->the_post();
    ?>

        <a href="<?php the_permalink(); ?>" class="styles-wrap__item">
          <?php if (has_post_thumbnail()) : ?>
            <?php the_post_thumbnail(); ?>
          <?php else : ?>
            <img src="<?php echo get_template_directory_uri(); ?>/img/no-images.png" alt="">
          <?php endif; ?>
        </a>

    <?php endwhile;
    endif;
    wp_reset_query(); ?>
  </div>
  <a href="archive-styles.html" class="styles-btn">Styles一覧ページへ</a>
</div>

<div class="about">
  <div class="about__inner">
    <div class="about__img">
      <?php echo get_the_post_thumbnail($post = 81); ?>
      <img src="<?php echo get_template_directory_uri(); ?>/img/no-images.png" alt="">
    </div>
    <div class="about__content">
      <p class="about__content-subttl">Make your World</p>
      <h2 class="about__content-ttl">個性が出せる<br>世界に</h2>
      <p class="about__content-txt"><span class="new-line">ここにはAboutのテキストが入る予定です。ここにはAboutのテキストが入る予定です。ここにはAboutのテキストが入る予定です。ここにはAboutのテキストが入る予定です。</span>ここにはAboutのテキストが入る予定です。ここにはAboutのテキストが入る予定です。</p>
      <a href="<?php echo home_url('about'); ?>" class="about-btn">Aboutページへ</a>
    </div>
  </div>
</div>

<?php get_footer(); ?>