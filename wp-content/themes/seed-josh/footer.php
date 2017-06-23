<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wp_seed_theme_Theme
 */

?>

</div><!-- #content -->

<footer id="colophon" class="site-footer" role="contentinfo">
    <div class="container">
        <div class="social-media">
            <ul>
                <?php
                /// vars
                $facebook_link = get_field('facebook_link', 'option');
                $linkedin_link = get_field('linkedin_link', 'option');
                $twitter_link = get_field('twitter_link', 'option');
                $instagram_link = get_field('instagram_link', 'option');

                $signature_text = get_field('signature_text', 'option');
                $signature_link = get_field('signature_link', 'option');

                $footer_image = get_field('footer_image', 'option');
                $footer_image_link = get_field('footer_image_link', 'option');
                ?>
                <?php echo $facebook_link ? "<li class='fa'>
                                                        <a href='$facebook_link'>
                                                            <span class='fa-facebook'>
                                                            </span>
                                                        </a>
                                                      </li>" : ""; ?>
                <?php echo $linkedin_link ? "<li class='fa'>
                                                        <a href='$linkedin_link'>
                                                            <span class='fa-linkedin'>
                                                            </span>
                                                        </a>
                                                      </li>" : ""; ?>
                <?php echo $twitter_link ? "<li class='fa'>
                                                        <a href='$twitter_link'>
                                                            <span class='fa-twitter'>
                                                            </span>
                                                        </a>
                                                      </li>" : ""; ?>
                <?php echo $instagram_link ? "<li class='fa'>
                                                        <a href='$instagram_link'>
                                                            <span class='fa-instagram'>
                                                            </span>
                                                        </a>
                                                      </li>" : ""; ?>
            </ul>
        </div>
    </div>
    <div class="site-info">
        <div class="container">
            <p class="alignleft"><?php echo date('Y') ?> <?php bloginfo( 'name' ); ?> . All Rights Reserved</p>
            <p class="alignright">
                <a href="<?= $signature_link; ?>" target="_blank">
                    <?= $signature_text; ?>
                </a>
                <a href="<?= $footer_image_link; ?>" target="_blank">
                    <img src="<?= $footer_image; ?>" alt="Developed by Josh Porter">
                </a>
            </p>
        </div>
    </div>
</footer><!-- #colophon -->
</div><!-- #page -->
<script src="//code.jquery.com/jquery-1.11.1.js"></script>

<?php wp_footer(); ?>

</body>
</html>
