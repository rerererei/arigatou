<?php get_header(); ?>
<!-- footer固定 -->
<div class="footerFix row justify-content-end pcview">
    <div class="col-2 text-center contact-btn to-button" href="#contactForm"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/recruit/web.png" style="width: 30px;margin-bottom:5px;">WEBから<br>応募・問い合わせ</div>
    <div class="col-2 text-center tel-btn"><a href="tel:0468748364"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/recruit/phone.png" style="width: 30px;margin-bottom:5px;">電話から<br>応募・問い合わせ</a></div>
</div>
<div class="footerFix-sp row spview">
    <div class="col-6 text-center contact-btn to-button" href="#contactForm-sp"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/recruit/web.png" style="width: 25px;margin-bottom:5px;">WEBから<br>応募・問い合わせ</div>
    <div class="col-6 text-center tel-btn"><a href="tel:0468748364"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/recruit/phone.png" style="width: 25px;margin-bottom:5px;">電話から<br>応募・問い合わせ</a></div>
</div>
<!-- Head-->
<div class="recruitHead row pcview">
    <div class="col-2">
        <a href="<?php echo esc_url(home_url()); ?>">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/recruit/logo.png" style="margin-top: 5px;margin-left: 50px;width: 8rem;">
        </a>    
    </div>
    <div class="col-10" style="padding: 0;">
        <div class="recruitHeadContactTel">
            <div class="text-1">お電話での問い合わせ</div>
            <div class="text-2"><a href="tel:0468748364"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/recruit/phone.png" style="margin-top: -11px;width: 1em;margin-right: -5px;">：046-874-8364</a></div>
            <div class="text-3">※受付時間：9:00～18:00(土日祝を除く)</div>
        </div>
        <div class="recruitHeadContact to-button" href="#contactForm">お問い合わせ</div>
    </div>
</div>
<div class="recruitHead row justify-content-between spview" style="margin-left: -1px;">
    <div class="col-2">
        <a href="<?php echo esc_url(home_url()); ?>">
            <img class="head-logo-img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/recruit/logo.png">
        </a>    
    </div>
</div>
<!-- FirstView-->
<div class="first-view pcview">
    <div class="first-view-grade">    
        <div class="top-content">
            <div style="font-weight: 700;font-size: 1em;line-height: 1.5em;">横須賀市・三浦市の訪問介護</div>
            <div style="font-weight: 700;font-size: 2em;line-height: 1.5em;">登録ヘルパーで自由な働き方を</div>
            <div style="font-weight: 400;font-size: 1.1em;line-height: 1.5em;">夜勤なし・シフト制で<span style="font-weight: 800;font-size: 1.5em;line-height: 1.5em;color:#7CC6AB;margin: 0.2em;">時給<span style="font-size:1.3em;font-weight: 400;/* margin: 0 6px; */">1,600</span>円</span>から</div>
            <div class="to-button top-contact-btn" href="#contactForm">お問い合わせ</div>
        </div>
    </div>
    <div class="jokin">常勤も<br>OK</div>
    <div class="btn to-boshu to-button " href="#requruite">募集要項を見る<br><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/recruit/vector.png"></div>
    <div class="top-drawer"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/recruit/drawer.png"></div>
</div>
<div class="first-view spview">
    <div class="first-view-grade">    
    </div>
    <div class="top-content">
        <div style="font-weight: 700;font-size: 4.2vw;line-height: 5vw;">横須賀市・三浦市の訪問介護</div>
        <div style="font-weight: 700;font-size: 8vw;line-height: 10vw;margin-top: 1vw;">登録ヘルパーで<br>自由な働き方を</div>
        <div style="font-weight: 400;font-size: 4vw;line-height: 8vw;margin-top: 0vw;">夜勤なし・シフト制で<br>
        <span style="font-weight: 800;font-size: 7vw;line-height: 5vw;color:#7CC6AB;">時給<span style="font-size:1.3em;font-weight: 700;">1,600</span>円</span>から</div>
        <div class="btn mt-5 to-button" href="#contactForm-sp" style="width: 80vw;height: 17vw;border-radius: 100px;background: linear-gradient(180deg, #FF8D23 0%, #E97710 100%);box-shadow: 0px 4px 15px rgba(106, 106, 106, 0.51);font-size: 6vw;color:#FFF;padding-top: 4vw;margin: 4vw 4vw;line-height: 1.3;">お問い合わせ</div>
    </div>
    <div class="jokin">常勤も<br>OK</div>
    <div class="top-drawer"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/recruit/drawer.png"></div>
