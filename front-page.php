<?php get_header(); ?>
<main>
  <div class="inner">
    <div class="maxWidth">

      <section>
      <div class="president">
        <div class="subheading">
          <p class="pickup">Pickup</p>
          <div class="separate">
            <img src="<?php echo get_template_directory_uri(); ?>/image/faceSample.png" alt="">
            <p class="title">社長の想い</p>
          </div>
          
        </div>
        <div class="contents">
          <?php
            $args = array(
              'post_type' => 'presidentdetail',
              'posts_per_page' => 2, // ← ここで表示件数を2件に制限
            );
            $president_query = new WP_Query($args);
          ?>
          <ul>
            <?php if ($president_query->have_posts()): while ($president_query->have_posts()): $president_query->the_post(); ?>
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
          <div class="separate">
            <img src="<?php echo get_template_directory_uri(); ?>/image/faceSample.png" alt="">
            <p class="title">sponsored</p>
          </div>
        </div>
        <div class="contents">
          <?php
            $args = array(
              'post_type' => 'sponsored',
              'posts_per_page' => 3, // ← ここで表示件数を2件に制限
            );
            $president_query = new WP_Query($args);
          ?>
          <ul>
            <?php if ($president_query->have_posts()): while ($president_query->have_posts()): $president_query->the_post(); ?>
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

    <div class="separate">
      
    </div>
    <div class="separate">
      
    </div>
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
          <div class="more">
            <a href="/affairs">もっと見る</a>
          </div>
          <h2>新着</h2>
          <div class="ranking">
            <div class="contents">
              <ul class="number">
                <li><span>No.1</span></li>
                <li><span>No.2</span></li>
                <li><span>No.3</span></li>
              </ul>
              <?php get_sidebar(); ?>
              <div class="more">
               <a href="/affairs">もっと見る</a>
            </div>
            </div>
          </div>
          <small>*1ヶ月以内に公開された記事が対象のランキングです</small>
        </div>

        <div class="groupInterview">
          <div class="subheading">
            <img src="<?php echo get_template_directory_uri(); ?>/image/faceSample.png" alt="">
            <p class="title">団体インタビュー</p>
          </div>
          
          <div class="OBOGInterview">
            <p>OBOGインタビュー</p>
            <div class="contents">
              <?php
            $args = array(
              'post_type' => 'ogobinterview',
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
            <div class="more">
            <a href="/oboginterview">もっと見る</a>
          </div>
          </div>
          <div class="studentInterview">
            <p>学生インタビュー</p>
            <div class="contents">
              <?php
            $args = array(
              'post_type' => 'studentsinterview',
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
            <div class="more">
            <a href="/studentinterview">もっと見る</a>
          </div>
          </div>
        </div>

        <div class="groupNews">
          <div class="subheading">
            <img src="<?php echo get_template_directory_uri(); ?>/image/faceSample.png" alt="">
            <p class="title">ニュース</p>
          </div>
          <div class="news">
            <div class="OBOGNews">
              <p>企業ニュース</p>
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
              <div class="more">
              <a href="/companynews">もっと見る</a>
            </div>
          </div>
          <div class="studentNews">
            <p>学生ニュース</p>
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
            <div class="more">
            <a href="studentnews">もっと見る</a>
          </div>
          </div>
          </div>
          
        </div>

        <div class="serialization">
          <div class="subheading">
            <img src="<?php echo get_template_directory_uri(); ?>/image/faceSample.png" alt="">
            <p class="title">連載</p>
            
          </div>
          <?php
          $args = array(
          'post_type' => 'company_series',
          'posts_per_page' => 3,
          );
          $president_query = new WP_Query($args);
          ?>

          <div class="swiper mySwiper">
          <div class="swiper-wrapper">
            <?php if ($president_query->have_posts()): while ($president_query->have_posts()): $president_query->the_post(); ?>
              <div class="swiper-slide">
                <a href="<?php the_permalink(); ?>">
                  <img src="<?php the_field('サムネイル'); ?>" alt="">
                </a>
              </div>
            <?php endwhile; endif; ?>
          </div>
          <!-- 次へボタンと前へボタン -->
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
          </div>

          <?php wp_reset_postdata(); ?>
          <div class="more">
            <a href="">もっと見る</a>
          </div>
        </div>
      </div>
            

      
<?php get_footer(); ?>