<?php
/*
Template Name: profile
*/
?>

<?php get_header(); ?>
      <!-- ---↓main--------------------------------------------------------------------- -->
      <main class="profilePage common mask">
        <div class="inner">
          <h1 class="pageHeading">Profile</h1>
          <div class="spImageWrap">
            <?php
              $spImage_url = wp_get_attachment_url( get_post_thumbnail_id() );
              $spImage_bg = "style='background-image:url(".$spImage_url.");'";
            ?>
            <div class="spImage"<?php echo $spImage_bg; ?>></div>
          </div>
          <div class="contentsWrap">
            <p class="scrollIcon"><span></span></p>
            <section class="section">
              <h2 class="heading">Name</h2>
              <div class="contents">
                <div class="nameWrap">
                  <p class="profession">フロントエンドエンジニア</p>
                  <h2 class="name">
                    飯村 拓也<span class="ruby">Takuya Iimura</span>
                  </h2>
                </div>
              </div>
            </section>
            <section class="section">
              <h2 class="heading">Career</h2>
              <div class="contents">
                <p class="text">
                  不動産業界にて、投資用マンションの販売・営業を経て、
                  2018年にIT業界に就職。<br>
                  <br>
                  現在では、フロントエンドエンジニアとして制作案件に携わるほか、<br>
                  社内のエンジニア未経験者へのコードレビューを通した教育やチームリーダーとしてマネジメント等も行なっております。
                </p>
              </div>
            </section>
            <section class="section skill">
              <h2 class="heading">Skills & Experience</h2>
              <div class="contents">
                <ul class="list">
                  <li class="item">
                    <p class="imageWrap">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/html5.svg" alt="HTML">
                    </p>
                    <p class="name">HTML</p>
                    <p class="text">
                      セマンティックなコーディングを行うことができます。<br>
                      基本的にはデザインカンプを見れば、HTML構造が想像できます。
                    </p>
                  </li>
                  <li class="item">
                    <p class="imageWrap">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/css3.svg" alt="CSS">
                    </p>
                    <p class="name">CSS</p>
                    <p class="text">
                      運用性・保守性を第一に考えた上でOOCSSやBEM、flocss等のCSS設計を意識したコーディングを行うことができます。<br>
                      また、scssを用いたコーディングも可能です。<br>
                    </p>
                  </li>
                  <li class="item">
                    <p class="imageWrap">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/javascript.svg" alt="javascript">
                    </p>
                    <p class="name">javascript</p>
                    <p class="text">
                      レベル感としては、保守性を意識しながらpluginを用いないスライドショーを作り上げることができるレベルです。<br>
                      jQueryを使用することが多いですが、さらなる基礎力向上のためピュアなJSの勉強を行なっています。
                    </p>
                  </li>
                  <li class="item">
                    <p class="imageWrap">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/wordpress.svg" alt="wordpress">
                    </p>
                    <p class="name">wordpress</p>
                    <p class="text">
                      オリジナルのテーマの作成を行うことができます。<br>
                      また、自社内でオリジナルテーマを用いたオウンドメディアの実装を行いました。
                    </p>
                  </li>
                  <li class="item">
                    <p class="imageWrap">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/php.svg" alt="php">
                    </p>
                    <p class="name">php</p>
                    <p class="text">
                      案件先にて、コーポレートサイトを作成した際に、「お問い合わせフォームを実装して欲しい」との要望があったため、phpを使用してフォームの実装を行いました。
                    </p>
                  </li>
                  <li class="item">
                    <p class="imageWrap">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/webpack.svg" alt="php">
                    </p>
                    <p class="name">webpack</p>
                    <p class="text">
                      開発環境により作業の効率性や再利用性、保守性が変わることに気付き、勉強をしました。<br>
                      必要に応じて自ら開発環境を作ることができます。
                    </p>
                  </li>
                </ul>
              </div>
            </section>
          </div>
        </div>
      </main>
      <!-- ./main -->
<?php get_footer(); ?>
