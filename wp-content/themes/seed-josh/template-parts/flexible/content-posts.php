<?php
/**
 * Created by PhpStorm.
 * User: Josh
 * Date: 4/5/2017
 * Time: 10:56 AM
 */


//vars
$title = get_sub_field('title');
$subtitle = get_sub_field('subtitle');
?>

<div id="latest" class="section">
    <div class="container">
        <div class="latest-wrapper <?= $narrow_shelf ? "col-max-section" : ""; ?>">
            <div class="underline blog-post-header">
                <?= $title ? "<h2>$title</h2>" : ""; ?>
                <?= $subtitle ? "<h3>$subtitle</h3>" : ""; ?>
            </div>

            <?php
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $args = array(
                'post_type' => 'post',
                'post_status' => array('publish'),
                'orderby' => 'date',
                'post_per_page' => -1,
                'order' => 'desc',
                'paged' => $paged,
            );

            // The Query
            $wp_query = new WP_Query($args);
            if ($wp_query->have_posts()) :
                $count = $wp_query->post_count;
                while ($wp_query->have_posts()) : $wp_query->the_post();
                    $thumbnail = get_the_post_thumbnail_url();
                    $date = get_the_date();
                    $author = get_the_author_posts_link();

                    ?>
                    <div class="post-looped">
                        <?php if ($thumbnail): ?>
                            <div class="featured-image" style="background-image: url('<?= $thumbnail; ?>')"></div>
                        <?php endif; ?>
                        <div class="post-content">
                            <div class="post-meta">
                                <?php if ($date): ?>
                                    <span class="post-date"><?= $date; ?></span>
                                <?php endif; ?>
                                <?php if ($author): ?>
                                    <span class="post-author"><?= $author; ?></span>
                                <?php endif; ?>
                            </div>
                            <h3 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <?php the_excerpt(); ?>
                        </div>
                    </div>
                    <?php

                endwhile;
            endif;

            wp_pagenavi();
            wp_reset_query(); ?>
            <a id="view-more" class="text-link" href="#">View More <i class="icon-Chevron"></i></a>
        </div>
    </div>
</div>


