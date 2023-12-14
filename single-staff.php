<?php get_header() ?>

<?php if ( have_posts() ) : ?>
  	<?php while( have_posts() ) : the_post(); ?>

      <?php 
        $img_detail = get_field('img_detail');
        $copy = get_field('copy');
        $join = get_field('join');
        $job = get_field('job');
        $namae = get_field('namae');
        $from = get_field('from');
        $instagram = get_field('instagram');
        ?>

    <div class="post">
        <h2 class="sec_ttl roboto">
            STAFF INTERVIEW
            <small>
                スタッフインタビュー
            </small>
        </h2>

        <div class="post_wrap">
            <div class="post_info flex">
                <?php if($img_detail): ?>
                    <div class="staff_detail_img bg" style="background-image:url(<?php echo $img_detail;?>);"></div>
                <?php endif; ?>

                <div class="staff_info">
                    <?php if($copy): ?>
                        <p class="copy"><?php echo $copy;?></p>
                    <?php endif; ?>
                    
                    <?php if($join): ?>
                        <span class="join"><?php echo $join;?>年入社</span>
                    <?php endif; ?>

                    <dl>
                        <dt>
                            
                            <?php if($namae): ?>
                                <span class="namae"><?php echo $namae;?></span>
                            <?php endif; ?>
                        </dt>
                        <dd>
                            <?php if($from):?>
                                <span class="from"><?php echo $from;?>出身</span>
                            <?php endif; ?>
                        </dd>
                    </dl>
                </div>
                <!-- //staff_info -->
            </div>
            <!-- //post_info flex-->
            
            
            <div class="qa">
                <?php if( have_rows('qa') ): ?>
                <?php while( have_rows('qa') ): the_row();
                    $question = get_sub_field('question');
                    $answer = get_sub_field('answer');
                ?>
                    <dl>
                        <?php if($question): ?>
                            <dt><?php echo $question;?></dt>
                        <?php endif; ?>
                        <?php if($answer): ?>
                            <dd><?php echo $answer;?></dd>
                        <?php endif; ?>
                    </dl>
                <?php endwhile;?>
                <?php endif; ?>
            </div>
        </div>
        <!-- //post_wrap -->

        
        <?php the_posts_navigation(); ?>
        <div class="news_switch flex">
            <span class="prev"><?php previous_post_link('%link', ''); ?></span>
            <p>
            <a href="#" onclick="history.back(); return false;"><span>PAGE BACK</span></a>
            </p>
            <span class="next"><?php next_post_link('%link', ''); ?></span>
        </div>
    </div>
    <!-- //post -->

    <?php endwhile;?>
    <?php endif; ?>


<?php include("template/recruit_btn.php"); ?>




<?php get_footer(); ?>