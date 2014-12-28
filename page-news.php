<?php get_header(); ?>
<!-- container -->
<div class="container">
    <!-- first view -->
    <?php 
        $page = get_post( get_the_ID() );
        $post_name = $page -> post_name;
    ?>
    <div class="first_view">
        <div class="company_bg">
        <h3 class="t_hide"><?php the_title(); ?><span>Company</span></h3>
        </div>
    </div>
    <!-- first view -->
    <!-- main -->
    <div class="main clearfix">
        <!--main_column-->
        <div class="main_column">
            <section class="company_container">
                <h2 class="heading_point h_main"><?php single_post_title(); ?>
                <span class="sub_heading"><?php echo $post_name ?></span></h2>
                <article class="news_page">
                    <div class="new_content">
                    <?php
                      query_posts(array(
                        'post_type' => 'post',
                        'category_name' => 'news',
                        'paged' => get_query_var('paged')
                        )
                      );
                      if (have_posts()) :
                        while (have_posts()) :
                            the_post();
                            get_template_part('content-archive');
                        endwhile;
                      endif;
                      wp_reset_query();
                    ?>
                    </div><!-- end .new_content -->
                </article>
            </section>
        </div>
        <!--main_column-->
    <?php get_sidebar('post'); ?>
    </div>
    <!-- main -->
</div>
<!-- container -->
<?php get_footer(); ?>