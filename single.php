<?php get_header() ?>

<?php if ( have_posts() ) : ?>
  	<?php while( have_posts() ) : the_post(); ?>

    <div class="post single_post">
        <h2 class="sec_ttl roboto">
            NEWS&BLOG
            <small>
            ニュース＆ブログ
            </small>
        </h2>

        <div class="post_wrap">
                        
            <div class="single_post_wrap">
                <div class="post_thumb bg" style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>)"></div>

                <div class="single_post_info">
                    <span class="single_cat"><?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->cat_name; } ?></span>
                    <h3><?php the_title(); ?></h3>
                    <span class="single_day"><?php the_time("Y.m.d"); ?></span>
                </div>

                <div class="single_post_content">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
        <!-- //post_wrap -->

        <div class="news_switch flex">
            <span class="prev"></span>
            <p>
                <a href="/blog"><span>ARCHIVE</span></a>
            </p>
            <span class="next"></span>
        </div>
    </div>
    <!-- //post -->

<?php endwhile;?>
<?php endif; ?>
<?php include("template/recruit_btn.php"); ?>




<?php get_footer(); ?>