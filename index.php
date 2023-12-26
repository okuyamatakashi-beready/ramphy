<?php get_header() ?>

<?php
    $page = get_page_by_path('top-cms');
    $id = $page->ID;
    $mv = get_field('mv', $id);
    $message_img = get_field('message_img', $id);
    $message_ttl = get_field('message_ttl', $id);
    $message_text = get_field('message_text', $id);
    $sp_mv = get_field('sp_mv', $id);
    $owner_img = get_field('owner_img', $id);
    $owner_name = get_field('owner_name', $id);
    $owner_text = get_field('owner_text', $id);
    $recruit_bg = get_field('recruit_bg', $id);
    $flow = get_field('flow', $id);
    $proud_img = get_field('proud_img', $id);
    $proud_img = get_field('proud_img', $id);
    $requirements = get_field('requirements', $id);
    $salon_area = get_field('salon_area', $id);
    $salon_info = get_field('salon_info', $id);
    $salon_img = get_field('salon_img', $id);
    $logo = get_field('logo', $id);
    $entry_img = get_field('entry_img', $id);
    $instagram = get_field('instagram', $id);
    $tel = get_field('tel', $id);
?>
<div id="mv">
    <div class="mv_slider pc">
        <?php if( have_rows('mv', $id) ): ?>
            <?php while( have_rows('mv', $id) ): the_row();
                $mv_img = get_sub_field('mv_img');
            ?>
            <?php if($mv_img): ?>
                <div class="mv_slide" style="background-image:url(<?php echo $mv_img;?>)"></div>
            <?php endif; ?>

            <?php endwhile;?>
        <?php endif; ?>
    </div>

    <div class="mv_slider sp">
        <?php if( have_rows('sp_mv', $id) ): ?>
            <?php while( have_rows('sp_mv', $id) ): the_row();
                $sp_img = get_sub_field('sp_img');
            ?>
            <?php if($sp_img): ?>
                <div class="mv_slide" style="background-image:url(<?php echo $sp_img;?>)"></div>
            <?php endif; ?>

            <?php endwhile;?>
        <?php endif; ?>
    </div>
    <img src="<?php echo get_template_directory_uri(); ?>/images/mv_catch_pc.svg" alt="" loading="lazy" class="mv_catch">
</div>

<div id="message">
    <!-- <div class="flt_alpha napo message_alpha">
        <img src="</?php echo get_template_directory_uri(); ?>/images/message_catch.svg" alt="" loading="lazy">
    </div> -->

    <div class="container message_wrapper">
        <div class="message_img flex">
            <!-- <figure class="m_left_img fadeUp duration1">
                <img src="</?php echo get_template_directory_uri(); ?>/images/message_left.jpg" alt="" loading="lazy">
            </figure> -->

            <figure class="m_right_img fadeUp duration2">
                <?php if($message_img): ?>
                    <img src="<?php echo $message_img;?>" alt="" loading="lazy">
                <?php endif; ?>
            </figure>
        </div>
        <!-- //message_img -->

        <div class="message_text_wrap flex">

            <div>
                <?php if($message_ttl): ?>
                    <strong>
                        <?php echo $message_ttl;?>
                    </strong>
                <?php endif; ?>

                <?php if($message_text): ?>
                    <p class="fadeUp duration1">
                        <?php echo $message_text;?>
                    </p>
                <?php endif; ?>
            </div>

            <!-- <figure class="fadeUp duration1">
                <img src="</?php echo get_template_directory_uri(); ?>/images/message_left02.jpg" alt="" loading="lazy">
            </figure> -->
        </div>
        <!-- //message_text_wrap -->
    </div>
    <!-- //container -->
</div>
<!-- //message -->

