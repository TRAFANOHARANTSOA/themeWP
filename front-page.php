<?php get_header() ?>
<?php get_template_part( 'parts/newsletter' ); ?>

<?php get_template_directory() . 'image/interstellar_0.jpg' ?>
<?php
$my_query = new WP_Query('cat=4&showposts=1');
while ($my_query->have_posts()) : $my_query->the_post();
$do_not_duplicate = $post->ID;
?>


<div class="container-fluid pl-0 pr-0 aboutusimg">
<img src="<?php the_post_thumbnail_url() ?>" alt="" class="img-fluid">
<div class="container text-light text-center aboutuscontainer">
  <h1 class=""> <?php the_title() ?></h1>
  <hr class="rupture">
  <p class=""> <?php the_content() ?></p>
  <button type="button" class="btn btn-primary mt-5">See all posts</button>
</div>
</div>

<?php endwhile; ?>



<?php
$my_query = new WP_Query('cat=4&showposts=1');
while ($my_query->have_posts()) : $my_query->the_post();
$do_not_duplicate = $post->ID;
?>


<div class="container-fluid pl-0 pr-0 testimonialcontainerbg">
<div class="container text-primary text-center testimonialspostscontainer">
  <h1 class=""> <?php the_title() ?></h1>
  <hr class="rupture">
  <p class=""> <?php the_content() ?></p>
  <button type="button" class="btn btn-primary mt-5">See all posts</button>
</div>
</div>

<?php endwhile; ?>




<?php dynamic_sidebar( 'searchbar' ); ?>

<?php get_footer() ?>
