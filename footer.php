<!-- footer -->
        <div class="bred_comb clearfix">
            <div class="ajust_width">
                <div class="bred_comb_inner">
                    <p><?php set_breadcrumb()?></p>
                </div>
                <div class="scroll_top"><a id="scroll" href="#"></a></div>
            </div>
        </div>
        <hr class="sectioner_lb">
        <footer>
            <div class="footer_inner clearfix">
                <div class="f_box">
                    <section>
                        <p class="f_arrow heading">３つの特徴</p>
                        <ul class="list">
                            <li class="f_arrow"><a href="<?php echo get_permalink(get_page_by_path('feature')); ?>">３つの特徴</a></li>
                        </ul>
                    </section>
                    <section>
                        <p class="f_arrow heading">ご利用の流れ</p>
                        <ul class="list">
                            <li class="f_arrow"><a href="<?php echo get_permalink(get_page_by_path('howto')); ?>">ご利用の流れ</a></li>
                        </ul>
                    </section>
                </div>
                <div class="f_box">
                    <section>
                        <p class="f_arrow heading"><a href="<?php echo get_permalink(get_page_by_path('service')); ?>">サービス案内</a></p>
                        <ul class="list">
                            <li class="f_arrow"><a href="">RoHS分析</a></li>
                            <li class="f_arrow"><a href="">REACH高懸念物質(SVHC)分析</a></li>
                            <li class="f_arrow"><a href="">PFOS+PFOA分析</a></li>
                            <li class="f_arrow"><a href="">JIG24物質分析</a></li>
                            <li class="f_arrow"><a href="">フタル酸エステル類分析</a></li>
                            <li class="f_arrow"><a href="">PCB分析</a></li>
                        </ul>
                    </section>
                </div>
                <div class="f_box">
                    <section>
                        <ul class="list ajust">
                            <li class="f_arrow"><a href="">玩具EN71-Part3分析</a></li>
                            <li class="f_arrow"><a href="">ハロゲン分析</a></li>
                            <li class="f_arrow"><a href="">多環芳香族炭化水素分析</a></li>
                            <li class="f_arrow"><a href="">有機スズ化合物分析</a></li>
                            <li class="f_arrow"><a href="">VOC放散量分析</a></li>
                            <li class="f_arrow"><a href="">重金属含有量分析</a></li>
                        </ul>
                    </section>
                </div>
                <div class="f_box">
                    <section>
                        <p class="f_arrow heading">企業情報</p>
                        <ul class="list">
                            <li class="f_arrow"><a href="<?php echo get_permalink(get_page_by_path('company')); ?>">会社概要</a></li>
                            <li class="f_arrow"><a href="<?php echo get_permalink(get_page_by_path('company/news')); ?>">ニュース</a></li>
                        </ul>
                    </section>
                    <section>
                        <p class="f_arrow heading">お問い合わせ</p>
                        <ul class="list">
                            <li class="f_arrow"><a href="<?php echo get_permalink(get_page_by_path('contact')); ?>">お問い合わせ</a></li>
                            <li class="f_arrow"><a href="<?php echo get_permalink(get_page_by_path('contact/question')); ?>">よくある質問</a></li>
                        </ul>
                    </section>
                </div>
                <div class="f_box">
                    <section>
                        <p class="f_arrow heading">その他</p>
                        <ul class="list">
                            <li class="f_arrow"><a href="https://www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fpages%2F%E7%92%B0%E5%A2%83%E5%88%86%E6%9E%90-Empowerment-%2F329801440501518%3Fref_type%3Dbookmark&amp;width&amp;height=290&amp;colorscheme=light&amp;show_faces=true&amp;header=true&amp;stream=false&amp;show_border=true">Facebookページ</a></li>
                            <!-- <li class="f_arrow"><a href="">Twitter</a></li> -->
                        </ul>
                    </section>
                </div>
            </div>
            <div class="f_copyright">
                <address>
                    <p class="copyright"><small>&copy; <?php bloginfo('name')?>,Inc All rights reserverd.</small></p>
                </address>
            </div>
        </footer>
        <!-- footer -->
    </div>
    <!-- wrap -->
<?php wp_footer(); ?>
</body>
</html>