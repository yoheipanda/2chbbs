<?php
$username = $_POST["username"];
var_dump(3+60);

?>


<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2ちゃんねる掲示板</title>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
    <header>
        <h1 class="title ">2ちゃんねる掲示板</h1>
        <hr>
    </header>
    <!-- スレッドエリア -->
    <div class="threadWrapper">
        <div class="childWrapper">
                        <div class="threadTitle">
                            <span>[タイトル]</span>
                            <h1>2ちゃんねる掲示板をつくってみた</h1>
                        </div>
       
            <section>
                <article>
                    <div class="wrapper">
                        <div class="nameArea">
                            <span>名前：</span>
                            <p class="username">Shincode</p>
                            <time>:2023/6/15 14:20</time>
                        </div>
                        <p class="comment">手書きのコメントです。</p>
                    </div>
                </article>
                <form class="formWrapper" method="POST">
                    <div>
                        <input type="submit" value="書き込む">
                        <label>名前</label>
                        <input type="text" name="username">
                    </div>
                    <div>
                        <textarea class="commentTextArea"></textarea>
                    </div>
                </form>
            </section>
            
        </div>
    </div> 
</body>
</html>