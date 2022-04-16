<?php get_header(); ?>

<!-- Head-->
<div class="recruitHead row">
    <div class="col-2">
        <a href="<?php echo esc_url(home_url()); ?>">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png" width="50" style="margin-top: 15px;margin-left: 60px">
        </a>    
    </div>
    <div class="col-10" style="padding: 0;">
    <div class="recruitHeadContactTel">
            <div style="font-size:0.3em; font-weight:500;height: 5px;">お電話での問い合わせ</div>
            <div style="font-weight:900;height: 30px;"><a href="tel:08054005639">☎：080-5400-5639</a></div>
            <div style="font-size:0.3em; font-weight:500;">※受付時間：8:00～18:00(土日祝を除く)</div>
        </div>
        <div class="recruitHeadContact"><a href="#">お問い合わせ</a></div>
    </div>
</div>
<!-- FirstView-->
<div class="first-view"></div>
<div class="first-view-grade">    
    <div class="top-content">
        <div style="font-weight: 700;font-size: 2.2vw;line-height: 5vw;">横須賀市・三浦市の訪問介護</div>
        <div style="font-weight: 700;font-size: 4.2vw;line-height: 5vw;">登録ヘルパーで自由な働き方を</div>
        <div style="font-weight: 400;font-size: 2.2vw;line-height: 5vw;">夜勤なし・シフト制で<span style="font-weight: 800;font-size: 3vw;line-height: 5vw;color:#7CC6AB;">時給<span style="font-size:1.3em;font-weight: 400;">1,600</span>円</span>から</div>
        <div class="btn mt-5" style="width: 25vw;height: 4vw;border-radius: 100px;background-color:#FF8D23;font-weight: 700;font-size: 2vw;color:#FFF">お問い合わせ</div>
    </div>  
</div>
<div class="jokin">常勤も<br>OK</div>
<div class="btn to-boshu">募集要項を見る<br><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/vector.png"></div>
<div class="top-drawer"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/drawer.png"></div>
<!-- Problems-->
<div class="problems-area">
    <h2>problems</h2>
    <div class="text-center lp-caption">こんなお悩みはありませんか？</div>
    <div class="row text-center problem-row" style="width:85%;margin: 2vw auto;">
        <div class="col-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">職場の人間関係に疲れた<br></h5>
                    <div class="problem-card-image">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/problem-personal-connect.png" class="card-img-top">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">給与・バイト代が低い<br></h5>
                    <div class="problem-card-image">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/problem-money.png" class="card-img-top">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">人手不足で毎日忙しい<br></h5>
                    <div class="problem-card-image">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/problem-busy.png" class="card-img-top">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">働きたい時間だけだと<br>時間がない</h5>
                    <div class="problem-card-image">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/problem-calender.png" class="card-img-top">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- features-->
<div class="features-area">
    <div style="position: relative;">
        <div style="margin-bottom: -8vw;"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/tryangle.png" style="width: 100%;"></div>
        <div class="text-center lp-caption fature-caption">『訪問介護のありがとう』なら..</div>
    </div>
    <h2>features</h2>
    <div class="text-center mt-3 mb-3" style="font-size:3vw;font-weight: 700;">働きやすいから選ばれる！３つの特徴</div>
    <div class="row bg-white" style="width:75%;margin: 2vw auto;margin-bottom: 0.3vw;border-radius: 1vw 1vw 0 0;">
        <div class="col-8" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/feature-num1.png);background-position-x: 3vw;background-position-y: 1vw;background-size: 8vw;">
            <div class="feature-title">働きたい時間に、働きたいだけ</div>
            <div class="feature-sentence">週１回・１時間からシフト設定ができ、自分の生活リズムにあわせて働くことができます。家事・育児のスキマ時間に働いたり、別の仕事との両立が可能です。始業時間は訪問先へ直行し、就業後は自宅へ直帰もOK。</div>
        </div>
        <div class="col-4 p-3" >
            <img class="w-100" src="<?php echo get_stylesheet_directory_uri(); ?>/img/feature1.png">
        </div>
    </div>
    <div class="row problem-row bg-white" style="width:75%;margin: 0 auto;margin-bottom: 0.3vw;border-radius: 0;">
        <div class="col-4 p-3" >
            <img class="w-100" src="<?php echo get_stylesheet_directory_uri(); ?>/img/feature2.png">
        </div>
        <div class="col-8" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/feature-num2.png);background-position-x: 35vw;background-position-y: 2vw;background-size: 8vw;">
            <div class="feature-title" style="margin-left: 0;">夜勤なし・高い給与水準</div>
            <div class="feature-sentence" style="margin-left: 0;width: 40vw;">訪問介護ありがとうは、夜勤なし・高い給与水準など、地域一働きやすい会社を目指しています。利用者さまからいただく「ありがとう」を、ご登録いただいているヘルパーさんの給与面や資格取得に反映しております。</div>
        </div>
    </div>
    <div class="row problem-row bg-white" style="width:75%;margin: 2vw auto;margin-top: 0.3vw;border-radius: 0 0 1vw 1vw;">
        <div class="col-8" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/feature-num3.png);background-position-x: 3vw;background-position-y: 2vw;background-size: 8vw;">
            <div class="feature-title" style="margin-top: 2vw;">資格取得の費用は全額支援</div>
            <div class="feature-sentence">これから介護業界を目指す方や訪問介護が未経験の方などでもご安心ください。介護業務に必要な「介護職員初任者研修」やその他の資格を取得する際には、資格取得に必要な費用を全額支援しており、キャリアアップしやすい環境づくりをしています。</div>
            <div class="feature-sentence" style="font-size: 0.9vw;">※お仕事の紹介までサポートさせていただき、一定の勤務時間を終えられた方のみの支援となります。</div>
        </div>
        <div class="col-4 p-3" >
            <img class="w-100" src="<?php echo get_stylesheet_directory_uri(); ?>/img/feature3.png">
        </div>
    </div>
