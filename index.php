<?php get_header(); ?>
<!-- container -->
<div class="container">
    <!-- first view -->
    <ul class="slider">
        <li><a href=""><img src="<?php bloginfo('template_url'); ?>/images/tp_visual_01.png" alt=""/></a></li>
        <li><a href=""><img src="<?php bloginfo('template_url'); ?>/images/tp_visual_02.png" alt=""/></a></li>
        <li><a href=""><img src="<?php bloginfo('template_url'); ?>/images/tp_visual_03.png" alt=""/></a></li>
        <li><a href=""><img src="<?php bloginfo('template_url'); ?>/images/tp_visual_04.png" alt=""/></a></li>
    </ul>
    <!-- first view -->
    <hr class="sectioner">
    <!-- main -->
    <div class="main clearfix">
        <!--main_column-->
        <div class="main_column">
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
            <section class="news_container">
                <h2 class="heading_point h_main">ニュース<span class="sub_heading">news</span></h2>
                <div class="news_detail">
                    <?php
                      query_posts(array(
                        'post_type' => 'post',
                        'paged' => get_query_var('paged'),
                        'posts_per_page' => 5)
                      );
                      if (have_posts()) :
                        while (have_posts()) :
                            the_post();
                            get_template_part('content-archive');
                        endwhile;
                      endif;
                      wp_reset_query();
                    ?>
                    <p class="read_more"><a href="<?php echo get_permalink(get_page_by_path('company/news')); ?>">ニュース一覧を見る</a></p>
                </div>
            </section>
        <?php get_template_part('page_document_download');?>
        <?php get_template_part('page_get_contact'); ?>
        </div>
        <!--main_column-->
    <?php get_sidebar(); ?>
    </div>
    <!-- main -->
</div>
<!-- container -->
<?php get_footer(); ?>