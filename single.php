<?php 
get_header(); ?>

<div class="main">
  <div class="divide">
    <div class="tops">
    <figure>
      <img src="<?php the_field('サムネイル'); ?>" alt="">
    </figure>
    <div class="title">
      <h1><?php the_title(); ?></h1>
      <div class="detail">
        <p>
        <?php 
        $categories = get_the_category();
        $category_names = array();

        foreach($categories as $category) {
            $category_names[] = $category->name;
        }

        echo implode(', ', $category_names);
        ?>
        </p>
        <time datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php the_time('Y/m/d'); ?></time>
      </div>
    </div>
  </div>
  <div class="contents">
    <?php the_content(); ?>
  </div>
  <div class="bottom">
    <div class="share">
      <p>この記事をシェア</p>
      <div class="apps">
        <a href=""><img src="<?php echo get_template_directory_uri(); ?>/image/iconX.png" alt=""></a>
        <a href=""><img src="<?php echo get_template_directory_uri(); ?>/image/iconFacebook.png" alt=""></a>
        <a href=""><img src="<?php echo get_template_directory_uri(); ?>/image/iconLine.png" alt=""></a>
      </div>
    </div>
    <div class="other">
      <a href="" class="youtube">
        <span>Youtube</span>
        <span>レバレジーズChでは「会社のリアル」を配信中！</span>
        <span>
          <img src="<?php echo get_template_directory_uri(); ?>/image/iconYoutube.svg" alt="">
          レバレジーズCh
        </span>
      </a>
      <div class="otherInformation">
        <div class="top">
          <a href="">新卒採用情報</a>
          <a href="">中途採用情報</a>
        </div>
        <div class="bottom">
          <a class="tech">tech Blog</a>
          <a class="data">Data Blog</a>
        </div>
      </div>
    </div>
    
  </div>

  <div class="pageTop">
    <a href="#top">page top</a>
  </div>
  </div>

  
<?php 
get_footer(); 
?>

