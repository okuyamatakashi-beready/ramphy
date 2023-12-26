<!DOCTYPE html>
	<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
		
		<title>ramphy</title>


		<!-- CSS -->
		<link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet" type="text/css">
		<link href="<?php echo get_template_directory_uri(); ?>/css/slick-theme.css?<?php echo date('Ymd-Hi'); ?>" rel="stylesheet" type="text/css">
		<link href="<?php echo get_template_directory_uri(); ?>/css/slick.css?<?php echo date('Ymd-Hi'); ?>" rel="stylesheet" type="text/css">
		<link href="<?php echo get_template_directory_uri(); ?>/scss/main.css" rel="stylesheet" type="text/css">

		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/common/favicon.ico" id="favicon">
		<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon-180x180.png">
		<script	src="https://cdn.jsdelivr.net/npm/viewport-extra@2.0.1/dist/iife/viewport-extra.min.js"	defer></script>
		<script>
			document.addEventListener('DOMContentLoaded', function() {
				var ua = navigator.userAgent
				var isSmartPhone = ua.indexOf('iPhone') > -1 ||
					(ua.indexOf('Android') > -1 && ua.indexOf('Mobile') > -1)
				var isTablet = !isSmartPhone && (
					ua.indexOf('iPad') > -1 ||
					(ua.indexOf('Macintosh') > -1 && 'ontouchend' in document) ||
					ua.indexOf('Android') > -1
				)
				if (isTablet) ViewportExtra.setContent({ minWidth: 1200 })
			})
		</script>

		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@600&family=Roboto:wght@500&display=swap" rel="stylesheet">

		<?php wp_head(); ?>

		<!-- Google tag (gtag.js) -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-255931812-1"></script>
		<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-255931812-1');
		</script>

	</head>
	<!-- <script src="<?php echo get_template_directory_uri(); ?>/js/locomotive-scroll.min.js"></script> -->
<body data-scroll-container >
<?php
    $page = get_page_by_path('top-cms');
    $id = $page->ID;
    $logo = get_field('logo', $id);
	$instagram = get_field('instagram', $id);
?>
	<div id="toggle">
		<div>
			<span></span>
			<span></span>
		</div>
	</div>
	<header id="header">
		<div class="header_wrapper">

			<div class="header_content flex">

				
				<div class="header_right bg"></div>

				<div class="header_left flex">
                    <div class="mv_logo">

                        <div>
							<?php if($logo): ?>
                            	<a href="/" class="logo"><?php echo $logo;?></a>
							<?php endif; ?>

                            <ul class="reserve_link flex">
                                <li>
                                    <a href="" class="flex roboto">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/common/arrow.svg" alt="">
                                        <span>RESERVE</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="" class="flex roboto">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/common/arrow.svg" alt="">
                                        <span>RECRUIT</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
					<!-- //header_logo_wrap -->

					<div class="header_nav">
						<ul class="gnav">
							<li>
								<a href="#message">
									MESSAGE<span>/ メッセージ</span>
								</a>
							</li>

							<li>
								<a href="#owner">
								GREETING<span>/ 代表挨拶</span>
								</a>
							</li>

							<li>
								<a href="#staff_interview">
								INTERVIEW<span>/ スタッフインタビュー</span>
								</a>
							</li>

							<li>
								<a href="#flow">
								FLOW<span>/ 採用フロー</span>
								</a>
							</li>

							<li>
								<a href="#requirements">
								RECRUIT<span>/ 募集要項</span>
								</a>
							</li>

							<li>
								<a href="#salon">
								BRANDS<span>/ 店舗一覧</span>
								</a>
							</li>

							<li>
								<a href="#entry_dm">
								ENTRY<span>/ エントリー</span>
								</a>
							</li>
						</ul>
						<div class="h_insta_link">
							<p>- FOLLOW ME</p>
							<a href="<?php echo $instagram['insta_link']; ?>" class="header_insta" targetr="_blank">
								<div class="flex">
									<img src="<?php echo get_template_directory_uri(); ?>/images/insta_icon_white.svg" alt="instagram"><span><?php echo $instagram['insta_account']; ?></span>
								</div>
							</a>
						</div>

					</div>
					<!-- //header_nav -->
				</div>
				<!-- //header_left -->
			</div>
		</div>
		<!-- //header_wrapper -->
	</header>
	<!-- /header -->

    <div class="mv_logo">

        <div>
			<?php if($logo): ?>
            	<a href="/" class="logo"><?php echo $logo;?></a>
			<?php endif; ?>
            <!-- <ul class="reserve_link flex">
                <li>
                    <a href="https://beauty.hotpepper.jp/slnH000473798/" class="flex roboto" target="_blank">
                        <img src="</?php echo get_template_directory_uri(); ?>/images/common/arrow.svg" alt="">
                        <span>RESERVE</span>
                    </a>
                </li>
                <li>
                    <a href="/recruit" class="flex roboto">
                        <img src="</?php echo get_template_directory_uri(); ?>/images/common/arrow.svg" alt="">
                        <span>RECRUIT</span>
                    </a>
                </li>
            </ul> -->
        </div>
    </div>

   