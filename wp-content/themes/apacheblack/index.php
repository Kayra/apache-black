<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title><?php bloginfo('name') ?></title>
  <meta name="description" content="Personal Blog">
  <meta name="author" content="Kayra Alat">

  <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="icon" type="image/png" href="images/favicon.png">

  <!-- Wordpress stuff
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <?php wp_head(); ?>

</head>
<body>

  <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <header>
    <div class="container">
      <div class="row">
        <div class="twelve columns">
          <h1><?php bloginfo('name') ?></h1>
          <h2><?php bloginfo('description') ?></h2>
          <p>You've stumbled upon the blog of a twenty something web developer traveling the world and eating whatever I can get my hands on. 
          Don’t be fooled, the fitness part is literally just so I can eat without needing to buy more clothes.</p>
        </div>
      </div>
    </div>
  </header>

  <div class="container">
    <div class="row">
      <div class="twelve columns">
        <h3>MOST RECENT POST</h3>
      </div>
    </div>
  </div>  

  <?php $the_query = new WP_Query( 'showposts=1' ); ?>
  <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>

  <div class="image" style="background: url(<?php echo get_field('background_image')['url'] ?>) no-repeat center center; ">
    <div class="container">
       <div class="row">
        <div class="twelve columns">
          <h4><a href="<?php the_permalink() ?>"><?php the_title(); ?> ></a></h4>
        </div>
      </div>
    </div>  
  </div>

  <?php endwhile; wp_reset_query(); ?>

  <div class="container">
    <div class="row">
      <div class="twelve columns">
        <h3>FEATURED POSTS</h3>
      </div>
    </div>
  </div>  

  <div class="featured">

    <?php $the_query2 = new WP_Query( 'posts_per_page=3&cat=2'); ?>
    <?php while ($the_query2 -> have_posts()) : $the_query2 -> the_post(); ?>
      <div class="row">
        <div class="one-third column">
          <div class="feature">
            <div class="feature-title">
              <h5><a href="<?php the_permalink() ?>"><?php the_title(); ?> ></a></h5>
            </div>
            <img src="<?php echo get_field('featured_thumbnail')['url'] ?>">
          </div>
        </div>
      </div>
    <?php endwhile; wp_reset_query(); ?>


  <div class="container">
    <div class="row">
      <div class="twelve columns">
        <ul class="footer">
          <li><a href="#">Archive</a></li>
          <li><a href="#">Instagram</a></li>
          <li><a href="#">Twitter</a></li>
          <li><a href="#">Email</a></li>
        </ul>
        <p>Created by Kayra Alat</p>
      </div>
    </div>
  </div>  

  <?php wp_footer(); ?>

</body>
</html>
