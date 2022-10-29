<?php get_header(); ?>



  <main>
    <div class="page-first">
      <div class="page-section-title">
        <h2>about</h2>
        <img class="section-icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/computer_07 3.png">
        <p>私について</p>
      </div>
    </div>

    <?php get_template_part('breadcrumb');?>

    <section class="about-illustration">
      <img class="about-image" src="<?php echo get_template_directory_uri(); ?>/assets/img/myface.png">
    </section>

    <section class="about-content">
      <p>
        はじめまして、nokuoです。<br>
        当サイトをご覧頂きありがとうございます。<br>
        昭和生まれの関西人です。<br>
        以前は他の地域にも住んでいました。今は地元で活動しています。<br>
        大学院を卒業後、某国家試験のためアルバイトをしながら長らく勉学に励んでいましたが断念。<br>
        その後、数年間の行政の職務を経て、現在は個人でwebサイトの制作を請け負っています。
      </p>
    </section>

    <section class="about-question">
      <!-- <h2>ちょっとしたQ&A</h2> -->

        <ul class="accordion-area">
          <li>
            <div class="area-detail">
              <h3 class="title">自己分析</h3>
              <div class="box">
                <p>公務員在職時には地域振興に携わり、自治会を含めた地域の方々と協働した経験があります。様々な立場の方のお話を真摯に聴き、それを踏まえて妥当な意見を提案することには長けていると思います。</p>
              </div>
            </div>
          </li>

          <li>
            <div class="area-detail">
              <h3 class="title">好きなこと・趣味</h3>
              <div class="box">
                <p>「旅行」、「B級グルメ」が好きです。<br>
                普段は割と節制していますが、旅先でのご当地グルメや大衆店のラーメンやカレー等は大好きです。<br>
                趣味は「筋トレ」です。<br>
                爽快感や楽しさがあるのは前提ですが、地道に行えば心身ともに「より成長した自分」を目指せる点が気に入っています。</p>
              </div>
            </div>
          </li>


          <li>
            <div class="area-detail">
              <h3 class="title">心掛け</h3>
              <div class="box">
                <p>先に述べたような「相手の意見を真摯に聴くこと」「地道に取り組むこと」という性質は業務にも活かせると考えております。<br>
                おそらく、「webサイトの制作ってよくわからない」と感じているからこそご相談頂いていることが多いと思います。そのため、お客様が理解できるわかりやすい言葉で説明した上でご要望を整理して、こちらからも提案できるように心掛けております。<br>
                方向性が決まるまで丁寧に打ち合わせした後、着実に作業させていただきます。</p>
              </div>
            </div>
          </li>
        </ul>

    </section>


  </main>


<?php get_footer(); ?>