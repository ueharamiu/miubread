    <!-- jQuery -->
    <script src="https:ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> <!-- 先に jQuery を読み込む -->
    <script type="text/javascript">
    $(function() {
      $('#nav-input').click(function() {
        $(this).toggleClass('active');

        if($(this).hasClass('active')) {
          $('.ham_line').addClass('active');
          $('body').addClass('overflowHidden');
        } else {
          $('.ham_line').removeClass('active');
          $('body').removeClass('overflowHidden');
        }
      });
    });
    </script>
  

    <body>
      <div id="header">
        <nav>
          <h1 class="logo"><a href="index.html"><img src="images/logo.svg" alt="Miu Bread ロゴ"></a></h1>
            <div id="nav-drawer">
              <input id="nav-input" type="checkbox" class="nav-unshown">
              <label id="nav-open" for="nav-input">
                <span class="ham_line ham_line1"></span>
                <span class="ham_line ham_line2"></span>
                <span class="ham_line ham_line3"></span>
              </label>
              <label class="nav-unshown" id="nav-close" for="nav-input"></label>
              <div id="nav-content">
                <ul class="main-nav">
                  <li><a href="#">こだわり</a></li>
                  <li><a href="#">お店の特徴</a></li>
                  <li><a href="#">商品メニュー</a></li>
                  <li><a href="#">お知らせ</a></li>
                  <li><a href="#">店舗情報</a></li>
                  <li><a href="#">お問い合わせ</a></li>
                </ul>
              </div> <!-- #nav-content -->
            </div> <!-- #nav-drawer -->
        </nav>
      </div> <!-- header -->