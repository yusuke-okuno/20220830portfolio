<?php get_header(); ?>



  <main>
    <div class="page-first">
      <div class="page-section-title">
        <h2>services</h2>
        <img class="section-icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/computer_07 1.png">
        <p>ご提供できること</p>
      </div>
    </div>

    <?php get_template_part('breadcrumb');?>

    <div class="wrapper">
      <h3>skills</h3>
      <section class="skill">
        <div class="skill-content">
          <div class="official-icons">
            <img class="official-icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/logos_html-5.png">
            <img class="official-icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/logos_css-3.png">
            <img class="official-icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/logos_sass.png">
          </div>
          <p>HTML/CSS（scss）を用いて、レスポンシブを考慮したコーディングをします。</p>
        </div>

        <div class="skill-content">
          <div class="official-icons">
            <img class="official-icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/logos_javascript.png">
          </div>
          <p>JavaScript・jQueryを用いて、「ハンバーガーメニュー」や「アコーディオン」等のシンプルな動きを付けられます。</p>
        </div>

        <div class="skill-content">
          <div class="official-icons">
            <img class="official-icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/fa6-brands_wordpress.png">
          </div>
          <p>WordPressに対応したサイトを制作します。</p>
        </div>

        <div class="skill-content">
          <div class="official-icons">
            <img class="official-icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/logos_figma.png">
          </div>
          <p>簡単なデザインを扱う打ち合わせ等においてfigmaを使用します。</p>
        </div>
      </section>

      <h3>details</h3>
      <section class="detail">
        <div class="detail-item">
          <div class="detail-item-icon">
            <img class="content-image" src="<?php echo get_template_directory_uri(); ?>/assets/img/soudan.png">
            <h4>webサイト制作</h4>
          </div>
          <p>
            複数ページに渡る企業のコーポレートサイトや個人のブログサイト、1ページのみで商品の購入や資料請求を動機付けを狙うLPの制作を請け負います。デザインが決まっていない場合には、ヒアリングの中でこちらからもオススメを提案してデザインのイメージを固められるようにお手伝いさせて頂きます。お客様が納得できるまで打ち合わせをさせて頂きますのでご安心下さい。
          </p>
        </div>

        <div class="detail-item">
          <p>
            頂いたデザインに沿って正確に作成致します。納品後に小さな変更やリニューアルされる際に支障がないように、保守・運用に配慮したコーディングを心掛けます。
          </p>
          <div class="detail-item-icon cording-icon">
            <img class="content-image" src="<?php echo get_template_directory_uri(); ?>/assets/img/typing.png">
            <h4>コーディング</h4>
          </div>
        </div>

        <div class="detail-item">
          <div class="detail-item-icon">
            <img class="content-image" src="<?php echo get_template_directory_uri(); ?>/assets/img/computer_05 1.png">
            <h4>WordPress</h4>
          </div>
          <p>
            お客様ご自身で記事の投稿や編集・更新ができるメリットから、WordPressでの実装を推奨させて頂いています。オリジナルテーマの作成やプラグインの導入によって、納品後の利便性が向上したサイトを構築致します。
          </p>
        </div>
      </section>
    </div>

  </main>
<?php get_footer(); ?>