</div>
<!-- what home visit care-->
<div class="whvc-area">
    <div>
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/wave-top.png" style="width: 100%;">
    </div>
    <h2>what home visit care</h2>
    <div class="text-center mt-3 mb-3" style="font-size:3vw;font-weight: 700;">訪問介護ってどんなことをするの？</div>
    <div class="row bg-white" style="width:75%;margin: 2vw auto;margin-bottom: 0.3vw;border-radius: 1vw 1vw 0 0;">
        <div class="col-6" style="height: 39vw;">
            <div class="whvc-title">身体介護</div>
            <div class="whvc-img">
                <img class="w-100" src="<?php echo get_stylesheet_directory_uri(); ?>/img/whvc-img1.png">
            </div>
            <div class="whvc-caption">入浴や排泄の介助など、<br>お身体にかかわる介護を中心に行います。</div>
            <div class="whvc-sentence">食事介助・排泄介助・おむつ交換・体位交換・衣類着脱・入浴介助・清拭・手、脚浴・通院介助・服薬介助・整容（爪切り・髭剃り、その他）など</div>
            <div class="whvc-square"></div>
        </div>
        <div class="col-6" style="height: 39vw;">
            <div class="whvc-title btn-info">生活援助</div>
            <div class="whvc-img">
                <img class="w-100" src="<?php echo get_stylesheet_directory_uri(); ?>/img/whvc-img2.png">
            </div>
            <div class="whvc-caption">掃除/洗濯/調理など生活にかかわるお手伝いや、<br>薬の受け取りの代行なども行います。</div>
            <div class="whvc-sentence">配膳・後片付け・布団干し・シーツ交換・衣類の補修・住居の掃除・ゴミ出し・生活必需品の買い物・換気・採光・火の始末など。</div>
            <div class="whvc-square"></div>
        </div>
    </div>
    <div class="whvc-last-sentence">利用者さまの自宅を訪問し、介護業務を行うため<br>1人1人としっかり向き合えるお仕事です。</div>
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/wave-under.png" style="width: 100%;margin-top:4vw;">
</div>
<!-- voice-->
<div class="voice-area">
    <h2>voice</h2>
    <div class="text-center mt-3 mb-5" style="font-size:3vw;font-weight: 700;">実際に働いているスタッフの声</div>
    <div class="w-50 staff-1" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/voice-bg1.png);">
        <img class="staff-img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice-1_2.png">
        <div class="staff-name">有光 貴美子さん</div>
        <div class="staff-age">経験年数12年</div>
        <div class="staff-title">同じ業務内容で給与が1.5倍に！<br>新しいことへのチャレンジも<br>できる環境です</div>
        <div class="staff-sentence">今まで自分の行なっていたことを高く会社に評価してもらい、業務内容は変わらないのに給与が1.5倍以上になりました♪<br>その中で経験を活かしてもう一段上のことにもチャレンジできるので新しいステップアップの形が見えました！！</div>
    </div>
    <div class="w-50 staff-2" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/voice-bg2.png);">
        <img class="staff-img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/voice-2_2.png">
    </div>
</div>


</body>
</html>