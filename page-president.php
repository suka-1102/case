<?php 
/* 
 Template Name: 社長の想い
*/
get_header(); ?>

<div class="president">
  <div class="presidentPageDiv">
    <div class="subheading">
      <img src="<?php echo get_template_directory_uri(); ?>/image/faceSample.png" alt="">
      <p class="title">社長の想い</p>
    </div>
    <div class="contents">
      <?php
        // ✅ paged を取得
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

        $args = array(
          'post_type' => 'presidentdetail',
          'paged' => $paged,
        );
        $president_query = new WP_Query($args);
      ?>
      <ul>
        <?php if($president_query->have_posts()): while($president_query->have_posts()): $president_query->the_post(); ?>
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

    <div class="pagenation">
      <?php 
        echo paginate_links(array(
          'total' => $president_query->max_num_pages,
          'current' => $paged,
          'type' => 'list',
          'prev_text' => '<',
          'next_text' => '>'
        ));
      ?>
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
</div>


<?php 
wp_reset_postdata(); // ✅ クエリリセット
get_footer(); 
?>
