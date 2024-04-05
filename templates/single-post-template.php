<?php
/*
Template Name: Single Post Template
Template Post Type: Post
*/
get_header();
$backgroundImg = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
?>

<section class="post-tab" style="background: url('<?php echo $backgroundImg[0]; ?>');">
    <div>
        <h1> <?php the_title(); ?> </h1>
    </div>
</section>
<main>
<section class="row">
  <div class="post-content">
    <p><?php echo get_the_content(); ?></p>
    <p>Date: <?php echo get_the_date(); ?></p>
    <p><?php the_tags(); ?></p>
    <p><?php echo the_category(',', '', get_the_ID()) ?></p>
  </div>
  <h2 class="post-heading"> View More Posts </h2>
  <div class="post-list ">
    <?php
      //* Define our WP Query Parameters
      $the_query = new WP_Query( 'posts_per_page=6' );
      //* Start our WP Query
      while ($the_query -> have_posts()) : $the_query -> the_post();
    ?>
    <article>
        <a href="<?php the_permalink() ?>">
            <?php
                //* Retrieve the background image for the posts
                $post_backgroundImg = wp_get_attachment_image_url(get_post_thumbnail_id(), 'full');
              ?>
            <img src="<?php echo $post_backgroundImg; ?>" alt="post image">
        </a>
        <a href="<?php the_permalink() ?>" class="post-title">
            <h3><?php the_title(); ?></h3>
        </a>
        
        <?php the_excerpt(__('(more…)')); ?>
        
    </article>
      <?php
        endwhile;
        wp_reset_postdata();
      ?>
  </div>
</section>
    </main>
<?php get_footer(); ?>