<?php get_header(); ?>
<main>
  <div class="inner">
    <div class="maxWidth">

      <section>
      <div class="president">
        <div class="subheading">
          <p class="pickup">Pickup</p>
          <img src="<?php echo get_template_directory_uri(); ?>/image/faceSample.png" alt="">
          <p class="title">社長の想い</p>
        </div>
        <div class="contents">
          <?php
            $args = array(
              'post_type' => 'presidentdetail',
              'posts_per_page' => 2 // ← ここで表示件数を2件に制限
            );
            $president_query = new WP_Query($args);
          ?>
          <ul>
            <?php if($president_query->have_posts()): while($president_query->have_posts()): $president_query->the_post(); ?>
            <li>
              
              <a href="<?php the_permalink(); ?>">
                <img src="<?php the_field('サムネイル'); ?>" alt="">
                <p><?php the_title(); ?></p>
              </a>
              
            </li>
            <?php endwhile; endif; ?>
          </ul>
        </div>

      </div>
      <div class="businessPerson">
        <div class="subheading">
          <p class="pickup">Pickup</p>
          <img src="<?php echo get_template_directory_uri(); ?>/image/faceSample.png" alt="">
          <p class="title">sponsored</p>
        </div>
        <div class="contents">
          <?php
            $args = array(
              'post_type' => 'sponsored',
              'posts_per_page' => 3 // ← ここで表示件数を2件に制限
            );
            $president_query = new WP_Query($args);
          ?>
          <ul>
            <?php if($president_query->have_posts()): while($president_query->have_posts()): $president_query->the_post(); ?>
            <li>
              
              <a href="<?php the_permalink(); ?>">
                <img src="<?php the_field('サムネイル'); ?>" alt="">
                <p><?php the_title(); ?></p>
              </a>
              
            </li>
            <?php endwhile; endif; ?>
          </ul>
        </div>
      </div>
      
    </section>

    <section>
      <div class="container">
        <div class="affairs">
          <div class="subheading">
            <img src="<?php echo get_template_directory_uri(); ?>/image/faceSample.png" alt="">
            <p class="title">人事の声</p>
          </div>
          <div class="contents">
            <?php
            $args = array(
              'post_type' => 'affairsvoice',
              'posts_per_page' => 4 
            );
            $president_query = new WP_Query($args);
          ?>
            <ul>
              <?php if($president_query->have_posts()): while($president_query->have_posts()): $president_query->the_post(); ?>
              <li>
                
                <a href="<?php the_permalink(); ?>">
                  <img src="<?php the_field('サムネイル'); ?>" alt="">
                  <p><?php the_title(); ?></p>
                  <time datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php the_time('Y/m/d'); ?></time>
                </a>
                
              </li>
              <?php endwhile; endif; ?>
            </ul>
          </div>
          <div class="more">
            <a href="">もっと見る</a>
          </div>
          <div class="ranking">
            <h2>ランキング</h2>
          </div>
        </div>
      </div>
      <div class="banners">
        <div>
          <a href="">
            <img src="<?php echo get_template_directory_uri(); ?>/image/bannerSample.png" alt="">
          </a>
          <div class="companyPickup">
            <div class="subheading">
              <img src="<?php echo get_template_directory_uri(); ?>/image/faceSample.png" alt="">
              <p class="title">企業ピックアップ</p>
            </div>
            <div class="contents">
              <?php
            $args = array(
              'post_type' => 'pickup',
              'posts_per_page' => 3
            );
            $president_query = new WP_Query($args);
          ?>
            <ul>
              <?php if($president_query->have_posts()): while($president_query->have_posts()): $president_query->the_post(); ?>
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
        </div>
    </section>
    </div>
    

  </div>
</main>
</body>
</html>