</div>
<!-- Problems-->
<div class="problems-area pcview">
    <div class="text-center">
        <h2>problems</h2>
    </div>
    <div class="text-center lp-caption">こんなお悩みはありませんか？</div>
    <div class="row text-center problem-row" style="width:85%;margin: 2em auto;">
        <div class="col-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">職場の人間関係に疲れた<br></h5>
                    <div class="problem-card-image">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/recruit/problem-personal-connect.png" class="card-img-top">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">給与・バイト代が低い<br></h5>
                    <div class="problem-card-image">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/recruit/problem-money.png" class="card-img-top">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">人手不足で毎日忙しい<br></h5>
                    <div class="problem-card-image">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/recruit/problem-busy.png" class="card-img-top">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">働きたい時間だけだと<br>時間がない</h5>
                    <div class="problem-card-image">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/recruit/problem-calender.png" class="card-img-top">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="problems-area spview">
    <div class="text-center">
        <h2>problems</h2>
    </div>
    <div class="text-center lp-caption">今の職場で<br>こんなお悩みはありませんか？</div>
    <div style="position: relative;width: 10vw;height: 10vw;background-color: #ffffff;top: 183px;left: 45%;z-index: 999;"></div>
    <div class="row text-center problem-row" style="width:85%;margin: 0 auto;">
        <div class="col-6 square" style="border-right: 2px dashed #888888;border-bottom: 2px dashed #888888;">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">職場の人間関係に疲れた<br></h5>
                    <div class="problem-card-image">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/recruit/problem-personal-connect.png" class="card-img-top">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6" style="border-bottom: 2px dashed #888888;">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">給与・バイト代が低い<br></h5>
                    <div class="problem-card-image">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/recruit/problem-money.png" class="card-img-top">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6" style="border-right: 2px dashed #888888;">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">人手不足で毎日忙しい<br></h5>
                    <div class="problem-card-image">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/recruit/problem-busy.png" class="card-img-top">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">働きたい時間だけだと<br>時間がない</h5>
                    <div class="problem-card-image">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/recruit/problem-calender.png" class="card-img-top">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- features-->
<div class="features-area pcview">
    <div style="position: relative;">
        <div class="tryangle-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/recruit/tryangle.png" style="width: 100%;"></div>
        <div class="text-center lp-caption feature-caption">『訪問介護のありがとう』なら..</div>
    </div>
    <div class="text-center">
        <h2>features</h2>
    </div>
    <div class="text-center mt-3 mb-3 lp-caption">働きやすいから選ばれる！３つの特徴</div>
    <div class="row bg-white" style="width:85%;margin: 2em auto;margin-bottom: 5px;border-radius: 3em 3em 0 0;">
        <div class="col-8 feature-num-left" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/recruit/feature-num1.png);">
            <div class="feature-title">働きたい時間に、働きたいだけ</div>
            <div class="feature-sentence">週１回・１時間からシフト設定ができ、自分の生活リズムにあわせて働くことができます。家事・育児のスキマ時間に働いたり、別の仕事との両立が可能です。始業時間は訪問先へ直行し、就業後は自宅へ直帰もOK。</div>
        </div>
        <div class="col-4 p-5" >
            <img class="w-100" src="<?php echo get_stylesheet_directory_uri(); ?>/img/recruit/feature1.png" style="border-radius: 10px;">
        </div>
    </div>
    <div class="row problem-row bg-white" style="width:85%;margin: 0 auto;margin-bottom: 5px;border-radius: 0;">
        <div class="col-4 p-5" >
            <img class="w-100" src="<?php echo get_stylesheet_directory_uri(); ?>/img/recruit/feature2.png" style="border-radius: 10px;">
        </div>
        <div class="col-8 feature-num-right" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/recruit/feature-num2.png);">
            <div class="feature-title" style="margin-left: 0;">夜勤なし・高い給与水準</div>
            <div class="feature-sentence" style="margin-left: 0;width: 37em;">訪問介護ありがとうは、夜勤なし・高い給与水準など、地域一働きやすい会社を目指しています。利用者さまからいただく「ありがとう」を、ご登録いただいているヘルパーさんの給与面や資格取得に反映しております。</div>
        </div>
    </div>
    <div class="row problem-row bg-white" style="width:85%;margin: 2vw auto;margin-top: 5px;border-radius: 0 0 3em 3em;">
        <div class="col-8 feature-num-left" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/recruit/feature-num3.png);">
            <div class="feature-title" style="margin-top: 2vw;">資格取得の費用は全額支援</div>
            <div class="feature-sentence" style="width: 39em;">これから介護業界を目指す方や訪問介護が未経験の方などでもご安心ください。介護業務に必要な「介護職員初任者研修」やその他の資格を取得する際には、資格取得に必要な費用を全額支援しており、キャリアアップしやすい環境づくりをしています。</div>
            <div class="feature-sentence feature-sentence-notice">※お仕事の紹介までサポートさせていただき、一定の勤務時間を終えられた方のみの支援となります</div>
        </div>
        <div class="col-4 p-5" >
            <img class="w-100" src="<?php echo get_stylesheet_directory_uri(); ?>/img/recruit/feature3.png" style="border-radius: 10px;">
        </div>
    </div>
