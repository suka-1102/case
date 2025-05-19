<?php 

get_header(); ?>

<main>
  <section>
    <img src="<?php the_field('タイトル画像'); ?>" alt="">
    <div class="name">
      <img src="<?php echo get_template_directory_uri(); ?>/image/faceSample.png" alt="">
      <h1><?php the_title(); ?></h1>
    </div>
    <div class="text">
      <?php the_field('説明文'); ?>
    </div>
    <div class="details">
      <div>
        <p>ホームページ</p>
        <a href="<?php the_field('ホームページURL'); ?>"><?php the_field('ホームページURL'); ?></a>
      </div>
      <div>
        <p>Instagram</p>
        <a href="<?php the_field('インスタグラムURL'); ?>"><?php the_field('インスタグラムURL'); ?></a>
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

  <?php wp_reset_postdata();?>
  <div class="companyInformation">
    <div>
      <p>comepanies/企業名</p>
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
  
</div>

<?php 
wp_reset_postdata(); // ✅ クエリリセット
get_footer(); 
?>