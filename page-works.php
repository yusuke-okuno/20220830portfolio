<?php get_header(); ?>

<main>
  <div class="page-first">
    <div class="page-section-title">
      <h2>works</h2>
      <img class="section-icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/computer_07 2.png">
      <p>制作物</p>
    </div>
  </div>

  <?php get_template_part('breadcrumb');?>

  <ul>
  <?php
  // WP_Queryのパラメータを指定
  $args = array(
      // 記事を3件表示
      'posts_per_page' => 3,
      // 記事をランダムで表示
      'orderby' => 'date',
      'order'  => 'DESC'
      // 記事の先頭固定表示なし
      // 'ignore_sticky_posts' => true
  );
  // WP_Queryのオブジェクト（インスタンス）を作成
  $query = new WP_Query( $args );

  // ループ開始
  while ( $query->have_posts() ) :
    // サブループの投稿データをセット
    $query->the_post();
  ?>
      <li>
      <!-- <a href="<?php the_permalink(); ?>">
        <h2><?php the_title(); ?></h2>
      </a> -->
        <article class="works-content">
          <img src="<?php the_field('thumbnail'); ?>">
          <div class="">
            <p><?php the_field('summary'); ?></p>
            <p><?php the_field('range'); ?></p>
            <p><?php the_field('skill'); ?></p>
          </div>
        </article>
      </li>
  <?php
  endwhile;
  // ループ終了

  // メインクエリの投稿データに戻す
  wp_reset_postdata(); 
  ?>
  </ul>


</main>

<?php get_footer(); ?>