</div>
<div class="features-area spview">
    <div style="position: relative;">
        <div style="margin-bottom: -8vw;"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/recruit/tryangle_sp.png" style="width: 100%;"></div>
        <div class="text-center lp-caption feature-caption">『訪問介護のありがとう』なら..</div>
    </div>
    <div class="text-center mt-4">
        <h2>features</h2>
    </div>
    <div class="text-center mt-3 mb-5 lp-caption">働きやすいから選ばれる！<br>３つの特徴</div>
    <div class="row bg-white feature-head feature-first" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/recruit/feature-num1.png);">
        <div class="feature-title">働きたい時間に、働きたいだけ</div>
        <div class="feature-sentence">週１回・１時間からシフト設定ができ、自分の生活リズムにあわせて働くことができます。家事・育児のスキマ時間に働いたり、別の仕事との両立が可能です。始業時間は訪問先へ直行し、就業後は自宅へ直帰もOK。</div>
        <img class="feature-img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/recruit/feature1.png">
    </div>
    <div class="row bg-white feature-head feature-second" style="border-radius:0;background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/recruit/feature-num2.png);">
        <div class="feature-title">夜勤なし・高い給与水準</div>
        <div class="feature-sentence">訪問介護ありがとうは、夜勤なし・高い給与水準など、地域一働きやすい会社を目指しています。利用者さまからいただく「ありがとう」を、ご登録いただいているヘルパーさんの給与面や資格取得に反映しております。</div>
        <img class="feature-img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/recruit/feature2.png">
    </div>
    <div class="row bg-white feature-head feature-third" style="margin-bottom:7vw;border-radius: 0 0 5vw 5vw;background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/recruit/feature-num3.png);">
        <div class="feature-title" style="margin-top: 2vw;">資格取得の費用は全額支援</div>
        <div class="feature-sentence">これから介護業界を目指す方や訪問介護が未経験の方などでもご安心ください。介護業務に必要な「介護職員初任者研修」やその他の資格を取得する際には、資格取得に必要な費用を全額支援しており、キャリアアップしやすい環境づくりをしています。</div>
        <div class="feature-sentence" style="font-size: 3vw;">※お仕事の紹介までサポートさせていただき、一定の勤務時間を終えられた方のみの支援となります。</div>
        <img class="feature-img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/recruit/feature3.png">
    </div>
