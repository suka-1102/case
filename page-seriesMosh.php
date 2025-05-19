<?php 
/* 
 Template Name: 連載mosh
*/
get_header(); ?>

<div class="series">
  <div class="divide">
    <div class="subheading">
      <img src="<?php echo get_template_directory_uri(); ?>/image/faceSample.png" alt="">
      <p class="title">連載</p>
    </div>
    <section>
      <img src="<?php echo get_template_directory_uri(); ?>/image/moshBanner.webp" alt="">
      <div class="text">
        <p>The Next Creators</p>
        <p>「1人1人が好きなことに熱狂できる社会を創る」という想いから生まれたMOSHと新R25でお送りする本連載では、ビジネスパーソンにおすすめしたいMOSHを活用している次の時代を創る注目クリエイターたちを紹介！あなたもMOSHを活用してレッスンを楽しもう！</p>
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