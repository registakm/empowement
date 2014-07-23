<?php get_header(); ?>
<!-- container -->
<div class="container">
    <!-- first view -->
    <ul class="slider">
        <li><a href=""><img src="<?php bloginfo('template_url'); ?>/images/fw_00.png" alt=""/></a></li>
        <li><a href=""><img src="<?php bloginfo('template_url'); ?>/images/fw_01.png" alt=""/></a></li>
        <li><a href=""><img src="<?php bloginfo('template_url'); ?>/images/fw_02.png" alt=""/></a></li>
        <li><a href=""><img src="<?php bloginfo('template_url'); ?>/images/fw_03.png" alt=""/></a></li>
    </ul>
    <!-- first view -->
    <hr class="sectioner">
    <!-- main -->
    <div class="main clearfix">
        <!--main_column-->
        <div class="main_column">
            <section class="news_container">
                <h2 class="heading_point h_main">ニュース<span class="sub_heading">news</span></h2>
                <div class="news_detail">
                    <div>
                        <dl>
                            <dt class="daily">2014年06月25日</dt>
                            <dd><a href=""></a>エンパワーメント株式会社Webサイトをオープンしました。</dd>
                        </dl>
                    </div>
                    <div>
                        <dl>
                            <dt class="daily">2014年06月25日</dt>
                            <dd><a href=""></a>エンパワーメント株式会社Webサイトをオープンしました。</dd>
                        </dl>
                    </div>
                    <div>
                        <dl>
                            <dt class="daily">2014年06月25日</dt>
                            <dd><a href=""></a>エンパワーメント株式会社Webサイトをオープンしました。</dd>
                        </dl>
                    </div>
                    <p class="read_more"><a href="">ニュース一覧を見る</a></p>
                </div>
            </section>
            <section class="works_container">
                <ul class="caption_area clearfix">
                    <li class="caption_box">
                        <img src="<?php bloginfo('template_url'); ?>/images/col_feature.png">
                        <div class="caption">
                            <p>当社エンパワーメントの３つの特徴をご紹介します</p>
                        </div>
                    </li>
                    <li class="caption_box">
                        <img src="<?php bloginfo('template_url'); ?>/images/col_howto.png">
                        <div class="caption">
                            <p>当社エンパワーメントの使い方をご紹介します</p>
                        </div>
                    </li>
                    <li class="caption_box">
                        <img src="<?php bloginfo('template_url'); ?>/images/col_service.png">
                        <div class="caption">
                             <p>当社エンパワーメントの分析サービス一覧です</p>
                        </div>
                    </li>
                </ul>
            </section>
            <section class="conversion_container clearfix">
                <h3 class="conversion_head t_hide">お問い合わせはこちら。</h3>
                <div class="conversion_detail">
                    <p>ご質問やご相談、お見積り依頼まで承ります。</p>
                    <p>どうぞお気軽にお問い合わせください。</p>
                </div>
                <div class="btn">
                    <button class="btn_area"><a href="" ></a>お問い合わせ</button>
                </div>
            </section>
        </div>
        <!--main_column-->
    <?php get_sidebar(); ?>
    </div>
    <!-- main -->
</div>
<!-- container -->
<?php get_footer(); ?>