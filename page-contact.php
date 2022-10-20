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

  <!-- お名前

[mwform_text name="お名前" size="60"]

E-mailアドレス

[mwform_email name="E-mailアドレス" size="60"]

電話番号

[mwform_tel name="電話番号"]

[mwform_submitButton name="確認送信ボタン" confirm_value="確認画面へ" submit_value="送信する"] -->

</main>

<?php get_footer(); ?>