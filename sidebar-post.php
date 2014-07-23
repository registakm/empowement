<!--side_column-->
<div class="side_column">
    <?php 
        $page = get_post( get_the_ID() );
        $post_name = $page -> post_name;
    ?>
    <h2 class="heading_point h_sub">企業情報<span class="sub_heading">Company</span></h2>
    <section class="service_side">
        <ul>
        <?php 
            wp_list_pages(array('include' => get_page_by_path('company')-> ID, 'title_li' => 0));
            wp_list_pages(array('include' => 63, 'title_li' => 0)); 
        ?>
        </ul>
    </section>
    <section>
        <h2 class="heading_point h_sub">Facebook<span class="sub_heading">facebook</span></h2>
    </section>
    <section class="facebook">
        <p><img src="http://placehold.jp/230x270.png?text=facebook" alt=""/></p>
    </section>
    <section class="side_banner">
        <div class="side_banner_inner">
            <p class="t_hide question"><a href="">よくある質問</a></p>
        </div>
        <div class="side_banner_inner">
            <p class="t_hide news"><a href="">更新情報はこちら</a></p>
        </div>
    </section>
</div>
<!--side_column-->