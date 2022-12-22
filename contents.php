<html>
 <head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>ポートフォリオ -コンテンツ-</title>
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.4/css/all.css">
 <link rel="stylesheet" href="css/contents.css">
 <link rel="stylesheet" href="css/header.css">
 <link rel="stylesheet" href="css/footer.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 </head>
 <body>
  <?php include "header.html" ?>
  <div class="menu-contents wrapper">
   <h2 class="page-title">Contents</h2>
   <p>
       今まで作成した成果物をまとめてみました。ぜひご覧ください。
   </p>
  </div>
  <div class="btn_scrolltop">
   <a href=""></a>
  </div>
  <div class="grid">
   <div class="item item-fadein">
    <div class="item-title">
     <img class="item-image" src="images/contents/contents-001.jpg">
     <h2 class="item-caption">本ページ</h2>
    </div>
    <div class="item-description">
     <p class="item-caption">使用言語等</p>
     <p>HTML、CSS、JavaScript、jQuery、PHP</p>
     <p class="item-caption">製作時間</p>
     <p>約2週間</p>
     <p class="item-caption">製作者コメント</p>
     <p>お問い合わせ機能付きのホームページをPHP等を用いて作成しました。</p>
     <p>コンテンツ読み込み時のエフェクト等にも配慮しました。</p>
     <p>また、一部バックエンドの情報を漏らさないようにgitignoreを用いて管理しています。</p>
    </div>
    <div class="item-link">
    <button type=“button” onclick="location.href='https://github.com/daicharn/website_main'">GitHub</button>
    <button type=“button” onclick="location.href='index.php'">リンク</button>
    </div>
   </div>
   <div class="item">
    <div class="item-title">
     <img class="item-image" src="images/contents/contents-006.jpg">
     <h2 class="item-caption">ポーカーゲーム</h2>
    </div>
    <div class="item-description">
     <p class="item-caption">使用言語等</p>
     <p>HTML、CSS、JavaScript</p>
     <p class="item-caption">製作時間</p>
     <p>約1週間</p>
     <p class="item-caption">製作者コメント</p>
     <p>一般的なポーカーゲームを作成しました</p>
     <p>トランプが降ってきたり役が揃うと輝いたりといったアニメーションを加えることも行いました。</p>
     <p>現在は完全ランダムに山札を生成しているので将来的には役の出現率の調整なども行えるようにしてみたいです。</p>
    </div>
    <div class="item-link">
    <button type=“button” onclick="location.href='https://github.com/daicharn/CasinoGame'">GitHub</button>
    <button type=“button” onclick="location.href='product/casino_game/poker/poker.html'">リンク</button>
    </div>
   </div>
   <div class="item">
    <div class="item-title">
     <img class="item-image" src="images/contents/contents-004.jpg">
     <h2 class="item-caption">麻雀計算ツール</h2>
    </div>
    <div class="item-description">
     <p class="item-caption">使用言語等</p>
     <p>HTML、CSS、JavaScript</p>
     <p class="item-caption">製作時間</p>
     <p>約1ヶ月半</p>
     <p class="item-caption">製作者コメント</p>
     <p>卓上遊戯として知られる麻雀に関する手牌の役・点数計算ができるツールを作成しました</p>
     <p>手牌という配列の状態から面子（持っている牌をブロック化したもの）に分ける処理などに再帰処理を用い、処理速度等についても考慮しました。</p>
     <p>将来的には役から手牌を生成したり、生成された手牌の役や点数をユーザが考えて当てるものも作りたいと思っています。</p>
    </div>
    <div class="item-link">
    <button type=“button” onclick="location.href='https://github.com/daicharn/IsTheOrderaMahjong'">GitHub</button>
    <button type=“button” onclick="location.href='product/mahjong_hantei/mahjong_keisan/keisan.html'">リンク</button>
    </div>
   </div>
   <div class="item">
    <div class="item-title">
     <img class="item-image" src="images/contents/contents-005.jpg">
     <h2 class="item-caption">麻雀待ち当てツール</h2>
    </div>
    <div class="item-description">
     <p class="item-caption">使用言語等</p>
     <p>HTML、CSS、JavaScript</p>
     <p class="item-caption">製作時間</p>
     <p>約1週間</p>
     <p class="item-caption">製作者コメント</p>
     <p>卓上遊戯として知られる麻雀に関する聴牌（アガリまであと1歩手前の状態）時の待ち当てツールを作成しました</p>
     <p>上記の計算ツールで作成した関数などを再利用することを念頭に置きながら作成しました。そのため、比較的短時間で作成できたと思います。</p>
     <p>自分で問題を作成できたり、手牌の種類を変更したりといった追加機能に関しても一般的な開発における改修依頼などを意識して作成しました。</p>
    </div>
    <div class="item-link">
    <button type=“button” onclick="location.href='https://github.com/daicharn/IsTheOrderaMahjong'">GitHub</button>
    <button type=“button” onclick="location.href='product/mahjong_hantei/mahjong_machiate/machiate.html'">リンク</button>
    </div>
   </div>
   <div class="item">
    <div class="item-title">
     <img class="item-image" src="images/contents/contents-002.jpg">
     <h2 class="item-caption">三目並べ</h2>
    </div>
    <div class="item-description">
     <p class="item-caption">使用言語等</p>
     <p>HTML、CSS、JavaScript</p>
     <p class="item-caption">製作時間</p>
     <p>約1週間</p>
     <p class="item-caption">製作者コメント</p>
     <p>AIプログラミングの初歩的なものとして作成してみました。</p>
     <p>ミニマックス法、アルファベータ法といったアルゴリズムを自力でプログラミングしました。</p>
     <p>AIが導き出した解が複数存在する場合、ランダムに手を打ってきたりなどワンパターンにならないような工夫も施しました。</p>
    </div>
    <div class="item-link">
    <button type=“button” onclick="location.href='https://github.com/daicharn/tictactoe_js'">GitHub</button>
    <button type=“button” onclick="location.href='product/tictactoe'">リンク</button>
    </div>
   </div>
   <div class="item">
    <div class="item-title">
     <img class="item-image" src="images/contents/contents-003.jpg">
     <h2 class="item-caption">計算機</h2>
    </div>
    <div class="item-description">
     <p class="item-caption">使用言語等</p>
     <p>HTML、CSS、JavaScript</p>
     <p class="item-caption">製作時間</p>
     <p>1週間</p>
     <p class="item-caption">製作者コメント</p>
     <p>Javascriptを用いたプログラミングの練習として作成しました。</p>
     <p>一部ボタンが機能しませんが、現時点では基本的な四則演算などができるようになっています。</p>
    </div>
    <div class="item-link">
    <button type=“button” onclick="location.href=''">GitHub</button>
    <button type=“button” onclick="location.href='product/calculator'">リンク</button>
    </div>
   </div>
  </div>
  <?php include "footer.html" ?>
 </body>
 <script type="text/javascript" src="js/contents.js"></script>
</html>