<?php get_header(); ?>
<!-- container -->
<div class="container">
    <!-- first view -->
    <?php 
        $parent_cat = get_parent_category();
        $parent_slug = $parent_cat -> slug;
        $cat = get_category_info();
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
            <section class="service_container">
                <h2 class="heading_point h_main"><?php the_title(); ?><span class="sub_heading"><?php the_title(); ?></span></h2>
            <article class="post_page">
                <?php the_content(); ?>
            </article>
            <?php
                endwhile;
                endif;
            ?>
        </section>
        <?php
            if(is_single()) {
                get_template_part('page_document_download');
                get_template_part('page_get_contact');
            }
        ?>
        </div>
        <!--main_column-->
    <?php get_sidebar('product'); ?>
    </div>
    <!-- main -->
</div>
<!-- container -->
<?php get_footer(); ?>