<!-- <section id="howto" class="bg">
    <div class="container">
        <h2 class="sec_ttl">
            PHILOSOPHY
            <small>
                THREEの大切にすること
            </small>
        </h2>
    </div>
    <div id="howto_work" class="howto_slider">
        <div class="howto_child">
            <span class="no">01.</span>
            <h4>
                人に興味を持ち、<br>
                人を好きになる。
            </h4>
            <img src="</?php echo get_template_directory_uri(); ?>/images/howto_icon01.svg" alt="">
        </div>

        <div class="howto_child">
            <span class="no">02.</span>
            <h4>
                ポジティブな<br>
                言葉に置き変える。
            </h4>
            <img src="</?php echo get_template_directory_uri(); ?>/images/howto_icon02.svg" alt="">
        </div>

        <div class="howto_child">
            <span class="no">03.</span> 
            <h4>
                人の良いところ<br>
                見つけて褒める。
            </h4>
            <img src="</?php echo get_template_directory_uri(); ?>/images/howto_icon03.svg" alt="">
        </div>

        <div class="howto_child">
            <span class="no">04.</span>
            <h4>
                「すみません」より<br>
                「ありがとう」を伝える。
            </h4>
            <img src="</?php echo get_template_directory_uri(); ?>/images/howto_icon04.svg" alt="">
        </div>
        <div class="howto_child">
            <span class="no">05.</span>
            <h4>
                笑顔・挨拶をしっかり、<br>
                目を見て話す。
            </h4>
            <img src="</?php echo get_template_directory_uri(); ?>/images/howto_icon05.svg" alt="">
        </div>
    </div>
    
</section> -->
<!-- //howto -->

<div class="mid_section">

    <section id="owner" class="container">
        <div class="owner_wrapper flex">
            <?php if($owner_img): ?>
                <div class="owner_img bg fadeUp duration1" style="background-image: url(<?php echo $owner_img;?>);"></div>
            <?php endif; ?>

            <div class="owner_info">
                <h2 class="sec_ttl fadeUp duration1">
                    OWNER MESSAGE
                    <small>
                    オーナーメッセージ
                    </small>
                </h2>
                <p class="fadeUp duration2">
                    <?php if($owner_name): ?>
                        <span class="owner_name"><?php echo $owner_name;?></span>
                    <?php endif; ?>

                    <?php if($owner_text): ?>
                        <?php echo $owner_text;?>
                    <?php endif; ?>

                </p>
            </div>
        </div>
        <!-- //owner_wrapper -->
    </section>
    <!-- //owner -->

    <section id="staff_interview">
        <div class="container">
            <h2 class="sec_ttl fadeUp duration1">
                STAFF INTERVIEW
                <small>
                スタッフインタビュー
                </small>
            </h2>

            <ul class="staff_list flex">
                <li class="fadeUp duration2">
                    <figure>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/staff_img01.jpg" alt="" class="pc">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/staff_img01_sp.jpg" alt="" class="sp">
                    </figure>
                    <div class="staff_text flex">
                        <div class="staff_name">
                            <h3>櫻井 莉子</h3>
                            <p>
                                <span>静岡県西部理容美容専門学校 出身<br></span>
                                <span>2022年入社</span>
                            </p>
                        </div>
                        <div class="interview_open staff_link flex">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/recruit/read_arrow.svg" alt=""><span>READ</span>
                        </div>
                    </div>
                </li>

                <li class="fadeUp duration3">
                    <figure>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/staff_img02.jpg" alt="" class="pc">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/staff_img02_sp.jpg" alt="" class="sp">
                    </figure>
                    <div class="staff_text flex">
                        <div class="staff_name">
                            <h3>山本梨乃</h3>
                            <p>
                                <span>中日美容専門学校 出身<br></span>
                                <span>2019年入社</span>
                            </p>
                        </div>
                        <div class="interview_open staff_link flex">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/recruit/read_arrow.svg" alt=""><span>READ</span>
                        </div>
                    </div>
                </li>
            </ul>
            <!-- //staff_list -->
        </div>

        <?php include('template/interview_modal.php'); ?>
    </section>
    <!-- //staff_interview -->

    <section id="crosstalk">
        <div class="container">
            <h2 class="sec_ttl fadeUp duration1">
                CLOSS TALK
                <small>
                クロストーク
                </small>
            </h2>

            <ul class="staff_list flex">
                <li class="fadeUp duration2">
                    <figure>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/crosstalk01.jpg" alt="" class="pc">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/crosstalk01_sp.jpg" alt="" class="sp">
                    </figure>
                    <div class="staff_text flex">
                        <div class="staff_name">
                            <h3>CLOSSTALK 01</h3>
                            <p>
                                <span>お客様にもこの“温かさ”は伝わっているはず</span>
                            </p>
                        </div>
                        <div class="modal_open staff_link crosstalk_open flex">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/recruit/read_arrow.svg" alt=""><span>MORE</span>
                        </div>
                    </div>
                </li>

                <li class="fadeUp duration3">
                    <figure>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/crosstalk02.jpg" alt="" class="pc">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/crosstalk02_sp.jpg" alt="" class="sp">
                    </figure>
                    <div class="staff_text flex">
                        <div class="staff_name">
                            <h3>CLOSSTALK 02</h3>
                            <p>
                                <span>気付いたらふたりで考えている、ramphyのこと</span>
                            </p>
                        </div>
                        <div class="modal_open staff_link crosstalk_open flex">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/recruit/read_arrow.svg" alt=""><span>MORE</span>
                        </div>
                    </div>
                </li>
            </ul>
            <!-- //staff_list -->
        </div>

        <?php include('template/crosstalk.php'); ?>
    </section>
    <!-- //staff_interview -->