</div>
<!-- what home visit care-->
<div class="whvc-area pcview">
    <div>
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/recruit/wave-top.png" style="width: 100%;">
    </div>
    <div class="text-center">
        <h2>what home visit care</h2>
    </div>
    <div class="text-center mt-3 mb-3 lp-caption">訪問介護ってどんなことをするの？</div>
    <div class="row bg-white justify-content-between" style="width: 80%;margin: 50px auto;">
        <div class="col-5 whvc-col">
            <div class="whvc-square"></div>
            <div class="whvc-title">身体介護</div>
            <div class="whvc-img">
                <img class="w-100" src="<?php echo get_stylesheet_directory_uri(); ?>/img/recruit/whvc-img1.png">
            </div>
            <div class="whvc-caption">入浴や排泄の介助など、<br>お身体にかかわる介護を中心に行います。</div>
            <div class="whvc-sentence">食事介助・排泄介助・おむつ交換・体位交換・衣類着脱・入浴介助・清拭・手、脚浴・通院介助・服薬介助・整容（爪切り・髭剃り、その他）など</div>
        </div>
        <div class="col-5 whvc-col">
            <div class="whvc-square"></div>
            <div class="whvc-title">生活援助</div>
            <div class="whvc-img">
                <img class="w-100" src="<?php echo get_stylesheet_directory_uri(); ?>/img/recruit/whvc-img2.png">
            </div>
            <div class="whvc-caption">掃除/洗濯/調理など生活にかかわるお手伝いや、<br>薬の受け取りの代行なども行います。</div>
            <div class="whvc-sentence">配膳・後片付け・布団干し・シーツ交換・衣類の補修・住居の掃除・ゴミ出し・生活必需品の買い物・換気・採光・火の始末など。</div>
        </div>
    </div>
    <div class="whvc-last-sentence">利用者さまの自宅を訪問し、介護業務を行うため<br>1人1人としっかり向き合えるお仕事です。</div>
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/recruit/wave-under.png" style="width: 100%;margin-top:4vw;">
</div>
<div class="whvc-area spview">
    <div>
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/recruit/wave-top.png" style="width: 100%; height: 7vw;">
    </div>
    <div class="text-center">
        <h2>what home visit care</h2>
    </div>
    <div class="text-center mt-3 mb-3 lp-caption">訪問介護って<br>どんなことをするの？</div>
    <div class="row bg-white" style="width: 85vw;margin: 29vw auto;margin-bottom: 0.3vw;border-radius: 1vw 1vw 0 0;">
        <div class="col-6">
            <div class="whvc-title shintai-kaigo active">身体介護</div>
        </div>
        <div class="col-6">
            <div class="whvc-title seikatsu-enjo">生活援助</div>
        </div>
        <div class="whvc-detail-area text-center shintai-detail">
            <img class="whcv-img-sp" src="<?php echo get_stylesheet_directory_uri(); ?>/img/recruit/whvc-img1.png">
            <div class="whvc-caption-sp">入浴や排泄の介助など、<br>お身体にかかわる介護を中心に行います。</div>
            <div class="whvc-sentence-sp" style="text-align: left;">食事介助・排泄介助・おむつ交換・体位交換・衣類着脱・入浴介助・清拭・手、脚浴・通院介助・服薬介助・整容（爪切り・髭剃り、その他）など</div>
        </div>
        <div class="whvc-detail-area text-center seikatsu-detail" style="display:none">
            <img class="whcv-img-sp" src="<?php echo get_stylesheet_directory_uri(); ?>/img/recruit/whvc-img2.png">
            <div class="whvc-caption-sp">掃除/洗濯/調理など<br>生活にかかわるお手伝いや、<br>薬の受け取りの代行なども行います。</div>
            <div class="whvc-sentence-sp" style="text-align: left;">配膳・後片付け・布団干し・シーツ交換・衣類の補修・住居の掃除・ゴミ出し・生活必需品の買い物・換気・採光・火の始末など。</div>
        </div>
    </div>
    <div class="whvc-last-sentence-sp">利用者さまの自宅を訪問し、介護業務を行うため<br>1人1人としっかり向き合えるお仕事です。</div>
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/recruit/wave-under.png" style="width: 100%;margin-top:4vw;">
</div>
<!-- voice-->
<div class="voice-area pcview">
<div class="text-center">
        <h2>voice</h2>
    </div>
    <div class="text-center mt-3 mb-5 lp-caption">実際に働いているスタッフの声</div>
    <div class="staff-1" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/recruit/voice-bg1.png);">
        <img class="staff-img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/recruit/voice-1_2.png">
        <div class="staff-name">有光 貴美子さん</div>
        <div class="staff-age">経験年数12年</div>
        <div class="staff-title">同じ業務内容で給与が1.5倍に！<br>新しいことへのチャレンジも<br>できる環境です</div>
        <div class="staff-sentence">今まで自分の行なっていたことを高く会社に評価してもらい、業務内容は変わらないのに給与が1.5倍以上になりました♪<br>その中で経験を活かしてもう一段上のことにもチャレンジできるので新しいステップアップの形が見えました！！</div>
    </div>
    <div class="staff-2" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/recruit/voice-bg2.png);">
        <div class="staff-block">
            <img class="staff-img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/recruit/voice-2_2.png">
            <div class="staff-name">鈴木 典子さん</div>
            <div class="staff-age">経験年数9年</div>
        </div>    
        <div class="staff-title2">伸び伸びと仕事ができ、<br>思い通りのライフプラン形成が<br>できています</div>
        <div class="staff-sentence2">介護業界に携わって得た経験をこちらの事業所で柔軟に伸び伸びと活かさせていただいております！<br>毎日たくさんの利用者様に”ありがとう”を言っていただけて、それが給与面にしっかり反映されているので『良いライフプラン形成』ができております♪</div>
    </div>
