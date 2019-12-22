<?php
/**
 * The template for displaying the footer.
 */
?>
</div><!--#page-->

<?php
$twitter_username = get_field('twitter_username');
$facebook_username = get_field('facebook_username');
$google_plus_username = get_field('google_plus_username');
$youtube_username = get_field('youtube_username');
$linkedin_username = get_field('linkedin_username');
$github_username = get_field('github_username');

$sticky_twitter_username = get_field('sticky_twitter_username');
$sticky_facebook_username = get_field('sticky_facebook_username');
$sticky_google_plus_username = get_field('sticky_google_plus_username');
$sticky_youtube_username = get_field('sticky_youtube_username');
$sticky_linkedin_username = get_field('sticky_linkedin_username');
$sticky_github_username = get_field('sticky_github_username');
?>
<!-- FOOTER
================================================== -->

<footer>
    <div class="footer_container row justify-content-between align-items-center h-100 w-100">
        <div class="col-sm-4">
            <div class="footer_address_container">
                <div class="footer_address">
                    <p>20 RUE SAINT PéTERSBOURG<br>
                        75008 PARIS</p>
                    <p>TéL : 01 84 79 97 36</p>
                </div>
            </div>
        </div><!-- end col -->
        <div class="col-sm-4">
            <div class="social_icons text-center">
                <h2>Nous suivre:</h2>
                <?php if (!empty($twitter_username)): ?>
                    <a href="https://twitter.com/<?php echo $twitter_username; ?>" target="_blank"
                       class="badge social twitter"><i class="fa fa-twitter"></i></a>
                <?php endif; ?>

                <?php if (!empty($facebook_username)): ?>
                    <a href="https://facebook.com/<?php echo $facebook_username; ?>" target="_blank"
                       class="badge social facebook"><i class="fa fa-facebook"></i></a>
                <?php endif; ?>

                <?php if (!empty($google_plus_username)): ?>
                    <a href="https://plus.google.com/<?php echo $google_plus_username; ?>" target="_blank"
                       class="badge social gplus"><i class="fa fa-google-plus"></i></a>
                <?php endif; ?>

                <?php if (!empty($youtube_username)): ?>
                    <a href="https://youtube.com/channel/<?php echo $youtube_username; ?>" target="_blank"
                       class="social-icon youtube"><i class="fab fa-youtube"></i></a>
                <?php endif; ?>
                <?php if (!empty($linkedin_username)): ?>
                    <a href="https://www.linkedin.com/company/<?php echo $linkedin_username; ?>" target="_blank"
                       class="social-icon linkedin"><i class="fab fa-linkedin"></i></a>
                <?php endif; ?>
            </div>
        </div><!-- end col -->
        <div class="col-sm-4 align-self-end">
            <p class="text-right pr-4"><span class="pr-3">Mentions légales</span>
                © 2019 </p>
        </div><!-- end col -->
    </div>
    <a class="footer_logo_column1" href="">
        <?php
        if (function_exists('the_custom_logo')) {
            the_custom_logo();
        }
        ?>
    </a>
</footer>

<!-- The social media icon bar -->
<div class="icon-bar">
    <?php if (!empty($sticky_github_username)): ?>
        <a href="https://www.github.com/<?php echo $sticky_github_username; ?>" target="_blank"
           class="social-icon github"><i class="fab fa-github"></i></a>
    <?php endif; ?>
    <?php if (!empty($sticky_youtube_username)): ?>
        <a href="https://youtube.com/channel/<?php echo $sticky_youtube_username; ?>" target="_blank"
           class="social-icon youtube"><i class="fab fa-youtube"></i></a>
    <?php endif; ?>
    <?php if (!empty($sticky_linkedin_username)): ?>
        <a href="https://www.linkedin.com/company/<?php echo $sticky_linkedin_username; ?>" target="_blank"
           class="social-icon linkedin"><i class="fab fa-linkedin"></i></a>
    <?php endif; ?>
</div>

<?php wp_footer(); ?>
</body>
</html>