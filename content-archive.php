<?php
  $cat_info = apt_category_info();
?>
<dl class="clearfix">
    <dt>
        <p class="news_date"><?php the_time('Y年m月d日'); ?></p>
    </dt>
    <dd>
        <p class="page_ttl"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </p>
    </dd>
</dl>