<!DOCTYPE html>
<html lang="ja">

<head>
  <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NL3HVSK"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>訪問介護事業所 ありがとう</title>
  <meta name="description" content="あなたらしく働ける訪問介護の新しい常識を作っていく">
  <!-- adobe fonts -->
  <script>
    (function (d) {
      var config = {
        kitId: 'bbw6gbb',
        scriptTimeout: 3000,
        async: true
      },
        h = d.documentElement, t = setTimeout(function () { h.className = h.className.replace(/\bwf-loading\b/g, "") + " wf-inactive"; }, config.scriptTimeout), tk = d.createElement("script"), f = false, s = d.getElementsByTagName("script")[0], a; h.className += " wf-loading"; tk.src = 'https://use.typekit.net/' + config.kitId + '.js'; tk.async = true; tk.onload = tk.onreadystatechange = function () { a = this.readyState; if (f || a && a != "complete" && a != "loaded") return; f = true; clearTimeout(t); try { Typekit.load(config) } catch (e) { } }; s.parentNode.insertBefore(tk, s)
    })(document);
  </script>
  <meta property="og:title" content="ページの タイトル">
  <meta property="og:description" content="ページの説明文">
  <meta property="og:type" content="ページの種類websiteとか">
  <meta property="og:url" content="ページの URL">
  <meta property="og:image" content="サムネイル画像の URL">
  <meta property="og:site_name" content="サイト名">
  <meta name="twitter:card" content="カードの種類summary">
  <meta name="twitter:site" content="@ユーザー名">
  <?php wp_head(); ?>
  <!-- googleSearchConsole -->
  <meta name="google-site-verification" content="ASxxJ-KUzEneFTJlQ62D-N0Mnn_ZKbS6yQL0AsLzGcg" />

 <?php if(is_page( 'recruiting' )){?>
  <!-- RECRUITページで使用 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/recruiting.css">
 <?php }?>
</head>

<body>
  <!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-NL3HVSK');</script>
  <!-- End Google Tag Manager -->

  <!-- ヘッダー RECRUITページでは非表示-->
 <?php if(!is_page( 'recruiting' )){?>
  <header class="header">
    <h1 class="header-logo">
      <a href="<?php echo esc_url(home_url()); ?>">
        <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="ロゴ画像">
      </a>
    </h1>
    <nav class="global-nav">
      <ul class="global-nav-list">
        <li class="global-nav-item">
          <a href="<?php echo esc_url(home_url()); ?>#greeting">ご挨拶<span>Greeting</span></a>
        </li>
        <li class="global-nav-item">
          <a href="<?php echo esc_url(home_url()); ?>#business">事業所紹介<span>Business</span></a>
        </li>
        <li class="global-nav-item">
          <a href="<?php echo esc_url(home_url()); ?>#homevisitCare">訪問介護について<span>Homevisit Care</span></a>
        </li>
        <li class="global-nav-item">
          <a href="<?php echo esc_url(home_url()); ?>#service">サービス<span>Service</span></a>
        </li>
        <li class="global-nav-item">
          <a href="<?php echo esc_url(home_url()); ?>#recruit">採用情報<span>Recruit</span></a>
        </li>
        <li class="global-nav-item">
          <a href="<?php echo esc_url(home_url()); ?>#report">活動レポート<span>Report</span></a>
        </li>
        <li class="global-nav-item">
          <a href="<?php echo esc_url(home_url()); ?>#contact">お問い合わせ<span>Contact</span></a>
        </li>
      </ul>
    </nav>

    <!-- ハンバーガー -->
    <div class="drawer-icon">
      <button class="drawer-bars">
        <span class="drawer-bar"></span>
        <span class="drawer-bar"></span>
        <span class="drawer-bar"></span>
      </button>
    </div>
    <!-- ドロワー -->
    <div class="drawer-content">
      <a href="<?php echo esc_url(home_url()); ?>">
        <div class="drawer-logo">
          <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="">
        </div>
      </a>
      <ul class="drawer-content-list">
        <li><a href="<?php echo esc_url(home_url()); ?>#greeting" class="drawer-content-item">ご挨拶<span>Greeting</span></a></li>
        <li><a href="<?php echo esc_url(home_url()); ?>#business" class="drawer-content-item">事業所紹介<span>Business</span></a></li>
        <li><a href="<?php echo esc_url(home_url()); ?>#homevisitCare" class="drawer-content-item">訪問介護について<span>Homevisit Care</span></a></li>
        <li><a href="<?php echo esc_url(home_url()); ?>#service" class="drawer-content-item">サービス<span>Service</span></a></li>
        <li><a href="<?php echo esc_url(home_url()); ?>#recruit" class="drawer-content-item">採用情報<span>recruit</span></a></li>
        <li><a href="<?php echo esc_url(home_url()); ?>#report" class="drawer-content-item">活動レポート<span>Report</span></a></li>
        <li><a href="<?php echo esc_url(home_url()); ?>#contact" class="drawer-content-item">お問い合わせ<span>Contact</span></a></li>
      </ul>
      <div class="drawer-img">
        <img src="<?php echo get_template_directory_uri(); ?>/img/drawer.png" alt="">
      </div>
    </div>
  </header>
  <?php }?>
