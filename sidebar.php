<div class="w3-col l4">
     

    <div class="w3-card w3-margin w3-hover-shadow">
        <div class="w3-container w3-padding">
            <h4>Last Posts</h4>
        </div>
        <ul class="w3-ul w3-hoverable w3-white">


            <?php
            $j = 0;
            $args = array(
                'post_type' => 'post',
                'orderby' => 'ID',
                'post_status' => 'publish',
                'order' => 'DESC',
                'posts_per_page' => -1 
            );
            $result = new WP_Query($args);
            if ($result->have_posts()) :
                while ($result->have_posts()) :
                    $result->the_post();

                    if ($i < 4) {
                    ?>
                    <li class="w3-padding-16">
                        <span class="w3-large"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></span><br>
                        <span><?php echo $j;?></span>
                    </li>

                    <li>
                    </li>


                    <?php
                }
                    $j += 1;
                endwhile; endif;
            wp_reset_query();
            ?>


        </ul>
    </div>
    <hr>

    <div class="w3-card w3-margin">
        <div class="w3-container w3-padding">
            <h4>Tags</h4>
        </div>
        <div class="w3-container w3-white">
            <p><span class="w3-tag w3-black w3-margin-bottom">Travel</span>

                <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">New York</span>


            </p>
        </div>
    </div>

    <!-- END Introduction Menu -->
</div>