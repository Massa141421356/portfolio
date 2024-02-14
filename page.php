<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/phfstyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <?php wp_head(); ?>
</head>
<body>
   

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

<div class="main">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

          <h1 class="page-title"><?php the_title(); ?></h1>
            <div class="sec">
                <section class="page-contents">
                    <?php the_content(); ?>
                </section>
            </div>
        <?php  endwhile; endif; ?>
</div>

    <footer class="footer">
        <a href="https://masapon14.com/mensekizikou">免責事項</a>
        <a href="https://masapon14.com/privacy-policy">プライバシーポリシー</a>
        <a href="#">Copylight@英語学習あれこれ</a>
    </footer>

    <?php wp_footer(); ?>
</body>
</html>