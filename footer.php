

</main>
    <!------------------------------------- フッター ------------------------------------->
    <footer class="footer">
        <div class="footer__wrapper blContainer">
            <div class="footer__inner">
                <div class="footer__logoWrap">
                    <img class="footer__logo" alt="北島工業"
                    src="<?php echo esc_url(get_theme_file_uri('img/logo@1x.png')); ?>"
                    srcset="<?php echo esc_url(get_theme_file_uri('img/logo@1x.png')); ?> 1x,
                    <?php echo esc_url(get_theme_file_uri('img/logo@2x.png')); ?> 2x">
                </div>
                <div class="footer__nav">
                    <ul class="footer__navList">
                        <li class="footer__navItem">
                            <a class="footer__navLink" href="#target__home">ホーム</a>
                        </li>
                        <li class="footer__navItem">
                            <a class="footer__navLink" href="#target__about">私たちについて</a>
                        </li>
                        <li class="footer__navItem">
                            <a class="footer__navLink" href="#target__business">事業概要</a>
                        </li>
                        <li class="footer__navItem">
                            <a class="footer__navLink" href="#target__member">メンバー紹介</a>
                        </li>
                        <li class="footer__navItem">
                            <a class="footer__navLink" href="#target__recruit">採用情報</a>
                        </li>
                        <li class="footer__navItem">
                            <a class="footer__navLink" href="https://line.me/ti/p/Q699liBLCK">お問い合わせ</a>
                        </li>
                    </ul>
                </div>
            </div>
                <small class="footer__copy"> &copy; <?php echo date('Y'); ?> Kitajima kogyo Co.</small>
        </div>
    </footer>
    <?php wp_footer(); ?>
</body>

</html>