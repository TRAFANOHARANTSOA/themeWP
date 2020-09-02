<?php get_header() ?>
<h1>PAGE</h1>


<?php
$my_query = new WP_Query('cat=4&showposts=1');
while ($my_query->have_posts()) : $my_query->the_post();
$do_not_duplicate = $post->ID;
?>


<!--<div class="">
<img src="<?php /*the_post_thumbnail_url()*/ ?>" alt="">
</div>-->

<div class="container text-light text-center aboutuscontainer">
  <h1 class=""> <?php the_title() ?></h1>
  <hr class="rupture">
  <p class=""> <?php the_content() ?></p>
</div>
>
<?php endwhile; ?>
<?php get_footer() ?>
