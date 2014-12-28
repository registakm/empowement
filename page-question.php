<?php get_header(); ?>
<!-- container -->
<div class="container">
    <!-- first view -->
    <?php 
        $page = get_post( get_the_ID() );
        $post_name = $page -> post_name;
    ?>
    <div class="first_view">
        <div class="contact_bg">
        <h3 class="t_hide"><?php the_title(); ?><span>contact</span></h3>
        </div>
    </div>
    <!-- first view -->
    <!-- main -->
    <div class="main clearfix">
        <!--main_column-->
        <div class="main_column">
            <section class="question_container">
                <h2 class="heading_point h_main"><?php single_post_title(); ?>
                <span class="sub_heading"><?php echo $post_name ?></span></h2>
                <div class="question_detail_1">
                    <h3 class="question_content_m t_hide">よくある質問</h3>
                    <div class="question_inner">
                        <p class="q_title">Q.どこで分析を行いますか？</p>
                        <p class="q_content">A.弊社が提携している世界最大級の検査機関であるAST社及びSGS社で行います。 <br> 両社の協力のもと、最高な品質を業界最安値レベルで、各種分析を行っております。</p>
                    </div>
                    <div class="question_inner">
                        <p class="q_title">Q.各分析に必要なサンプル量はどのくらいですか？</p>
                        <p class="q_content">A.各分析によって必要量が異なるため、最初の御見積もりの段階で必要試料を連絡させて頂きます。 <br> 例を挙げると、RoHS分析の場合、基本的に分析1元素につき10g送付頂いております。特に高価なサンプル、少量のサンプルの場合は、御相談下さい。 <br> こちらで分析機関へ材質、サンプル量の情報を提供して分析可能であるか確認させて頂きます。</p>
                    </div>
                    <div class="question_inner">
                        <p class="q_title">Q.発送に際しての注意事項はありますか？</p>
                        <p class="q_content">A.弊社から「見積もり書」を送付させて頂く際に、併せて必要試料量の御連絡をさせて頂きます。 <br> 注文書に必要事項ご記入の上、必要試料量を弊社へご送付下さい。試料は均一な状態で、試料毎に名称を記載したビニール袋などに入れて下さい。 <br> なお、VOC測定用の試料を送付する場合は、アルミホイルに包んだ試料をビニール袋に入れて下さい。 <br> また、梱包には発泡スチロールやマジックインキの使用は避けて下さい。</p>
                    </div>
                    <div class="question_inner">
                        <p class="q_title">Q.納期はどれくらいかかりますか？</p>
                        <p class="q_content">A.基本的には7営業日で対応させて頂きます。<br>万が一納期が遅れる際は、前もって担当者からその旨、御伝えさせて頂きます。</p>
                    </div>
                    <div class="question_inner">
                        <p class="q_title">Q.価格はどちらで確認すれば良いですか？</p>
                        <p class="q_content">A.各サービスの詳細ページで御確認頂けます。<br>又、価格一覧表で各サービス毎の価格を御確認頂く事ができます。尚、予告なしで価格を改定することがありますので、予めご了承ください。</p>
                    </div>
                    <div class="question_inner">
                        <p class="q_title">Q.試料の返却は可能ですか？</p>
                        <p class="q_content">A.分析で使用した試料は検査機関にて一時的に保管する義務がありますので、基本的に返却することはできません。<br>どうしてもお客様の都合で返却希望の場合、送料、手数料をすべてお客様が負担する前提で個別調整することは可能です。詳細はご相談ください。</p>
                    </div>
                    <div class="question_inner">
                        <p class="q_title">Q.電話での問い合わせ受付は行っていますか？</p>
                        <p class="q_content">A.はい。基本的に平日9時〜18時の間で対応させて頂いております。<br>申し訳ございませんが、土・日曜日及び祝日の「受付」は実施しておりません。</p>
                    </div>
                    <div class="question_inner">
                        <p class="q_title">Q.分析フローチャートは発行できますか？発行費用は？</p>
                        <p class="q_content">A.分析フローチャートは全項目￥5,000で受け付けております。<br>日本語版に関してはRoHS分析、ハロゲン分析のみの対応で、こちらも￥5,000で受け付けております。</p>
                    </div>
                    <div class="question_inner">
                        <p class="q_title">Q.支払い方法は？</p>
                        <p class="q_content">A.基本的には報告書を提出させて頂いた月の末締め、翌月末までに弊社の指定口座にお振込頂く事になります。<br>支払いサイト等に関し、御相談頂く事は可能です。</p>
                    </div>
                    <div class="question_inner">
                        <p class="q_title">Q.1つの試料で名称の異なる2つの報告書を作成できますか？</p>
                        <p class="q_content">A.1回の分析で作成できる報告書は1種類のみです。<br>同じ試料でも、2つの名称で報告するには2回分分析させて頂いております。</p>
                    </div>
                    <div class="question_inner">
                        <p class="q_title">Q.報告書は何語ですか？</p>
                        <p class="q_content">A.<br>(1)正式な報告書は英語版であります。<br>(2)RoHS分析、ハロゲン分析につき、日本語版の報告書も発行可能ですが、追加料金が発生します。詳細はお問い合わせください。<br>(3)英語版報告書の和訳も対応可能ですが、詳細はご相談ください。</p>
                    </div>
                    <div class="question_inner">
                        <p class="q_title">Q.分析料金の改定はありますか？</p>
                        <p class="q_content">A.はい、御座います。予告無しで改定する場合が御座いますので、ホームページに掲載する料金をご確認ください。</p>
                    </div>
                    <div class="question_inner">
                        <p class="q_title">Q. 既に正式発行されたテストレポートを複数枚提供してもらう事は可能ですか？</p>
                        <p class="q_content">A.「１回の試験あたり１枚のテストレポート」が原則です。<br>複数のユーザー様にご提出される場合、コピーをするなどして対応して頂きたいと思います。</p>
                    </div>
                    <div class="question_inner">
                        <p class="q_title">Q. RoHS指令対象物質以外でも分析は可能ですか？</p>
                        <p class="q_content">A.可能です。弊社では、様々な物質の分析を承っております。<br>例を挙げると、PFOS+PFOA分析、JIG24物質分析、多環芳香族炭化水素分析、玩具EN71-Part3分析、PCB分析、有機スズ化合物分析等が挙げられます。</p>
                    </div>
                </div>
            </section>
        </div>
        <!--main_column-->
    <?php get_sidebar('contact'); ?>
    </div>
    <!-- main -->
</div>
<!-- container -->
<?php get_footer(); ?>