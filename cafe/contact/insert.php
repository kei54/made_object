<?php
mb_internal_encoding("utf8");

$pdo=new PDO("mysql:dbname=contact;host=localhost;",'root','root');
$pdo->exec("insert into contactform(name,mail,age,comments)
values('".$_POST['name']."','".$_POST['mail']."','".$_POST['age']."','".$_POST['comments']."');");

?>


<!DOCTYPE html>
<html lang="ja">
    
    
    <head>
        <meta charset="utf-8">
        
         <title>お問い合わせ</title>
        
        <link rel="stylesheet" type="text/css" href="style4.css">
        
    </head>
    
    <body>
        
         <p><img src="../logo.jpg" alt="写真" class="pic1"></p>
        
        <header id="list">
        <nav>
            <ul class="manu">
                
                <li><a href="../index.html">ホーム</a></li>
                <li><a href="../menu/index3.html">メニュー</a></li>
                <li><a href="index2.html">お問い合わせ</a></li>
            </ul>
        </nav>
        
        </header>
            
    
    <h1>お問い合わせ</h1>
    
    <div class="confirm">
    <p>お問い合わせありがとうございました。</p>
    
        
        <form action="../index.html">
                <input type="submit" class="button3" value="戻る">
            </form>
        
    </div>
    
        
        <footer>○○○カフェ　All Rights Reserved.</footer>
    
    </body>
    </html>