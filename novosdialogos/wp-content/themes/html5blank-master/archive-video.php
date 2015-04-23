<ul class="video-item">
    <?php
        $args = array( 'post_type' => 'video', 'posts_per_page' => 10);
        $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post(); ?>
                <li>
                    <?php
                    $videoid = get_post_meta($post->ID, "_id_video", single);
					echo '<img alt="teste" width="200" height="200" src="http://i2.ytimg.com/vi/';
					echo $videoid;
					echo "/default.jpg";
					echo '">';
                    ?>
                    <a href="<?php the_permalink(); ?>" title="<?php the_title() ?>"><h3 class="title-video"><?php the_title() ?></h3></a>
                </li>
            <?php endwhile; ?>
    </ul>
    
