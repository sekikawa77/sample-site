<footer class="footer"> 
      <div class="inner">
        <div class="footer__item">
          <p class="footer__adress">株式会社〇〇〇〇<br>〒000-0000 住所テキストテキストテキストテキストテキストテキストテキスト</p>

          <div class="footer__navs">
            <ul class="footer__links">
              <li><a href="<?php echo home_url('/'); ?>">ホーム</a></li>
              <li><a href="<?php echo home_url('/features/'); ?>">特徴</a></li>
            </ul>
            <ul class="footer__links">
              <li><a href="<?php echo home_url('/service/'); ?>">サービス</a>
                <ul class="footer__links__sub">
                  <li><a href="<?php echo home_url('/service/service-01/'); ?>">サービス1サービス1</a></li>
                  <li><a href="<?php echo home_url('/service/service-01/'); ?>">サービス2サービス2</a></li>
                  <li><a href="<?php echo home_url('/service/service-01/'); ?>">サービス3サービス3</a></li>
                  <li><a href="<?php echo home_url('/service/service-01/'); ?>">サービス4サービス4</a></li>
                  <li><a href="<?php echo home_url('/service/service-01/'); ?>">サービス5サービス5</a></li>
                </ul>
              </li>
            </ul>
            <ul class="footer__links">
              <li><a href="<?php echo home_url('/case/'); ?>">事例</a></li>
              <li><a href="<?php echo home_url('/event/'); ?>">セミナー／イベント</a></li>
              <li><a href="<?php echo home_url('/column/'); ?>">コラム</a></li>
              <li><a href="#">資料ダウンロード</a></li>
            </ul>
            <ul class="footer__links">
              <li><a href="<?php echo home_url('/company/'); ?>">会社情報</a></li>
              <li><a href="<?php echo home_url('/news/'); ?>">お知らせ</a></li>
              <li><a href="<?php echo home_url('/privacy/'); ?>">プライバシーポリシー</a></li>
              <li><a href="<?php echo home_url('/sitemap/'); ?>">サイトマップ</a></li>
            </ul>
          </div>
        </div>

        <p class="footer__copy"><small>© 2022 xxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</small></p>
      </div>
    </footer>

    <?php wp_footer(); ?>
  </body>
</html>