</div>
<div class="voice-area spview">
<div class="text-center">
        <h2>voice</h2>
    </div>
    <div class="text-center mt-3 mb-5 lp-caption">実際に働いているスタッフの声</div>
    <div class="staff-info text-center">
        <img class="staff-img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/recruit/voice-1_2.png">
        <div class="staff-name">有光 貴美子さん</div>
        <div class="staff-age">経験年数12年</div>
        <div class="staff-1" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/recruit/voice-bg1.png);">
            <div class="staff-title-sp">同じ業務内容で給与が1.5倍に！<br>新しいことへのチャレンジもできる環境です</div>
            <div class="staff-sentence-sp">今まで自分の行なっていたことを高く会社に評価してもらい、業務内容は変わらないのに給与が1.5倍以上になりました♪<br>その中で経験を活かしてもう一段上のことにもチャレンジできるので新しいステップアップの形が見えました！！</div>
        </div>
    </div>
    <div class="staff-info text-center">
        <img class="staff-img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/recruit/voice-2_2.png">
        <div class="staff-name">鈴木 典子さん</div>
        <div class="staff-age">経験年数9年</div>
        <div class="staff-2" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/recruit/voice-bg2.png);">
            <div class="staff-title-sp">伸び伸びと仕事ができ、<br>思い通りのライフプラン形成ができています</div>
            <div class="staff-sentence-sp">介護業界に携わって得た経験をこちらの事業所で柔軟に伸び伸びと活かさせていただいております！<br>毎日たくさんの利用者様に”ありがとう”を言っていただけて、それが給与面にしっかり反映されているので『良いライフプラン形成』ができております♪</div>
        </div>
    </div>
</div>
<!-- requruite-->
<div id="requruite" class="requruite-area pcview">
    <div class="text-center">
        <h2>recruitment</h2>
    </div>
    <div class="text-center mt-3 mb-5 lp-caption">募集職種・募集要項</div>
    <div class="text-center mt-5 mb-5  requruite-text-bold">生活スタイルに合わせて、2つの働き方から選択できます。</div>
    <div class="row">
        <div class="col-6">
            <div class="requruite-btn active toroku-btn" style="margin-left:auto;">登録ヘルパー</div>
            <span class="requruite-btn-arrow-left toroku-arrow">
                <img class="requruite-btn-arrow-top" src="<?php echo get_stylesheet_directory_uri(); ?>/img/recruit/Polygon7.png" >
            </span>
        </div>
        <div class="col-6">
            <div class="requruite-btn jokin-btn" style="margin-right:auto;">常勤ヘルパー</div>
            <span class="requruite-btn-arrow jokin-arrow" style="display:none;">
                <img class="requruite-btn-arrow-top" src="<?php echo get_stylesheet_directory_uri(); ?>/img/recruit/Polygon7.png" >
            </span>
        </div>
        <div class="requruite-toroku">
            <div class="text-center mt-3 requruite-text-bold requruite-under">まずは登録のみからでOK！</div>
            <div class="text-center mt-3 mb-5 requruite-text">事前に頂いている希望のエリアや時間帯などから、<br>条件に合いそうなサービスを随時ご紹介させていただきます。</div>
            <div class="reqruite-info">
                <table class="requruite-info-table">
                    <tr>
                        <th><div class="requruite-table-head">給与</div></td>
                        <td>時給1,600円～2,100円</td>
                    </tr>
                    <tr>
                        <th><div class="requruite-table-head">勤務時間</div></td>
                        <td>8:00〜20:00の間で週1回・1時間から調整できます！<br>休日の設定も自由です。</td>
                    </tr>
                    <tr>
                        <th><div class="requruite-table-head">勤務エリア</div></td>
                        <td>横須賀市・三浦市 全般</td>
                    </tr>
                    <tr>
                        <th><div class="requruite-table-head">求める人材</div></td>
                        <td>未経験の方も大歓迎です！<br>初任者研修・介護福祉士資格をお持ちの方は優遇させていただきます！</td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="requruite-jokin" style="display:none">
            <div class="text-center mt-3 requruite-text-bold requruite-under">経験者の方は常勤での働き方も可能です♪</div>
            <div class="text-center mt-3 mb-5 requruite-text">責任者昇格で＋50,000円の手当支給！<br>また、常勤さんには社用車支給で、ご自宅の近くに会社負担で駐車場をお借りします。</div>
            <div class="reqruite-info">
                <table class="requruite-info-table">
                    <tr>
                        <th><div class="requruite-table-head">給与</div></td>
                        <td>218,400円（マネージャーは+20,000円/月・サービス責任者は+50,000円/月）※通勤手当：~20,000円/月、介護福祉士手当：30,000円/月</td>
                    </tr>
                    <tr>
                        <th><div class="requruite-table-head">勤務時間</div></td>
                        <td>実働8時間（シフト制：8:00-18:00など）<br>早番・中番・遅番から選択できます。</td>
                    </tr>
                    <tr>
                        <th><div class="requruite-table-head">勤務エリア</div></td>
                        <td>横須賀市・三浦市 全般</td>
                    </tr>
                    <tr>
                        <th><div class="requruite-table-head">応募条件</div></td>
                        <td>介護職員初任者研修（旧ヘルパー2級）以上<br>経験0.5年以上　※ブランクOK</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
