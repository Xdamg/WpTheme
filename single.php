<?php get_header() ;?>

<div class="w3-col l8 s12">


        <div class="w3-card-4 w3-margin w3--light-grey">

            <?php if (has_post_thumbnail($post->ID)): ?>
            <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail'); ?>

            <img src="<?php echo $image[0]; ?>" alt="Nature" style="width:100%">

        </div>
        <?php endif; ?>


        <div class="w3-container">
            <h3><b><?php the_title(); ?></b></h3>
           
        </div>

        <div class="w3-container">


           <p> <?php echo get_post_field('post_content', the_ID()); ?></p>
           
        </div>
    </div>
    <hr>
<div>

<?php comments_template(); ?>


    </div>
    



<?php get_footer() ;?> 