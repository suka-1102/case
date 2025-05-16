<?php get_header(); ?>
<main>
  <div class="inner">
    <div class="maxWidth">
      <section>
      <div class="president">
        <div class="subheading">
          <p class="pickup">Pickup</p>
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
          <p class="title">sponsored</p>
        </div>
        <div class="contents">
          <?php
            $args = array(
              'post_type' => 'sponsored',
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
      
    </section>
    </div>
    

  </div>
</main>
</body>
</html>