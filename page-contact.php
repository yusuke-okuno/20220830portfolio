<?php get_header(); ?>

<main>
  <div class="page-first">
    <div class="page-section-title">
      <h2>contact</h2>
      <img class="section-icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/computer_07 4.png">
      <p>お問い合わせ</p>
    </div>
  </div>

  <?php get_template_part('breadcrumb');?>

  <?php echo do_shortcode('[mwform_formkey key="20"]'); ?>


</main>

<?php get_footer(); ?>