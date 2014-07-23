<?php get_header(); ?>
<!-- container -->
<div class="container">
    <!-- first view -->
    <?php 
        $parent_cat = get_parent_category();
        $parent_slug = $parent_cat -> slug;
        $cat = get_category_info();
        $cat_name = $cat -> name;
        $cat_slug = $cat -> slug;
    ?>
    <div class="first_view">
            <div class="<?php echo $parent_slug ?>_bg">
                <h3 class="t_hide"><?php echo ucfirst($parent_slug) ?><span></span></h3>
            </div>
        </div>
    <!-- first view -->
    <!-- main -->
    <div class="main clearfix">
        <!--main_column-->
        <div class="main_column">
            <?php if (have_posts()) :while (have_posts()) : the_post(); ?>
            <section class="<?php echo $cat_slug ?>_container">
                <h2 class="heading_point h_main"><?php echo $cat_name ?><span class="sub_heading"><?php echo $cat_slug ?></span></h2>
            <article class="post_page">
                <p><span class="page_date"><?php the_date('Y年m月d日'); ?></span></p>
                <h2 class="page_title"><?php the_title(); ?></h1>
                <?php the_content(); ?>
            </article>
            <?php
                endwhile;
                endif;
            ?>
        </section>
        <?php
            if(is_single()) {
                get_template_part('page_get_contact');
            }
        ?>
        </div>
        <!--main_column-->
    <?php get_sidebar('post'); ?>
    </div>
    <!-- main -->
</div>
<!-- container -->
<?php get_footer(); ?>