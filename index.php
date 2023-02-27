<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>4eachblog 掲示板</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>

    <body>
        <?php
        mb_internal_encoding("utf8");
        $pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","root");
        $stmt = $pdo->query("select * from 4each_keijiban");
        ?>

        <a href="index.html"><img src="4eachblog_logo.jpg" class="logo_img"></a>
        <ul class="menu">
            <a href=""><li>トップ</li></a>
            <a href=""><li>プロフィール</li></a>
            <a href=""><li>4eachについて</li></a>
            <a href=""><li>登録フォーム</li></a>
            <a href=""><li>問い合わせ</li></a>
            <a href=""><li>その他</li></a>
        </ul>
        <div class="main_container">
                
            <div class="contents">
                <h1 class="title">プログラミングに役立つ書籍</h1>
                <form method="post" action="insert.php">
                    <h2>入力フォーム</h2>
                    <div>
                        <label>ハンドルネーム</label>
                        <br>
                        <input type="text" required name="handlename" size="50">
                    </div>
                    <div>
                        <label>タイトル</label>
                        <br>
                        <input type="text" name="title" size="50">
                    </div>
                    <div>
                        <label>コメント</label>
                        <br>
                        <textarea name="comments" required rows="5" cols="50"></textarea>
                    </div>
                    <div><button type="submit" class="submit">送信する</button></div>

                </form>
                <?php
                while($row = $stmt->fetch()){
                echo "<div class='kiji'>";
                    echo "<h3>".$row['title']."</h3>";
                    echo "<div class='comments'>";
                        echo $row['comments'];
                        echo "<div class='handlename'>posted by".$row['handlename']."</div>";
                    echo "</div>";
                echo "</div>";
                }
                ?>
            </div>
        </div>
        <div class="side_menu">
            <div class="side_title">人気の記事</div>
            <ul>                
                <li>PHPおすすめ本</li>
                <li>PHP MyAdminの使い方</li>
                <li>今人気のエディタ TOP5</li>
                <li>HTMLの基礎</li>
            </ul>
            <div class="side_title">オススメリンク</div>
            <ul>
                <li>インターノウス株式会社</li>
                <li>XAMPPのダウンロード</li>
                <li>Bracketsのダウンロード</li>
            </ul>
            
            <div class="side_title">カテゴリ</div>
            <ul>    
                <li>HTML</li>
                <li>PHP</li>
                <li>MySQL</li>
                <li>JavaScript</li>
            </ul>
            
        </div>
        <footer>
        
            <p>copyright ©︎ internous | 4each blog the which provides A to A about probramming.</p>
    
        </footer>

    </body>
</html>