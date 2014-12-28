<?php get_header(); ?>
<!-- container -->
<div class="container">
    <!-- first view -->
    <?php 
        $page = get_post( get_the_ID() );
        $post_name = $page -> post_name;
        $set_str = ucfirst($post_name);
    ?>
    <div class="first_view">
        <div class="<?php echo $post_name ?>_bg">
            <h3 class="t_hide"><?php the_title(); ?><span><?php if ($post_name == 'howto') {$set_str = 'How to use';} echo $set_str ?></span></h3>
        </div>
    </div>
    <!-- first view -->
    <!-- main -->
    <div class="main clearfix">
        <!--main_column-->
        <div class="main_column">
            <?php if (have_posts()) :while (have_posts()) : the_post(); ?>
            <section class="<?php echo $post_name ?>_container">
                <h2 class="heading_point h_main"><?php the_title(); ?><span class="sub_heading"><?php echo $set_str ?></span></h2>
                <?php the_content(); ?>
            <?php
                endwhile;
                endif;
            ?>
            <?php
                if(is_page(array('feature','howto'))) {
                    get_template_part('page_about_price');
                }
            ?>
            <?php if(is_page(array('feature','howto'))) {
                    get_template_part('page_document_download');
                }
            ?>
            </section>
        <?php
            if(is_page(array('feature','howto'))) {
                get_template_part('page_get_contact');
            }
        ?>
        </div>
        <!--main_column-->
        <?php 
        if (is_page(array('company'))):
            get_sidebar('post');
        elseif (is_page(array('contact'))):
            get_sidebar('contact');
        else:
            get_sidebar();
        endif;
        ?>
    </div>
    <!-- main -->
</div>
<!-- container -->
<?php get_footer(); ?>