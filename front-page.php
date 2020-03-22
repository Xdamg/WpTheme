<?php get_header() ;?>

<div class="container">
<h1><?php the_title() ; ?></h1>

<!-- Hide right-floated links on small screens and replace them with a menu icon -->

<a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>

<!-- Sidebar on small screens when clicking the menu icon -->
<nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>
  <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button">ABOUT</a>
  <a href="#team" onclick="w3_close()" class="w3-bar-item w3-button">TEAM</a>
  <a href="#work" onclick="w3_close()" class="w3-bar-item w3-button">WORK</a>
  <a href="#pricing" onclick="w3_close()" class="w3-bar-item w3-button">PRICING</a>
  <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button">CONTACT</a>
</nav>

<!-- Header with full-height image -->
<header class="bgimg-1 w3-display-container w3-grayscale-min" id="home">
  <div class="w3-display-left w3-text-white" style="padding:48px">
    <span class="w3-jumbo w3-hide-small"></span><br>
    <span class="w3-xxlarge w3-hide-large w3-hide-medium">Start something that matters</span><br>
    <span class="hey">École Supérieur De Technologie Sidi Bennour</span>
    <p><a href="#about" class="w3-button w3-white w3-padding-large w3-large w3-margin-top w3-opacity w3-hover-opacity-off">Learn more and start today</a></p>
  </div> 
  <div class="w3-display-bottomleft w3-te xt-grey w3-large" style="padding:24px 48px">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div>
</header>

<!-- About Section -->
<div class="w3-container" style="padding:128px 16px" id="about">
  <h3 class="w3-center">ABOUT THE COMPANY</h3>
  


<div class="w3-col l8 s12">


    <?php
    $args = array(
        'post_type' => 'post',
        'orderby' => 'ID',
        'post_status' => 'publish',
        'order' => 'DESC',
        'posts_per_page' => -1 
    );
    $result = new WP_Query($args);
    if ($result->have_posts()) : ?>
    <?php while ($result->have_posts()) :
    $result->the_post(); ?>


    <div class="w3-card-4 w3-margin w3-white">

        <?php if (has_post_thumbnail($post->ID)): ?>
        <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail'); ?>

        <img src="<?php echo $image[0]; ?>" alt="Nature" style="width:100%">

    </div>
<?php endif; ?>


    <div class="w3-container">
        <h3><b><?php the_title(); ?></b></h3>
        <?php $postcat = get_the_category($post->ID);


        ?>
        <h5>Written by <span class="opacity"><?php echo get_the_author() ?> </span> at <span
                    class="opacity"><?php echo get_the_date('Y-m-d'); ?> , <?php the_time('H:i:s'); ?></span>
            in <?php if (!empty($postcat)) {
                echo esc_html($postcat[0]->name);
            } ?></h5>
    </div>

    <div class="w3-container">
        <?php the_excerpt(); ?>
        <div class="w3-row">
            <div class="w3-col m8 s12">
                <p>
                    <a href="<?php the_permalink(); ?>" class="w3-button w3-padding-large w3-blue  w3-round-xxlarge"><b>READ MORE »</b>
                    </a>
                </p>
            </div>
            <div class="w3-col m4 hide-small">
                <p><span class="padding-large w3-right"><b>Comments &nbsp;</b> <span
                                class="w3-tag"><?php echo get_comments_number(); ?></span></span></p>
            </div>
        </div>
    </div>
</div>
<hr>


<?php endwhile; ?>
<?php endif;
wp_reset_postdata(); ?>


</div>


<?php get_sidebar(); ?>
<span> .  </span>

<?php get_footer() ;?>