<div id="requruite-sp" class="requruite-area spview">
    <div class="text-center">
        <h2>recruitment</h2>
    </div>
    <div class="text-center mt-3 mb-2 lp-caption" style="font-size:7vw;">募集職種・募集要項</div>
    <div class="text-center mt-5 mb-4" style="font-size: 3vw;font-weight: 700;">生活スタイルに合わせて、2つの働き方から選択できます。</div>
    <div class="row" style="margin-bottom: 5vw;">
        <div class="col-6">
            <div class="requruite-btn active toroku-btn" style="margin-left:auto;">登録ヘルパー</div>
            <span class="requruite-btn-arrow-left toroku-arrow">
                <img class="requruite-btn-arrow-top" src="<?php echo get_stylesheet_directory_uri(); ?>/img/recruit/Polygon7.png" >
            </span>
        </div>
        <div class="col-6">
            <div class="requruite-btn jokin-btn" style="margin-right:auto;">常勤ヘルパー</div>
            <span class="requruite-btn-arrow jokin-arrow" style="display:none;">
                <img class="requruite-btn-arrow-top" src="<?php echo get_stylesheet_directory_uri(); ?>/img/recruit/Polygon7.png" >
            </span>
        </div>
        <div class="requruite-toroku">
            <div class="text-center requruite-under" style="font-size: 3vw;font-weight: 700;">まずは登録のみからでOK！</div>
            <div class="text-center mt-3 mb-5" style="font-size: 3vw;font-weight: 400;">事前に頂いている希望のエリアや時間帯などから、<br>条件に合いそうなサービスを随時ご紹介させていただきます。</div>
            <div class="reqruite-info">
                <table class="requruite-info-table">
                    <tr>
                        <th><div class="requruite-table-head">給与</div></td>
                        <td>時給1,600円～2,100円</td>
                    </tr>
                    <tr>
                        <th><div class="requruite-table-head">勤務時間</div></td>
                        <td>8:00〜20:00の間で週1回・1時間から調整できます！<br>休日の設定も自由です。</td>
                    </tr>
                    <tr>
                        <th><div class="requruite-table-head">勤務エリア</div></td>
                        <td>横須賀市・三浦市 全般</td>
                    </tr>
                    <tr>
                        <th><div class="requruite-table-head">求める人材</div></td>
                        <td>未経験の方も大歓迎です！<br>初任者研修・介護福祉士資格をお持ちの方は優遇させていただきます！</td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="requruite-jokin" style="display:none">
            <div class="text-center requruite-under" style="font-size: 3vw;font-weight: 700;">経験者の方は常勤での働き方も可能です♪</div>
            <div class="text-center mt-3 mb-5" style="font-size: 3vw;font-weight: 400;">責任者昇格で＋50,000円の手当支給！<br>また、常勤さんには社用車支給で、<br>ご自宅の近くに会社負担で駐車場をお借りします。</div>
            <div class="reqruite-info">
                <table class="requruite-info-table">
                    <tr>
                        <th><div class="requruite-table-head">給与</div></td>
                        <td>218,400円（マネージャーは+20,000円/月・サービス責任者は+50,000円/月）※通勤手当：~20,000円/月、介護福祉士手当：30,000円/月</td>
                    </tr>
                    <tr>
                        <th><div class="requruite-table-head">勤務時間</div></td>
                        <td>実働8時間（シフト制：8:00-18:00など）<br>早番・中番・遅番から選択できます。</td>
                    </tr>
                    <tr>
                        <th><div class="requruite-table-head">勤務エリア</div></td>
                        <td>横須賀市・三浦市 全般</td>
                    </tr>
                    <tr>
                        <th><div class="requruite-table-head">応募条件</div></td>
                        <td>介護職員初任者研修（旧ヘルパー2級）以上<br>経験0.5年以上　※ブランクOK</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- contact-->