</div>
<!-- //mid_section -->

<section id="flow">
    <?php if($recruit_bg): ?>
        <div class="line_img bg" style="background-image: url(<?php echo $recruit_bg;?>);">
            <img src="<?php echo get_template_directory_uri(); ?>/images/recruit/flow_text.svg" alt="">
        </div>
    <?php endif; ?>

    <div class="container flex">
        <h2 class="sec_ttl fadeUp duration1">
            FLOW
            <small>
            採用までの流れ
            </small>
        </h2>

        <div class="flow_wrapper">
            <?php if( have_rows('flow', $id) ): ?>
                <?php while( have_rows('flow', $id) ): the_row();
                    $flow_dt = get_sub_field('flow_dt');
                    $flow_dd = get_sub_field('flow_dd');
                ?>
                <dl class="fadeUp duration2">
                    <?php if($flow_dt): ?>
                        <dt><?php echo $flow_dt;?><img src="<?php echo get_template_directory_uri(); ?>/images/recruit/flow_arrow.svg" alt="" class="pc"><img src="<?php echo get_template_directory_uri(); ?>/images/recruit/flow_arrow_sp.svg" alt="" class="sp"></dt>
                    <?php endif; ?>
                    <?php if($flow_dd): ?>
                        <dd><?php echo $flow_dd;?></dd>
                    <?php endif; ?>
                </dl>

            <?php endwhile;?>
            <?php endif; ?>
        </div>
    </div>
    <!-- //container -->
