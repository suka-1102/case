<?php 
/* 
 Template Name: mosh
*/
get_header(); ?>

<main>
  <section>
    <img src="<?php echo get_template_directory_uri(); ?>/image/moshBig.webp" alt="">
    <div class="name">
      <img src="<?php echo get_template_directory_uri(); ?>/image/faceSample.png" alt="">
      <h1>MOSH株式会社</h1>
    </div>
    <div class="text">
      MOSHは、ネットであらゆるサービス・講座をカンタンに売ることができるストアフロント型サービスECプラットフォームです。
ホームページ・予約・決済・月額サブスクリプション・クーポンなどの機能をスマホで簡単に作ることができ、顧客管理やデジタルコンテンツの販売なども行うことができます。現在ヨガ・美容・料理・キャリア・育児など200業種、70,000人以上のクリエイターの皆さんにご利用いただいています。
    </div>
    <div class="details">
      <div>
        <p>ホームページ</p>
        <a href="https://corp.mosh.jp/">https://corp.mosh.jp/</a>
      </div>
      <div>
        <p>Instagram</p>
        <a href="https://www.instagram.com/mosh_official_/">https://www.instagram.com/mosh_official_/</a>
      </div>
      <div>
        <p>SNS</p>
        <img src="<?php echo get_template_directory_uri(); ?>/image/xWhite.svg" alt="">
      </div>
    </div>
  </section>

  <section>
    <div class="subheading">
      <img src="<?php echo get_template_directory_uri(); ?>/image/faceSample.png" alt="">
      <p class="title">人事の声</p>
    </div>
    <div class="contents">
      <?php
      $args = array(
        'post_type' => 'affairsvoice',
        'posts_per_page' => 8,
      );
      $president_query = new WP_Query($args);
      ?>
      <ul>
        <?php if ($president_query->have_posts()): while ($president_query->have_posts()): $president_query->the_post(); ?>
        <li>
          
          <a href="<?php the_permalink(); ?>">
            <img src="<?php the_field('サムネイル'); ?>" alt="">
            <div class="text">
              <p><?php the_title(); ?></p>
              <time datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php the_time('Y/m/d'); ?></time>
              
            </div>
            
          </a>
          
        </li>
        <?php endwhile; endif; ?>
      </ul>
    </div>
    
  </section>
      
  <section>
    <div class="subheading">
      <img src="<?php echo get_template_directory_uri(); ?>/image/faceSample.png" alt="">
      <p class="title">ニュース</p>
    </div>
    <div class="contents">
      <?php
      $args = array(
        'post_type' => 'ogobnews',
        'posts_per_page' => 4,
      );
      $president_query = new WP_Query($args);
      ?>
      <ul>
        <?php if ($president_query->have_posts()): while ($president_query->have_posts()): $president_query->the_post(); ?>
        <li>
          
          <a href="<?php the_permalink(); ?>">
            <img src="<?php the_field('サムネイル'); ?>" alt="">
            <div class="text">
              <p><?php the_title(); ?></p>
              <time datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php the_time('Y/m/d'); ?></time>
              
            </div>
            
          </a>
          
        </li>
        <?php endwhile; endif; ?>
      </ul>
    </div>
    <div class="contents">
      <?php
      $args = array(
        'post_type' => 'studentsNews',
        'posts_per_page' => 4,
      );
      $president_query = new WP_Query($args);
      ?>
      <ul>
        <?php if ($president_query->have_posts()): while ($president_query->have_posts()): $president_query->the_post(); ?>
        <li>
          
          <a href="<?php the_permalink(); ?>">
            <img src="<?php the_field('サムネイル'); ?>" alt="">
            <div class="text">
              <p><?php the_title(); ?></p>
              <time datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php the_time('Y/m/d'); ?></time>
              
            </div>
            
          </a>
          
        </li>
        <?php endwhile; endif; ?>
      </ul>
    </div>
  </section>

  <div class="companyInformation">
    <div>
      <p>comepanies/企業名</p>
      <p>MOSH株式会社</p>
    </div>
    <div>
      <p>業種</p>
      <p>情報通信</p>
    </div>
    <div>
      <p>本社所在地</p>
      <p>東京都東京都渋谷区桜丘町9番8号KN渋谷3 4階</p>
    </div>
    <div>
      <p>代表</p>
      <p>籔 和弥</p>
    </div>
  </div>
  <div class="share">
    <p>この記事をシェア</p>
    <div class="apps">
      <a href=""><img src="<?php echo get_template_directory_uri(); ?>/image/iconX.png" alt=""></a>
      <a href=""><img src="<?php echo get_template_directory_uri(); ?>/image/iconFacebook.png" alt=""></a>
      <a href=""><img src="<?php echo get_template_directory_uri(); ?>/image/iconLine.png" alt=""></a>
    </div>
  </div>
  
</main>

<div class="companyPickup">
  <div>
      <div class="subheading">
      <img src="<?php echo get_template_directory_uri(); ?>/image/faceSample.png" alt="">
      <p class="title">企業ピックアップ</p>
    </div>
    <div class="contents">
      
    <ul>
      <li>         
        <a href="">
          <img src="<?php echo get_template_directory_uri(); ?>/image/pickupSample.webp" alt="">
        </a>
      </li>
      <li>         
        <a href="">
          <img src="<?php echo get_template_directory_uri(); ?>/image/pickupSample.webp" alt="">
        </a>
      </li>
      <li>
        <a href="/mosh">
          <img src="<?php echo get_template_directory_uri(); ?>/image/mosh.webp" alt="">
        </a>
      </li>

    </ul>
    </div>
  </div>
  
</div>

<?php 
wp_reset_postdata(); // ✅ クエリリセット
get_footer(); 
?>