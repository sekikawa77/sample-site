<!DOCTYPE html>
<html lang="ja">
  <head> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/asset/css/master.min.css">
    <script src="<?php echo get_template_directory_uri();?>/asset/js/jquery-3.6.0.min.js" defer></script>
    <script src="<?php echo get_template_directory_uri();?>/asset/js/run.js" defer></script>
    <title>sample-site</title>
    <meta name="description" content="">
    <?php wp_head();?>
  </head>
  <body>
    <header class="header">
      <p class="header__logo">
        <a href="<?php echo home_url('/'); ?>"><img src="<?php echo get_template_directory_uri();?>/asset/images/logo.png" alt=""></a>
      </p>
      <button class="sp__btn" type="button">
        <span></span>
      </button>
      <nav class="header__nav">
        <ul> 
          <li><a href="<?php echo home_url('/'); ?>">ホーム </a></li>
          <li><a href="<?php echo home_url('/features/'); ?>">特徴 </a></li>
          <li><a href="<?php echo home_url('/service/'); ?>">サービス </a></li>
          <li><a href="<?php echo home_url('/case/'); ?>">事例 </a></li>
          <li><a href="<?php echo home_url('/event/'); ?>">セミナー／イベント </a></li>
          <li><a href="<?php echo home_url('/company/'); ?>">会社情報 </a></li>
        </ul>
      </nav>

      <div class="header__primary">
        <p class="header__tel roboto">0123-456-7890<span>平日00:00〜00:00</span></p>
        <p class="header__btn btn-01"><a href="#"><span>お役立ち資料</span></a></p>
        <p class="header__btn btn-02"><a href="#"><span>お問い合わせ</span></a></p>
      </div>
    </header>