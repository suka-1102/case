<?php 

get_header(); ?>

<div class="series">
  <div class="divide">
    <div class="subheading">
      <img src="<?php echo get_template_directory_uri(); ?>/image/faceSample.png" alt="">
      <p class="title">連載</p>
    </div>
    <section>
      <img src="<?php the_field('サムネイル'); ?>" alt="">
      <div class="text">
        <p><?php the_field('タイトル'); ?></p>
        <p><?php the_field('文章'); ?></p>
      </div>
    </section>

    <div class="share">
      <p>この記事をシェア</p>
      <div class="apps">
        <a href=""><img src="<?php echo get_template_directory_uri(); ?>/image/iconX.png" alt=""></a>
        <a href=""><img src="<?php echo get_template_directory_uri(); ?>/image/iconFacebook.png" alt=""></a>
        <a href=""><img src="<?php echo get_template_directory_uri(); ?>/image/iconLine.png" alt=""></a>
      </div>
    </div>
  </div>
  
    
  


<?php 
wp_reset_postdata(); // ✅ クエリリセット
get_footer(); 
?>