<?php get_header() ?>

<?php if ( have_posts() ) : ?>
  	<?php while( have_posts() ) : the_post(); ?>

    <div class="" id="confirm">
        <div class="container">
            <div class="entryform_wrapper">
                <div class="post single_post">
                    <h2 class="sec_ttl roboto">
                        エントリーありがとうございました！
                        <small>
                        </small>
                    </h2>

                    <div class="post_wrap">
                                    
                        <div class="single_post_wrap">
                            <div class="single_post_content">
                                <p class="thanks_text">担当よりご連絡いたしますので今しばらくお待ちください。</p>
                            </div>

                            <div class="news_switch flex">
                                <p>
                                    <a href="/"><span>TOP</span></a>
                                </p>
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