<!--side_column-->
<div class="side_column">
    <?php 
        $page = get_post( get_the_ID() );
        $post_name = $page -> post_name;
    ?>
    <h2 class="heading_point h_sub">サービス一覧<span class="sub_heading">Service</span></h2>
    <section class="service_side">
        <ul>
            <?php
            $args = array('cat'=> '9', 'order'=> 'ASC');
            $postslist = get_posts( $args );
            foreach ($postslist as $post) : setup_postdata($post);
            ?>
            <li><a href="<?php the_permalink(); ?>" alt="<?php the_title(); ?>"><?php the_title(); ?></a></li>
            <?php
            endforeach;
            wp_reset_postdata();
            ?>
        </ul>
    </section>
    <section>
        <h2 class="heading_point h_sub">Facebook<span class="sub_heading">facebook</span></h2>
    </section>
    <section class="facebook">
        <p><iframe src="https://www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fpages%2F%E7%92%B0%E5%A2%83%E5%88%86%E6%9E%90-Empowerment-%2F329801440501518%3Fref_type%3Dbookmark&amp;width&amp;height=290&amp;colorscheme=light&amp;show_faces=true&amp;header=true&amp;stream=false&amp;show_b'order' => true" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:290px; width:230px; " allowTransparency="true"></iframe></p>
    </section>
    <section class="side_banner">
        <div class="side_banner_inner">
            <p class="t_hide question"><a href="<?php echo get_permalink(get_page_by_path('contact/question')); ?>">よくある質問</a></p>
        </div>
        <div class="side_banner_inner">
            <p class="t_hide news"><a href="<?php echo get_permalink(get_page_by_path('company/news')); ?>">更新情報はこちら</a></p>
        </div>
    </section>
</div>
<!--side_column-->