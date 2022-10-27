<html>
 <head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>ポートフォリオ -お問い合わせ-</title>
 <link rel="stylesheet" href="css/info.css">
 <link rel="stylesheet" href="css/header.css">
 <link rel="stylesheet" href="css/footer.css">
 <script type="text/javascript" src="js/info.js"></script>
 </head>
 <body>
   <?php include "header.html" ?>
   <div id="contact" class="big-bg">
   <h2 class="page-title">Contact</h2>
    <form action="infomailsend.php" method="post" onsubmit="return checkSubmit()">
    <div>
        <label for="name">名前・ニックネーム</label>
        <input type="text" class="info_box" id="name" name="name" required="required">
    </div>
    <div>
        <label for="email">メールアドレス</label>
        <input type="mail" class="info_box" id="email" name="email" required="required">
    </div>
    <div>
    <label for="message">お問い合わせ内容</label>
        <textarea class="info_box" id="message" name="message" required="required"></textarea>
    </div>
    <input type="submit" id="btn_submit" value="送信">
    </form>
    <p class="info-message">
    <?php 
    //メッセージの受け取り
    session_start();
    //連打検知用のフラグ
    $_SESSION['flag_send'] = true;
    if(isset($_SESSION['info_msg'])){
        echo $_SESSION['info_msg'];
        unset($_SESSION['info_msg']);
    }
    ?>
    </p>
    <br>
  </div>
  <?php include "footer.html" ?>
 </body>
</html>