<div class="contact-area bg-image pcview" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/recruit/contact-bg.png);">
    <div class="contact-area bg-color">
        <div class="text-center mt-5 mb-1 contact-text-middle-bold">ヘルパーへの登録・その他の職種へのご応募については</div>
        <div class="text-center mb-5 contact-text-large-bold under-white">まずはこちらよりお気軽にお問い合わせください！</div>
        <div class="text-center contact-text-middle">「具体的にどんなお仕事があるか気になる...」</div>
        <div class="text-center contact-text-middle">「私でもできる仕事あるかな...？」</div>
        <div class="text-center contact-text-middle">などのご質問もお受けしております！</div>
        <div class="text-center mt-5 contact-btn to-button  contact-text-middle" href="#contactForm">Webから応募・問い合わせ</div>
    </div>
</div>
<div class="contact-area bg-image spview" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/recruit/contact-bg_sp.png);">
    <div class="contact-area bg-color">
        <div class="text-center mt-1" style="font-size:4vw;">ヘルパーへの登録・その他の職種への<br>ご応募については</div>
        <div class="text-center mt-3 under-white" style="font-size: 6vw;font-weight: 700;margin: 0 auto;">まずはこちらより</div>
        <div class="text-center mb-4 under-white" style="font-size: 6vw;font-weight: 700;margin: 0 auto;">お気軽にお問い合わせください！</div>
        <div class="text-center" style="font-size: 4vw;font-weight: 400;">「具体的にどんなお仕事があるか気になる...」</div>
        <div class="text-center" style="font-size: 4vw;font-weight: 400;">「私でもできる仕事あるかな...？」</div>
        <div class="text-center" style="font-size: 4vw;font-weight: 400;">などのご質問もお受けしております！</div>
        <div class="text-center mt-5 contact-btn-web to-button to-form-btn" href="#contactForm-sp">Webから応募・問い合わせ</div>
        <div class="text-center mt-4 contact-btn-tel to-button to-tel-btn" href="#contactForm-sp">電話から応募・問い合わせ</div>
        <div class="text-center mt-2" style="font-size: 3vw;font-weight: 400;">※受付時間：9:00〜18:00（土日祝もOK）</div>
    </div>
</div>
<!-- flow-->
<div class="flow-area pcview">
    <div class="text-center">
        <h2>flow</h2>
    </div>
    <div class="text-center lp-caption">登録からお仕事までの流れ</div>
    <div class="row justify-content-center p-5 m-1">
        <div class="col-3 flow-block">
            <div class="flow-title">①応募・問い合わせ</div>
            <div class="flow-sentence">Webもしくはお電話からご応募・お問い合わせください。</div>
        </div>
        <div class="col-1 flow-arrow">
            <img class="flow-arrow-img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/recruit/Polygon7.png" >
        </div>
        <div class="col-3 flow-block">
            <div class="flow-title">②業務説明・ヒアリング</div>
            <div class="flow-sentence">衣笠の事業所にてご面談とご説明を行います。また、ご希望の条件をお伺いし、随時サービスをご紹介します。</div>
        </div>
        <div class="col-1 flow-arrow">
            <img class="flow-arrow-img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/recruit/Polygon7.png" >
        </div>
        <div class="col-3 flow-block">
            <div class="flow-title">③お仕事開始</div>
            <div class="flow-sentence">働きたい仕事が見つかり次第お仕事開始です。初回や困った時には、弊社社員も同行しますのでご安心ください。</div>
        </div>
    </div>
    <div class="footer-drawer"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/recruit/drawer.png"></div>
</div>
<div class="flow-area spview">
    <div class="text-center">
        <h2>flow</h2>
    </div>
    <div class="text-center">
        <div class="text-center mt-4 mb-5 lp-caption" style="font-size:6vw;">登録からお仕事までの流れ</div>
        <div class="flow-block-sp text-center">
            <div class="flow-title">①応募・問い合わせ</div>
            <div class="flow-sentence">Webもしくはお電話からご応募・お問い合わせください。</div>
        </div>
        <img class="flow-arrow-img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/recruit/Polygon7_sp.png" >
        <div class="flow-block-sp text-center">
            <div class="flow-title">②業務説明・ヒアリング</div>
            <div class="flow-sentence">衣笠の事業所にてご面談とご説明を行います。また、ご希望の条件をお伺いし、随時サービスをご紹介します。</div>
        </div>
        <img class="flow-arrow-img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/recruit/Polygon7_sp.png" >
        <div class="flow-block-sp text-center">
            <div class="flow-title">③お仕事開始</div>
            <div class="flow-sentence">働きたい仕事が見つかり次第お仕事開始です。初回や困った時には、弊社社員も同行しますのでご安心ください。</div>
        </div>
    </div>
    <div class="footer-drawer_sp"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/recruit/drawer.png"></div>
