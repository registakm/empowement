<?php get_header(); ?>
<!-- container -->
<div class="container">
    <!-- first view -->
    <?php 
        $page = get_post( get_the_ID() );
        $post_name = $page -> post_name;
    ?>
    <div class="first_view">
        <div class="service_bg">
        <h3 class="t_hide"><?php the_title(); ?><span>Service</span></h3>
        </div>
    </div>
    <!-- first view -->
    <!-- main -->
    <div class="main clearfix">
        <!--main_column-->
        <div class="main_column">
            <section class="service_container">
                <h2 class="heading_point h_main"><?php single_post_title(); ?>
                <span class="sub_heading"><?php echo $post_name ?></span></h2>
                <div class="service_detail_1">
                    <h3 class="service_head t_hide">低価格で、高精度の分析を実現</h3>
                    <div class="sentence_box">
                        <p>近年、環境問題への関心が高まっている中、ビジネスを行う上で環境保護は各社重要課題の一つとなっております。</p>
                        <p>例えば、ELV指令（使用済み自動車から発生する有害物質規制指令：End of Life Vehicles）として使用制限がされている自動車製品や、2006年7月にRoHS指令（電気・電子機器中の特定有害物質の使用制限指令：Restriction of certain Hazardous Substances）として試行される電気・電子機器製品については、ヨーロッパを中心に環境負荷物質の使用制限が活発化しており、全世界へと広がりつつ有ります。</p>
                        <p>そういった環境下、各社環境を配慮した製品の開発や、環境負荷物質に対する非含有証明書の提出要求が増加している現状です。</p>
                    </div>
                    <div class="sentence_box">
                        <p>そんな中、弊社では世界最大級の検査機関であるAST社及びSGS社の協力の元、高い信頼性と低価格で環境負荷物質の分析サービスをご提供しております。</p>
                    </div>
                </div>
                <div class="service_detail_2">
                    <h3 class="service_content t_hide">サービス一覧</h3>

                    <div class="service_list">
                        <ul>
                            <?php
                                $args = array('cat'=> '9', 'order'=> 'ASC');
                                $postslist = get_posts( $args );
                                foreach ($postslist as $post) :
                                    setup_postdata($post);
                                ?>
                                <li class="s_arrow"><a href="<?php the_permalink(); ?>" alt="<?php the_title(); ?>"><?php the_title(); ?></a></li>
                                <?php
                                endforeach;
                                wp_reset_postdata();
                            ?>
                        </ul>
                    </div>
                </div>
                <?php get_template_part('page_about_price');?>
            </section>
            <?php get_template_part('page_document_download');?>
            <?php get_template_part('page_get_contact');?>
        </div>
        <!--main_column-->
    <?php get_sidebar('product'); ?>
    </div>
    <!-- main -->
</div>
<!-- container -->
<?php get_footer(); ?>