

(function ($, window, document) {
    'use strict';

    var $win = $(window);
    var $doc = $(document);
    var $body = $('body');
    var scrollElement = $(document.scrollingElement || /* IE */ $('html'));
    

    //sp-navi
    (function () {
        var $header = $('.header');
        var $headerButton = $('.sp__btn');
        var $globalNavigation = $('.header__nav');
        var isActive = 'is-active';
        var isOpen = 'is-open';
        var flag = false;

        $headerButton.on('click', function () {
          var $this = $(this);
    
          if (flag === false) {
            $body.addClass(isActive);
            $this.next().addClass(isOpen);
            $this.addClass(isActive).addClass(isActive);

            flag = true;
          } else {
            $body.removeClass(isActive);
            $this.next().removeClass(isOpen);
            $this.removeClass(isActive).removeClass(isActive);

            flag = false;
          }
        });


        $win.on('customMatchMedia', function (event, bool) {
          if (!bool) {
            //for pc
            $body.removeClass(isActive);
            $globalNavigation.removeAttr('style').removeClass(isOpen);
            $headerButton.removeClass(isActive).removeClass(isActive);
          } 
        });
    }());

    // メディアクエリのイベントセット
    (function () {
        var mediaQueryList = window.matchMedia('(max-width: 767px)');

        // イベントリスナの定義
        function mediaChange(mql) {
            // カスタムイベントを呼び出す
            $win.trigger('customMatchMedia', [mql.matches]);
        }
        // MediaQueryListにイベントリスナを登録
        mediaQueryList.addListener(mediaChange);

        // 初期状態の評価のためイベントリスナを一度実行
        mediaChange(mediaQueryList);
    }());
}(window.jQuery, window, document));