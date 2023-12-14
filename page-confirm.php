<?php get_header() ?>

<?php if ( have_posts() ) : ?>
  	<?php while( have_posts() ) : the_post(); ?>

    <div class="" id="confirm">
        <div class="container">
            <div class="entryform_wrapper">
                <div class="post single_post">
                    <h2 class="sec_ttl roboto">
                        エントリーフォーム
                        <small>
                        確認
                        </small>
                    </h2>

                    <div class="post_wrap">
                                    
                        <div class="single_post_wrap">
                            <div class="single_post_content">
                                <?php the_content(); ?>
                            </div>
                        </div>
                    </div>
                    <!-- //post_wrap -->
                </div>
                <!-- //post -->
            </div>
        </div>
    </div>

<?php endwhile;?>
<?php endif; ?>
<?php include("template/recruit_btn.php"); ?>




<?php get_footer(); ?>