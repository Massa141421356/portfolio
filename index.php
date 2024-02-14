<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/mystyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <script src="<?php echo get_template_directory_uri(); ?>/app.js" defer></script>
    <?php wp_head(); ?>
</head>
<body>
    <!--Hero section-->

    <div class="hero">
        <nav>
            <h2 class="logo"><?php bloginfo('name'); ?></h2>
            <ul>
                <li><a href="https://twitter.com/sumiyan_toeic"><i class="fa-brands fa-x-twitter"></i></a></li>
                <li><a href="https://note.com/super_hosta562/n/n6526b372de67">有料コンテンツ</a></li>
                <li><a href="#about">本サイトについて</a></li>
                <li><a href="https://masapon14.com/contact-toiawase" class="btn">お問い合わせ</a></li>
            </ul>

            
        </nav>

       
    </div>

    <div class="title">
        <h1>Change</h1>
        <h1>your</h1>
        <h1>thinking</h1>
    </div>

    <!--about-->

    <section id="about" class="wrapper">
        <h2 class="sec-title">About me and this site</h2>
            <div class="intro">
                <img src="<?php echo get_template_directory_uri(); ?>/images/intro.png" alt="#" class="faceimg">
                <p class="introsentence">こんにちは、すみやんと申します。<br><br>
                    普段はTOEICのスコアアップに必要な「得点を上げる考え方」について発信しています。<br><br>
                    私自身、勉強開始時は400点台だったのですが<br>
                    自分なりに得点を上げる方法を考えたおかげで、半年で250点ほどスコアを伸ばせました。<br><br>
                    本サイトではスコアアップに悩まれている方に<br>
                    私が得点を上げた時に気づいた、必要な知識と思考法をお伝えしています。</p>
            </div>
    </section>

    <section id="N" class="wrapper">
        <h2 class="sec-2title">おすすめnote記事一覧</h2>
            <div class="grid-container">
                <div id= "square1" class="square">
                    <div class="image"></div>
                    <div class="note"> <!-- コンテンツ -->
                        <h2>リスニング能力を<br>生の会話でテストする方法</h2> <!-- 記事の題名 -->
                        <div class="time-etc">
                            <p>2024/02/10</p> <!-- 投稿日 -->
                            <p>未分類</p> <!-- カテゴリ名 -->
                        </div>
                    </div>
                </div>

                <div id= "square2" class="square">
                    <div class="image"></div>
                    <div class="note"> <!-- コンテンツ -->
                        <h2>頑張らなきゃいけないけど<br>頑張れない時の心持ち</h2> <!-- 記事の題名 -->
                        <div class="time-etc">
                            <p>2024/02/10</p> <!-- 投稿日 -->
                            <p>未分類</p> <!-- カテゴリ名 -->
                        </div>
                    </div>
                </div>

                <div id= "square3" class="square">
                    <div class="image"></div>
                    <div class="note"> <!-- コンテンツ -->
                        <h2>リスニング対策4選！<br>【3か月で130点UP！】</h2> <!-- 記事の題名 -->
                        <div class="time-etc">
                            <p>2024/02/10</p> <!-- 投稿日 -->
                            <p>未分類</p> <!-- カテゴリ名 -->
                        </div>
                    </div>
                </div>

                <div id= "square4" class="square">
                    <div class="image"></div>
                    <div class="note"> <!-- コンテンツ -->
                        <h2>物語のフラグを抑えて<br>TOEICの文を速読する方法</h2> <!-- 記事の題名 -->
                        <div class="time-etc">
                            <p>2024/02/10</p> <!-- 投稿日 -->
                            <p>未分類</p> <!-- カテゴリ名 -->
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <section class="wrapper">
        <h2 class="new-post-title">NEW POST</h2>
            <div class="new-post-list">
                <div id= "rectangle1" class="rectangle">
                <div class="blog-image"></div>
                <div class="blog-contents"> <!-- コンテンツ -->
                    <h2>人と違うことをするために、<br>日本で常識から自由になるためには</h2> <!-- 記事の題名 -->
                    <div class="blog-time-etc">
                        <p>2024/02/10</p> <!-- 投稿日 -->
                        <p>未分類</p> <!-- カテゴリ名 -->
                    </div>
                </div>
                </div>

                <div id= "rectangle2" class="rectangle">
                <div class="blog-image"></div>
                <div class="blog-contents"> <!-- コンテンツ -->
                    <h2>ベルリッツ英会話のリアルな評判<br>メリット・デメリットを解説！</h2> <!-- 記事の題名 -->
                    <div class="blog-time-etc">
                        <p>2024/02/10</p> <!-- 投稿日 -->
                        <p>未分類</p> <!-- カテゴリ名 -->
                    </div>
                </div>
                </div>

                <div id= "rectangle3" class="rectangle">
                    <div class="blog-image"></div>
                    <div class="blog-contents"> <!-- コンテンツ -->
                        <h2>【体験談あり！】ライザップTOEICコースの<br>リアルな評判やメリット・デメリットを解説！</h2> <!-- 記事の題名 -->
                        <div class="blog-time-etc">
                            <p>2024/02/10</p> <!-- 投稿日 -->
                            <p>未分類</p> <!-- カテゴリ名 -->
                        </div>
                    </div>
                </div>

                <div id= "rectangle4" class="rectangle">
                    <div class="blog-image"></div>
                    <div class="blog-contents"> <!-- コンテンツ -->
                        <h2>なぜ、むやみやたらに<br>勉強してはいけないのか？</h2> <!-- 記事の題名 -->
                        <div class="blog-time-etc">
                            <p>2024/02/10</p> <!-- 投稿日 -->
                            <p>未分類</p> <!-- カテゴリ名 -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="motto">
                <a href="#" >もっと見る</a>
            </div>
    </section>
         
    
    <script src="https://unpkg.com/scrollreveal"></script>
    <script>ScrollReveal({ reset: true, distance: "60px", duration:2000, delay:500 });</script>
    <script>ScrollReveal().reveal(".title", {delay: 600, origin:"left"});</script>
    <script>ScrollReveal().reveal(".sec-title", {delay: 600, origin:"left"});</script>
    <script>ScrollReveal().reveal(".intro .faceimg", {delay: 1000, origin:"bottom"});</script>
    <script>ScrollReveal().reveal(".intro .introsentence", {delay: 1000, origin:"right"});</script>
    <script>ScrollReveal().reveal(".sec-2title", {delay: 1000, origin:"top"});</script>
    <script>ScrollReveal().reveal("#square1.square", {delay: 200, origin:"bottom"});</script>
    <script>ScrollReveal().reveal("#square2.square", {delay: 400, origin:"bottom"});</script>
    <script>ScrollReveal().reveal("#square3.square", {delay: 600, origin:"bottom"});</script>
    <script>ScrollReveal().reveal("#square4.square", {delay: 800, origin:"bottom"});</script>
    <script>ScrollReveal().reveal(".new-post-title", {delay: 1000, origin:"left"});</script>
    <script>ScrollReveal().reveal(".rectangle", {delay: 1000, origin:"bottom"});</script>
    <script>ScrollReveal().reveal(".motto", {delay: 1200, origin:"bottom"});</script>

    <footer class="footer">
        <a href="https://masapon14.com/mensekizikou">免責事項</a>
        <a href="https://masapon14.com/privacy-policy">プライバシーポリシー</a>
        <a href="#">Copylight@英語学習あれこれ</a>
    </footer>

    <?php wp_footer(); ?>
</body>
</html>