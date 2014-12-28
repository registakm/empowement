
            <?php
                $post = $wp_query->post;
                if ( in_category('3') ) {
                include(TEMPLATEPATH.'/single-news.php');
                } elseif ( in_category('9') ) {
                include(TEMPLATEPATH.'/single-product.php');
                } 
            ?>
            