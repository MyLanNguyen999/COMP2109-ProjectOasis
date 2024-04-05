<?php
/**
 * Template Name: Inner Page
 * Template Post Type: page
 */
get_header();
?>

     <div>
        <section class="inner-tab overlay" style="background-image: url('<?php echo esc_url(wp_kses_post(get_field('tab_image'))); ?>');">
        <h1 class="overlay">
            <?php echo wp_kses_post(get_field('tab_title')); ?>
        </h1> 
      </div>
      <main>
    </section>
        <p>
            <?php echo wp_kses_post(get_field('tab_description')); ?>
        </p>

    <!-- <section class="masthead" style="background-image: url('<?php echo wp_kses_post(get_field('masthead_image')); ?>')">
      <div>
        <h1><?php echo wp_kses_post(get_field('main_heading')); ?></h1>
        <h2><?php echo wp_kses_post(get_field('sub-heading')); ?></h2>
      </div>
    </section> -->
    <!-- <section class="home-row-one row">
      <div class="col-sm-12 col-md-12 col-lg-12">
        <h3><?php echo wp_kses_post(get_field('row_one_title')); ?></h3>
        <p><?php echo wp_kses_post(get_field('row_one_text')); ?></p>
      </div>
    </section>
    <section class="home-row-two row">
      <div class="col-sm-12 col-md-8 col-lg-6">
        <h3><?php echo wp_kses_post(get_field('row_two_title')); ?></h3>
        <p><?php echo wp_kses_post(get_field('row_two_text')); ?></p>
      </div>
      <div class="col-sm-12 col-md-4 col-lg-6">
        <img src="<?php echo wp_kses_post(get_field('row_two_image')); ?>" alt="<?php echo wp_kses_post(get_field('row_two_image_alt_text')); ?>">
      </div>
    </section>
    <section class="home-row-three row">
      <?php echo wp_kses_post(get_field('row_three_content')); ?>
    </section> -->
</main>
<?php
get_footer();
?>