<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Apply Bootstrap4 -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/nav.css">
    <link rel="stylesheet" href="../css/recommendCheese.css">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <!-- ヘッダー -->
    <!-- ナビゲーションバー -->
    <nav class="nav-main">
        <div class="btn-toggle-nav" onclick="toggleNav()"></div>
        <div class="logo"><a href="index.php"><img src="../kadaiImage/header_logo.png" alt="logo" style="width:200px; height: 50px;"></a></div>
        <ul>
            <li><a href="#about">ABOUT</a></li>
            <li><a href="#course">COURSE</a></li>
            <li><a href="#news">NEWS</a></li>
            <li><a href="#access">ACCESS</a></li>
            <li><a href="#contact">CONTACT</a></li>
        </ul>
    </nav>
    
    
    <aside class="nav-sidebar">
        <ul>
            <li><span>コンテンツ</span></li>
            <li><a href="#">チーズを知ろう</a></li>
            <li><a href="#">チーズのビデオを観る</a></li>
            <li><a href="recommendCheese.php">オススメのチーズ</a></li>
            <li><a href="#">サイトの作成者について</a></li>
            <li><a href="#">チーズアカデミーに入学する</a></li>
        </ul>
    </aside>
    <main>
        <section>
            <div class="wrapper-title">
                <div class="main-img">
                    <h2 class="main-title">オススメの<span class="yellow">チーズ<span></h1>
                </div>
            </div>
        </section>
        <!-- sectionにclassは適用されない? -->
        <section>
            <div class="wrapper-reco">
                <h2 class="title-reco">その日の気分に合わせたチーズとワインをセレクト</h2>
            </div>
            <div class="box-wrapper" style="display: flex; justify-content: center; margin: 30px 0; align-items: flex-end;
    }">
                <div>
                    <p><img src="../kadaiImage/cheese2.jpg" alt="チーズ" class="cheese-picture"></p>
                </div>
                <div>
                    <p class="contents-cheese">チーズ好きの為の、チーズ好きによる、チーズの為のページ<br>
                    チーズ好きの為の、チーズ好きによる、チーズの為のページ<br>
                    チーズ好きの為の、チーズ好きによる、チーズの為のページ<br>
                    チーズ好きの為の、チーズ好きによる、チーズの為のページ<br>
                    </p>
                </div>
            </div>
            <!-- clsssが適用されない -->
            <div class="box-wrapper" style="display: flex; justify-content: center; margin: 30px 0; align-items: flex-end;
    }">
                <div class="contents-wine">
                    <p>ワイン好きの為の、ワイン好きによる、ワインの為のページ<br>
                    ワイン好きの為の、ワイン好きによる、ワインの為のページ<br>
                    ワイン好きの為の、ワイン好きによる、ワインの為のページ<br>
                    ワイン好きの為の、ワイン好きによる、ワインの為のページ<br>
                    </p>
                </div>
                <div>
                    <p><img src="../kadaiImage/cheese-wine.jpg" alt="ワイン" class="wine-picture"></p>
                </div>
            </div>
        </section>
        <!-- 曜日からオススメのチーズとワインを表示 -->
        <section class="wrapper-reco">
            <?php
            // 曜日を取得
            $date = date('w');
            // 曜日を配列に格納
            $week = ['日', '月', '火', '水', '木', '金', '土'];
            
            // チーズを表示
            echo '<div>';
                echo '<h3 class="today-recommendation text-center">'.$week[$date].'曜日のおすすめ</h3>';
            echo '</div>';

            echo '<div>';
                if ($date == 0){
                    echo '<p class="text-center cheese-name">カマンベール</p>';
                    echo '<div class="cheese-box">';
                        echo '<p class="text-center"><img src="../kadaiImage/kamanbe-ru.jpg" alt="カマンベールの画像" class="recommended-cheese"></p>';
                        echo '<p class="cheese-description">外側に白色のカビをつけて熟成させた<br>軟らかいナチュラルチーズ。<br>フランス北西部にあるノルマンディーの<br>カマンベール村の原産。</p>';
                    echo '</div>';
                }elseif($date == 1){
                    echo '<h3 class="text-center cheese-name">ゴルゴンゾーラ</h3>';
                    echo '<div class="cheese-box">';
                        echo '<p class="text-center"><img src="../kadaiImage/cheese2.jpg" alt="チーズの盛り合わせ" class="recommended-cheese"></p>';
                        echo 'xxxxxxxxxxxxxxx';
                    echo '</div>';
                }elseif($date == 2){
                    echo 'ブリードモー';
                    echo '<p></p>';
                    echo'xxxxxxxxxxxx';
                }elseif($date == 3){
                    echo 'パヴェダフィノア';
                    echo '<p></p>';
                    echo 'xxxxxxxx';
                }elseif($date == 4){
                    echo 'ラングル';
                    echo '<p></p>';
                    echo 'xxxxxxx';
                }elseif($date == 5){
                    echo 'マンステール';
                    echo '<p></p>';
                    echo 'xxxxxxxx';
                }elseif($date == 6){
                    echo 'パルミジャーノレッジャーノ';
                    echo '<p></p>';
                    echo 'xxxxxxxxx';
                }else{
                    echo 'エラー：日付が取得できませんでした';
                }
            echo '</div>'
            ?>

            <div>
                <h3 class="text-center wine-recommendation">本日のワイン</h3>
                <div　class="wine-wrapper">
                    <?php
                    $day = date('d');

                    if ($day/2 == 1){
                        echo '<h3 class="text-center wine-name">白ワイン</h3>';
                        echo '<div class="wine-box">';
                            echo '<p class="wine-description">白ワイン（しろワイン）もしくは白葡萄酒は、<br>麦わら色、黄緑色、または黄金色を持つワインである。<br>任意の色の皮のブドウを用い、<br>皮を取り除いた非着色の果肉部分の<br>アルコール発酵することによって製造される。<br>白ワインは少なくとも2500年前から存在している。</p>';
                            echo '<p class="text-center recommended-wine"><img src="../kadaiImage/white-wine.jpg" alt="白ワインの画像" class="recommended-wine"></p>';
                        echo '</div>';
                    }else{
                        echo '<h3 class="text-center wine-name">赤ワイン</h3>';
                        echo '<div class="wine-box">';
                            echo '<p class="wine-description">赤ワインは、黒色のブドウ品種から作るワインの種類である。<br>ワインの色は、若いワインに典型的な<br>強い紫色から熟したワインの赤れんが色、<br>さらに古いものの茶色まで様々である。</p>';
                            echo '<p class="text-center recommended-wine"><img src="../kadaiImage/red-wine.jpg" alt="赤ワインの画像" class="recommended-wine"></p>';
                        echo '</div>';
                    }
                    ?>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <div class="footer_wrapper">
            <small><p class="text-center">copyrights 2016 Cheeese Academy Tokyo All RIghts Reserved.</p> </small>
        </div>
    </footer>
</body>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<script src="../main.js"></script>
</html>