</section>
<!-- //flow -->
<div class="mable">
    <div class="proud_wrap">
        <div class="container flex">
            <figure class="proud_01 fadeUp duration1">
                <img src="<?php echo $proud_img['left_top_img']; ?>" alt="">
            </figure>
            <figure class="proud_02 fadeUp duration2">
                <img src="<?php echo $proud_img['right_top_img']; ?>" alt="">
            </figure>
        </div>
        <!-- //container -->

        <div class="next_proud_wrap flex">
            <figure class="proud_03 fadeUp duration1">
                <img src="<?php echo $proud_img['left_down_img']; ?>" alt="">
            </figure>
            <figure class="proud_04 fadeUp duration2">
                <img src="<?php echo $proud_img['right_down_img']; ?>" alt="">
            </figure>
        </div>

        <img src="<?php echo get_template_directory_uri(); ?>/images/recruit/flt_proud.svg" alt="" class="flt_proud_img fadeUp duration1">
        <img src="<?php echo $proud_img['proud_sp_img']; ?>" alt="" class="sp_proud_img sp fadeUp duration1">
    </div>
    <!-- //proud_wrap -->

    <section id="requirements">
        <div class="container_min">
            <h2 class="sec_ttl">
                REQUIREMENTS
                <small>
                募集要項
                </small>
            </h2>

            <div class="require_info">
                <!-- <dl class="flex">
                    <dt>勤務地</dt>
                    <dd>四日市</dd>
                </dl> -->
                <?php if( have_rows('requirements', $id) ): ?>
                    <?php while( have_rows('requirements', $id) ): the_row();
                        $require_dt = get_sub_field('require_dt');
                        $require_dd = get_sub_field('require_dd');
                    ?>

                <dl class="flex">
                    <dt><?php echo $require_dt;?></dt>
                    <dd><?php echo $require_dd;?></dd>
                </dl>

                    <?php endwhile;?>
                <?php endif; ?>

                <?php if($salon_area): ?>

                    <dl class="flex">
                        <dt>勤務地</dt>
                        <dd>
                            <div>
                                <p><?php echo $salon_area['salon_name']; ?></p>
                                <span><?php echo $salon_area['salon_address']; ?></span>
                                <?php echo $salon_area['salon_map']; ?>
                            </div>

                        </dd>
                    </dl>
                <?php endif; ?>



            </div>
            <!-- //require_info -->
        </div>
        <!-- //container_min -->
    </section>
    <!-- //requirements -->

    <section id="salon">
        <div class="container">
            <h2 class="sec_ttl">
                SALON
                <small>
                サロン情報
                </small>
            </h2>

            <div class="salon_container flex">
                <figure>
                    <img src="<?php echo $salon_img;?>" alt="">
                </figure>

                <div class="salon_info">
                    <h3><?php bloginfo( 'name' ); ?></h3>
                    <?php if( have_rows('salon_info', $id) ): ?>
                        <?php while( have_rows('salon_info', $id) ): the_row();
                            $salon_dt = get_sub_field('salon_dt');
                            $salon_dd = get_sub_field('salon_dd');
                        ?>
                        <dl class="flex">
                            <dt><?php echo $salon_dt;?></dt>
                            <dd>
                                <?php echo $salon_dd;?>
                            </dd>
                        </dl>

                        <?php endwhile;?>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </section>

    <section id="entry_dm">
        <div class="container">
            <div class="flex">
                <div class="entry_img" style="background-image:url(<?php echo $entry_img;?>)"></div>
                <div class="entry_content">
                    <h2 class="sec_ttl">
                        ENTRY
                        <small>
                        エントリー
                        </small>
                    </h2>

                    <a href="<?php echo $instagram['insta_link']; ?>" target="_blank" class="entry_btn">
                        <div class="flex">ご応募はDMから<img src="<?php echo get_template_directory_uri(); ?>/images/arrow.svg" alt=""></div>
                    </a>
                    <a href="<?php echo $instagram['insta_link']; ?>" target="_blank" class="entry_insta flex">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/insta_icon.svg" alt="">
                        <span><?php echo $instagram['insta_account']; ?></span>
                    </a>
                </div>
            </div>
        </div>
    </section>




    <section id="contact">
        <div class="container">
            <h2 class="sec_ttl roboto">
                CONTACT
                <small>
                お問い合わせ
                </small>
            </h2>

            <p class="contact_text">
                お電話もインスタからもお気軽にお問合せください。
            </p>

            <ul class="flex contact_bnt_wrap">
                <li>
                    <a href="tel:<?php echo $logo;?>" class="common_btn" target="_blank">
                        <span>+</span>
                        TEL
                    </a>
                </li>
                <li>
                    <a href="<?php echo $instagram['insta_link']; ?>" class="common_btn" target="_blank">
                        <span>+</span>
                        INSTAGRAM
                    </a>
                </li>
            </ul>
        </div>
    </section>
</div>
<!-- //mable -->


<?php get_footer(); ?>
