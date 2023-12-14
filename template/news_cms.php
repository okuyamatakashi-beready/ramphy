<section id="news">
		
    <div class="container">
        <h2 class="sec_ttl roboto">
            NEWS&BLOG
            <small>
                ニュース＆ブログ
            </small>
        </h2>

        <div class="news_list flex">

            <?php
				$paged = get_query_var('paged') ? get_query_var('paged') : 1 ;
				$args = array(
					'posts_per_page' => '5', //表示件数。-1なら全件表示
					'post_status' => 'publish', //取得するステータス。publishなら一般公開のもののみ
					'paged' => $paged,
					'post_type' => 'post',
				);
				?>
				<?php $my_query = new WP_Query( $args ); ?><!-- クエリの指定 -->

					<?php if ( $my_query->have_posts() ) :

						while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
            <div class="news_list_child">
                
                <div class="news_thumb">
                    <a href="<?php the_permalink() ;?>"><div class="bg" style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>)"></div></a>
                </div>
                <div class="day flex">
                    <span class="news_day"><?php the_time("Y.m.d"); ?></span>
                    <a href="" class="cat"><?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->cat_name; } ?></a>
                </div>

                <h3 class="news_ttl"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h3>
            </div>

            <?php endwhile; ?>
				
			<?php endif; ?>
			<?php wp_reset_postdata(); ?>	


        </div>

        <div class="news_switch flex">
            <span class="prev sp"></span>
            <p>
                <a href="/blog"><span>ARCHIVE</span></a>
            </p>
            <span class="next sp"></span>
        </div>
    </div>
    <!-- //contaienr -->

    <span class="flt_alpha napo">N</span>
</section>
<!-- //news -->