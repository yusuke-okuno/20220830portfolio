<footer>
  <?php if ( is_page('contact') ) : ?>
    <section class="footer-bottom">
      <p>&copy; nokuo.web</p>
    </section>
  <?php else: ?>
    <section class="contact">
      <div class="section-title">
        <h2>contact</h2>
        <img class="section-icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/computer_07 4.png">
        <p>お問い合わせ</p>
      </div>

      <p class="contact-content">
        制作のご依頼・ご相談は、<br>
        下記ボタンより移動できる入力フォームから<br>
        まずは気軽にお問い合わせ下さい。
      </p>

      <button class="form-button"type="button" onclick="location.href='<?php echo esc_url(home_url('/')); ?>/contact'">form</button>
    </section>

    <section class="footer-bottom">
      <p>&copy; nokuo.web</p>
    </section>
  <?php endif; ?>
    
  </footer>

  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/slick-1.8.1/slick/slick.min.js"></script> -->
  

  <script src="https://code.jquery.com/jquery-3.6.1.min.js" ingrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/slide.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/accordion.js"></script>

  <!-- <script src="https://coco-factory.jp/ugokuweb/wp-content/themes/ugokuweb/data/9-2-1/js/9-2-1.js"></script> -->

<?php wp_footer(); ?>
</body>
</html>