</div>
<!-- ContactForm -->
<div id="contactForm" class="form-area pcview">
    <div class="text-center">
        <h2>form</h2>
    </div>
    <div class="text-center mt-3 mb-5 lp-caption">お問い合わせフォーム</div>
    <?php echo do_shortcode('[contact-form-7 id="81" title="採用ページ問い合わせ"]'); ?>
</div>
<div id="contactForm-sp" class="form-area spview">
    <div class="text-center">
        <h2>form</h2>
    </div>
    <div class="text-center mt-3 mb-5 lp-caption" style="font-size:6vw">お問い合わせフォーム</div>
    <div style="width: 85vw;margin: 0 auto;">
        <?php echo do_shortcode('[contact-form-7 id="81" title="採用ページ問い合わせ"]'); ?>
    </div>
</div>
<!-- company-->
<div class="company-area pcview">
    <div class="text-center">
        <h2>company</h2>
    </div>
    <div class="text-center mt-3 mb-5 lp-caption">会社概要</div>
    <div class="row" style="margin-right: 0;">
        <div class="col-5">
            <div class="row company-row">
                <div class="col-4 company-title">
                        事業所名
                </div>
                <div class="col-7 campany-info">
                    訪問介護事業所 ありがとう<br>
                    アールウィズ株式会社
                </div>
            </div>
            <div class="row company-row">
                <div class="col-4 company-title">
                    本社
                </div>
                <div class="col-7 campany-info">
                    〒231-0032<br>
                    神奈川県横浜市中区不老町1-6-10苗場ビル3F-A<br>
                    TEL:045-263-9431<br>
                    FAX:045-263-9432<br>
                    MAIL:info@rwiz-jp.comte
                </div>
            </div>
            <div class="row company-row">
                <div class="col-4 company-title">
                    横須賀支店
                </div>
                <div class="col-7 campany-info">
                    〒238-0031<br>
                    神奈川県横須賀市衣笠栄町1-3衣笠むらやまビル203<br>
                    TEL:046-874-8364<br>
                    FAX:046-874-8365<br>
                </div>
            </div>
        </div>
        <div class="col-7" style="padding: 0;">
            <img class="company-img" style="border-radius: 55px 0 0 55px;" src="<?php echo get_stylesheet_directory_uri(); ?>/img/recruit/business-2.jpg" >
        </div>
    </div>
</div>
<div class="company-area spview">
    <div class="text-center">
        <h2>company</h2>
    </div>
    <div class="text-center mt-3 mb-5 lp-caption">会社概要</div>
    <div class="text-center">
        <img class="company-img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/recruit/business-2.jpg" >
    </div>
    <div class="company-block">
        <div class="row" style="margin-left: 8vw;margin-top: 3vw;">
            <div class="col-4 company-title">
                事業所名
            </div>
            <div class="col-7 campany-info">
                訪問介護事業所 ありがとう<br>
                アールウィズ株式会社
            </div>
        </div>
        <div class="row" style="margin-left: 8vw;margin-top: 3vw;">
            <div class="col-4 company-title">
                本社
            </div>
            <div class="col-7 campany-info">
                〒231-0032<br>
                神奈川県横浜市中区不老町1-6-10苗場ビル3F-A<br>
                TEL:045-263-9431<br>
                FAX:045-263-9432<br>
                MAIL:info@rwiz-jp.comte
            </div>
        </div>
        <div class="row" style="margin-left: 8vw;margin-top: 3vw;">
            <div class="col-4 company-title">
                横須賀支店
            </div>
            <div class="col-7 campany-info">
                〒238-0031<br>
                神奈川県横須賀市衣笠栄町1-3衣笠むらやまビル203<br>
                TEL:046-874-8364<br>
                FAX:046-874-8365<br>
            </div>
        </div>
    </div>
</div>
<!-- footer-->
<div class="footer-area pcview">
    © 2022 houmonkaigojigyousyo arigatou
</div>
<div class="footer-area spview">
    <div class="text-center copy">
        © 2022 houmonkaigojigyousyo arigatou
    </div>
</div>

</body>
</html>