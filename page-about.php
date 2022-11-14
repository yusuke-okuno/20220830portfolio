<?php get_header(); ?>



  <main>
    <div class="page-first">
      <div class="page-section-title my-animation">
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
        以前は他の地域にも住んでいましたが、<br>
        今は地元で活動しています。<br>
        大学院を卒業後、某国家試験のためアルバイトをしながら長らく勉学に励んでいましたが断念。<br>
        その後、数年間の行政の職務を経て、現在は個人でwebサイトの制作を請け負っています。
      </p>
    </section>

    <section class="about-question">
        <ul class="accordion-area">
          <li>
            <div class="area-detail">
              <h3 class="title">特徴</h3>
              <div class="box">
                <p>相手の話を真摯に聴き、そこから自分なりの意見を提案することには長けているかもしれません。実際に業務では、公務員在職時に地域振興に携わり地域住民の方々と協働した経験があります。</p>
              </div>
            </div>
          </li>

          <li>
            <div class="area-detail">
              <h3 class="title">好き・趣味</h3>
              <div class="box">
                <p>「旅行」、「B級グルメ」が好きです。<br>
                普段は割と節制していますが、ご当地グルメや気取らない食事が好物です。<br>
                趣味は、「筋トレ」です。<br>
                爽快感はもちろん、地道に取り組めば心身ともに「より成長した自分」を目指せる点が気に入っています。<br>
                あ、まだムキムキではありません。</p>
              </div>
            </div>
          </li>

          <li>
            <div class="area-detail">
              <h3 class="title">心掛け</h3>
              <div class="box">
                <p>先にお話しした「相手の意見を真摯に聴くこと」や「地道に取り組むこと」という私の性質は、この業務にも活かせると考えています。<br>
                「webサイトの制作ってよくわからない」と感じているからこそご相談頂いている場合も多いと思います。まずはできるだけわかりやすい言葉で説明してご要望を「真摯に」聴いて整理し、こちらからも提案できるように心掛けています。<br>
                方向性が定まれば、その後は「地道に」着実に作業に取り組みます。</p>
              </div>
            </div>
          </li>
        </ul>

    </section>


  </main>


<?php get_footer(); ?>