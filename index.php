<?php get_header(); ?>

  <main>
    <div class="first">
      <div class="first-images wrapper">
        <img class="images-left" src="<?php echo get_template_directory_uri(); ?>/assets/img/group46.png">
        <img class="images-center" src="<?php echo get_template_directory_uri(); ?>/assets/img/group45.png">
        <img class="images-right" src="<?php echo get_template_directory_uri(); ?>/assets/img/group47.png">
      </div>
    </div>

    <section class="services">
      <div class="section-title">
        <h2>services</h2>
        <img class="section-icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/computer_07 1.png">
        <p>ご提供できること</p>
      </div>

      <div class="section-content wrapper">
        <div class="content-item">
          <h3>webサイト制作</h3>
          <img class="content-image" src="<?php echo get_template_directory_uri(); ?>/assets/img/soudan.png">
          <p>
            丁寧なヒアリングからお好みの<br>
            デザインを模索・提案させて頂き、<br>
            お客様の目的に沿うようなLPや<br>
            コーポレートサイトを制作致します。
          </p>
        </div>
        <div class="content-item">
          <h3>コーディング</h3>
          <img class="content-image" src="<?php echo get_template_directory_uri(); ?>/assets/img/typing.png">
          <p>
            デザインがお決まりの場合は、<br>
            頂いたデザインカンプが表現される<br>
            ように、正確にコーディング致します。
          </p>
        </div>
      </div>

      <button class="more-button" type="button" onclick="location.href='<?php echo esc_url(home_url('/')); ?>/services'">more</button>
    </section>

    <section class="works">
      <div class="section-title">
        <h2>works</h2>
        <img class="section-icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/computer_07 2.png">
        <p>制作物</p>
      </div>

      <ul class="slick-area">
        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/40301_s.jpg" alt=""></li>
        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/1262719_s.jpg" alt=""></li>
        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/24534605_s.jpg" alt=""></li>
        <li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/24679524_s.jpg" alt=""></li>
        <!-- <li><img src="img/pickup1.jpg" alt=""></li> -->
      </ul>

      <button class="more-button" type="button" onclick="location.href='<?php echo esc_url(home_url('/')); ?>/works'">more</button>
    </section>

    <section class="about">
      <div class="section-title">
        <h2>about</h2>
        <img class="section-icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/computer_07 3.png">
        <p>私について</p>
      </div>

      <p class="about-content">
        nokuoと申します。<br>
        関西を拠点に、フリーランスで<br>
        webサイトの制作を請け負っております。
      </p>

      <button class="more-button" type="button" onclick="location.href='<?php echo esc_url(home_url('/')); ?>/about'">more</button>
    </section>

  </main>

<?php get_footer(); ?>