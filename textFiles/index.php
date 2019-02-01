<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome to Cheese ACADEMY TOKYO</title>
    <meta name="desctiption" content="チーズの教養を身につけ世に広げる学問の都">
    <!-- cssファイルの読み込み -->
    <!-- Bootstrap4の適用 -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/nav.css">
    
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
        <!-- メインテーマ -->
        <div class="main-visual text-center">
            <h1 class="main-text text-center">セカイを変えるチーズを作ろう</h1>
        </div>
    <!-- コンテンツ概要 -->
    <section id="about" class="wrapper">
        <div class="about">
            <h2>About</h2>
            <h3 class="j-title">チーズアカデミーについて</h3>
            <p class="text-center">チーズアカデミーは、チーズ職人養成学校です。</p>
            <p class="text-center">チーズの素晴らしさを、自給自足を通じて、できるだけ多くの人に知っていただきたい。<br>
            そして、食卓にはいつもチーズがあった、あの頃の当たり前をこの手で取り戻したい。</p>
            <p class="text-center">そんな思いから、チーズ職人養成学校「チーズアカデミーTOKYO」は歩みを始めています。</p>
            <p class="text-center">卒業後、チーズ自給自足のバックアップはもちろんのこと、<br>
                    チーズ職人への就職・転職もサポートします。</p>
        </div>
        <div class="gallery wrapper">
            <ul>
                <li><img src="../kadaiImage/about_01.jpg" alt="buffe"></li>
                <li><img src="../kadaiImage/about_02.jpg" alt="firm"></li>
                <li><img src="../kadaiImage/about_03.jpg" alt="brother"></li>
                <li><img src="../kadaiImage/about_04.jpg" alt="pizza"></li>
            </ul>
        </div>
    </section>
    <main>
        <section id="course" class="course wrapper">
            <h2>Course</h2>
            <p class="text-center course_arrange">未経験からでもスタートができるよう、カリキュラムは多くの専門家や<br>
                現役チーズ職人のアドバイスのもと、作られました。</p>
            <div class="course_main_visual">
                <img src="../kadaiImage/course_01.jpg" alt="firm">
                <ul class="course_main_description">
                    <h2 class="course_title_right">本格的な農園を使った実地研修</h2>
                    <p>チーズアカデミーでは、本格的な農園を使った実地研修を<br>
                        行うことができます。プロとして活躍するチーズ職人も<br>
                        使用するような、広大で環境も整った農園を余すところ<br>
                        なく使い、卒業時には本格的なチーズを自分の力で作れる<br>
                        実践力の養成を目指します。</p>
                </ul>
            </div>
            <div class="course_main_visual">
                <ul class="course_main_description_left">
                    <h2 class="course_title_left">必要な知識もしっかりと取得</h2>
                    <p>チーズ作りには、しっかりとした食に関する知識が<br>
                        欠かせません。チーズアカデミーでは、一流講師陣による、<br>
                        チーズ作りに必要ないろはを余すところなく学べます。<br>
                        チーズそのものでなく、栄養学全般を学ぶことも<br>
                        可能ですので、チーズ以外への展開も夢ではないでしょう。</p>
                </ul>
                    <img class="course_main_visual_left" src="../kadaiImage/course_02.jpg" alt="teacher">
            </div>
            <div class="course_main_visual">
                    <img src="../kadaiImage/course_03.jpg" alt="buffe">
                <ul class="course_main_description">
                    <h2 class="course_title_right">卒業制作はティスティング審査あり</h2>
                    <p>チーズアカデミーでは最後の2ヶ月間で卒業制作を実施。<br>
                        卒業制作として、チーズ作りを実際に行います。卒業後、<br>
                        一般参加によるティスティング審査があるため、作り手の<br>
                        目線だけでなく、消費者の目線から、卒業制作作品としての<br>
                        チーズを、しっかりと評価いただくことができます。</p>
                </ul>
            </div>
        </section>
    </main>
    <section id="news">
        <div class="wrapper">
            <h2 class="news_title text-center">NEWS</h2>
            <p class="text-center">ニュース</p>
            <ul class="news_arrange">
                <li>
                    <div>
                        <a href="#"><img src="../kadaiImage/news_img.jpg" alt="pizza" class="news_img"></a>
                    </div>
                    <p class="news_date">2016/11/18</p>
                    <p class="news_description">チーズアカデミー卒業生のコスゲさんによる<br>
                        チーズだけをふんだんに使用した話題のピザ屋<br>
                        「Kosuge Pizza」が渋谷でオープンしました！</p>
                </li>
                <li class="arrange">
                    <div class="news_eyecatch">
                        <a href="#"><img src="../kadaiImage/news_img.jpg" alt="pizza" class="news_img"></a>
                    </div>
                    <p class="news_date">2016/11/18</p>
                    <p class="news_description">チーズアカデミー卒業生のコスゲさんによる<br>
                        チーズだけをふんだんに使用した話題のピザ屋<br>
                        「Kosuge Pizza」が渋谷でオープンしました！</p>
                </li>
                <li>
                    <div>
                        <a href="#"><img src="../kadaiImage/news_img.jpg" alt="pizza" class="news_img"></a>
                    </div>
                    <p class="news_date">2016/11/18</p>
                    <p class="news_description">チーズアカデミー卒業生のコスゲさんによる<br>
                        チーズだけをふんだんに使用した話題のピザ屋<br>
                        「Kosuge Pizza」が渋谷でオープンしました！</p>
                </li>
            </ul>
                <a href="#" target="_blank" class="btn">MORE</a>
        </div>
    </section>
    <!-- アクセス -->
    <section id="access" class="wrapper access_bgc">
        <h2 class="access_title">Access</h2>
        <p class="text-center">会社情報</p>
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d3241.4101232851067!2d139.7125179549235!3d35.66690229415201!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1z6KGo5Y-C6YGT!5e0!3m2!1sja!2sjp!4v1548323272171" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        <div class="place_box">
            <div class="place">
                    <p class="place_title">学校名</p>
                    <p class="place_detail">チーズアカデミーTOKYO</p>
                </div>
                <div class="place">
                    <p class="place_title">事務所所在地</p>
                    <p class="place_detail">〒107-0061東京都港区北青山3-5-6 青朋ビル2F</p>
                </div>
                <div class="place"> 
                    <p class="place_title">TEL</p>
                    <p class="place_detail">03-5413-5045</p>
                </div>
                <div class="place">
                    <p class="place_title">FAX</p>
                    <p class="place_detail">03-5413-5046</p>
                </div>
                <div class="place">
                    <p class="place_title">MAIL</p>
                    <p class="place_detail place_arrange">dummy@cheeseacademy.tokyo</p>
                </div>
        </div>
        
    </section>
    <!-- お問合せフォーム -->
    <section id=contact>
        <div class="form_wrapper">
            <h2 class="contact_title text-center">Contact</h2>
            <p class="j-title text-center contact_j_arrange">説明会お申し込み・お問い合わせ</p>
            <p class="text-center">ぜひ1度、足を運んでみませんか。説明会は随時開催中。<br>
                その他、お問い合わせもお気軽にどうぞ。お待ちしております。</p>
            
            <p class="text-center contact_arrange contact_j_desctiption">※チーズアカデミーは実際には存在しません。<br>
            間違っても問い合わせしないようお願いいたします。</p>
            <!-- actionは送信先ファイルを指定。POSTはセキュリティ対策 -->
            <form action="#" method="POST"> 
                <dl class="form_inner">
                    <dt class="form_title">名前</dt>
                    <dd class="form_item"><input type="text" name="name" class="box_space"></dd>
                </dl>
                <dl class="form_inner">
                    <dt class="form_title">カナ</dt>
                    <dd class="form_item"><input type="text" name="email" class="box_space"></dd>
                </dl>
                <dl class="form_inner">
                    <dt class="form_title">メールアドレス</dt>
                    <dd class="form_item"><input type="email" name="" id="" class="box_space"></dd>
                </dl>
                <dl class="form_inner">
                    <dt class="form_title">チーズアカデミーを<br>知ったきっかけ</dt>
                    <dd class="form_item">
                        <select name="opportunity" id="">
                            <option value="google検索">google検索</option>
                            <option value="SNS">SNS</option>
                            <option value="紹介">紹介</option>
                            <option value="たまたま通りかかった">たまたま通りかかった</option>
                            <option value="その他">その他</option>
                            </dd>
                        </select>
                </dl>
                <dl class="form_inner">
                    <dt class="form_title check_radio">志望動機選択肢</dt>
                    <dd class="form_item">
                        <!-- valueで送信する値の指定。labelで文字をクリックしてもOKにする -->
                        <label for="entrepreneur" class="form_label"><input type="radio" name="kind" id="entrepreneur" value="起業をしたい">起業をしたい</label>
                        <label for="job" class="form_label"><input type="radio" name="kind" id="job" value="チーズ系企業に就職・転職したい">チーズ系企業に就職・転職したい</label>
                        <label for="work" class="form_label"><input type="radio" name="kind" id="work" value="チーズと関わる仕事をしており、仕事に生かしたい">チーズと関わる仕事をしており、仕事に生かしたい</label>
                        <label for="other" class="form_label"><input type="radio" name="kind" id="other" value="チーズの教養を身につけたい">チーズの教養を身につけたい</label>
                    </dd>
                </dl>
                <dl class="form_inner">
                    <dt class="form_title">詳細</dt>
                    <dd class="form_item"><textarea name="detail" id="" cols="50" rows="10" class="box_space"></textarea></dd>
                </dl>
                <input class="btn submit_arrange" type="submit" value="送信">
            </form>
        </div>   
    </section>
    <footer>
        <div class="footer_wrapper">
            <small><p class="text-center">copyrights 2016 Cheeese Academy Tokyo All RIghts Reserved.</p> </small>
        </div>
    </footer>
<!-- Bootstrap4の適用 -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
<script src="../main.js"></script>
</html>