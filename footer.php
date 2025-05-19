
<div class="banners">
  <?php if (is_singular('company_series')) : ?>
<script>
    const banners = document.querySelector(".banners");
    if (banners) {
      const newContent = document.createElement("div");
      newContent.className = "newContent";
      newContent.innerHTML = `
        <div class="companyInformation">
    <div>
      <p>companies/企業名</p>
      <p><?php the_field('企業名'); ?></p>
    </div>
    <div>
      <p>業種</p>
      <p><?php the_field('業種'); ?></p>
    </div>
    <div>
      <p>本社所在地</p>
      <p><?php the_field('本社所在地'); ?></p>
    </div>
    <div>
      <p>代表</p>
      <p><?php the_field('代表'); ?></p>
    </div>
  </div>
      `;
      banners.insertBefore(newContent, banners.firstChild);
    }
</script>
<?php endif; ?>
    <div>
      <a href="">
        <img class="pc" src="<?php echo get_template_directory_uri(); ?>/image/bannerSample.png" alt="">
        <img class="sp" src="<?php echo get_template_directory_uri(); ?>/image/bannerSp.png" alt="">
      </a>
      <div class="companyPickup">
        <div class="subheading">
          <img src="<?php echo get_template_directory_uri(); ?>/image/faceSample.png" alt="">
          <p class="title">企業ピックアップ</p>
        </div>
        <div class="contents">
          <?php
            $args = array(
              'post_type' => 'company_pickup',
              'posts_per_page' => 3,
            );
            $president_query = new WP_Query($args);
          ?>
            <ul>
              <?php if ($president_query->have_posts()): while ($president_query->have_posts()): $president_query->the_post(); ?>
              <li>
                
                <a href="<?php the_permalink(); ?>">
                  <img src="<?php the_field('サムネイル'); ?>" alt="">
                </a>
                
              </li>
              <?php endwhile; endif; ?>
            </ul>
        </div>
      </div>
      <div class="smallBanner">
        <div class="item"><a href=""><img src="<?php echo get_template_directory_uri(); ?>/image/smallBannerSample.webp" alt=""></a></div>
        <div class="item"><a href=""><img src="<?php echo get_template_directory_uri(); ?>/image/smallBannerSample.webp" alt=""></a></div>
        <div class="item"><a href=""><img src="<?php echo get_template_directory_uri(); ?>/image/smallBannerSample.webp" alt=""></a></div>
      </div>
      </div>
    </div>
  </div>
  </section>
  
    

  </div>
</main>

<footer>
  <div class="container">
    <div class="sns">
      <a href="/"><img src="<?php echo get_template_directory_uri(); ?>/image/logoWhiteSample.svg" alt=""></a>
      <p>新R25をフォローして新着記事を受け取ろう！</p>
      <div class="youtube">
        <div class="wrapper">
          <img src="<?php echo get_template_directory_uri(); ?>/image/icon.jpg" alt="">
          <a href="">
            <span>R25チャンネル</span>
            <span><span class="fa-brands fa-youtube"></span>youtube</span>
          </a>
        </div>
      </div>
      <div class="facebook">
         <div class="wrapper">
          <img src="<?php echo get_template_directory_uri(); ?>/image/icon.jpg" alt="">
          <a href="">
            <span>R25</span>
          <span><span class="fa-brands fa-facebook"></span>ページをフォロー</span>
          </a>
        </div>
      </div>
      <div class="x">
        <a href="">
          <img src="<?php echo get_template_directory_uri(); ?>/image/x.svg" alt="">
          <p>新R25をフォローする</p>
        </a>
      </div>
      <small>2024 CAM Inc.</small>
    </div>
    <div class="policy">
      <ul>
        <li><a href="">運営会社</a></li>
        <li><a href="">利用規約</a></li>
        <li><a href="">プライバシーポリシー</a></li>
        <li><a href="">アクセスデータの利用に関するガイドライン</a></li>
      </ul>
      <ul>
        <li><a href="">新R25 Busunessについて</a></li>
        <li><a href="">新R25 動画広告について</a></li>
        <li><a href="">新R25 Developersについて</a></li>
        <li><a href="">お問い合わせ</a></li>
      </ul>
    </div>
  </div>
</footer>
</body>
</html>