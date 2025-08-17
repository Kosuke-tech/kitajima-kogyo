<?php get_header(); ?>

<div id="loading">
    <p id="loading__text">Loading.....</p>
    <div id="loading__screen"></div>
</div>

<section id="target__about" class="about blContainer">
    <h2 class="about__title">私たちについて</h2>
    <div id="isovs" class="about__wrapper">
        <div class="about__textContentWrap">
            <h3 class="about__subTitle">
                <?php echo nl2br(esc_html(get_field('about-subtitle'))); ?>
            </h3>
            <p class="about__text">
                <?php echo nl2br(esc_html(get_field('about-text'))); ?>
            </p>
        </div>
        <div class="about__imgWrap">
            <img class="about__img" alt="私たちについて"
                src="<?php echo esc_url(get_theme_file_uri('img/about@1x.png')); ?>"
                srcset="<?php echo esc_url(get_theme_file_uri('img/about@1x.png')); ?> 1x,
                <?php echo esc_url(get_theme_file_uri('img/about@2x.png')); ?>">

        </div>
    </div>
</section>
<section id="target__business" class="business blContainer">
    <h2 class="business__title">事業概要</h2>
    <div class="business__wrapper">
        <div class="business__contentBox">
            <div class="business__imgWrap">
                <img id="business__img" class="business__img" alt="事業内容1"
                    src="<?php echo esc_url(get_theme_file_uri('img/business1.jpg')); ?>">
            </div>
            <div class="business__textWrap">
                <h3 class="business__subTitle">
                    <?php echo nl2br(esc_html(get_field('business-subtitle-1'))); ?>
                </h3>
                <p class="business__text">
                    <?php echo nl2br(esc_html(get_field('business-description-1'))); ?>
                </p>
            </div>
        </div>
        <div class="business__contentBox">
            <div class="business__imgWrap">
                <img id="business__img" class="business__img" alt="事業内容2"
                    src="<?php echo esc_url(get_theme_file_uri('img/business2.jpg')); ?>">
            </div>
            <div class="business__textWrap">
                <h3 class="business__subTitle">
                    <?php echo nl2br(esc_html(get_field('business-subtitle-2'))); ?>
                </h3>
                <p class="business__text">
                    <?php echo nl2br(esc_html(get_field('business-description-2'))); ?>
                </p>
            </div>
        </div>
        <div class="business__contentBox">
            <div class="business__imgWrap">
                <img id="business__img" class="business__img" alt="事業内容3"
                    src="<?php echo esc_url(get_theme_file_uri('img/business3.jpg')); ?>">
            </div>
            <div class="business__textWrap">
                <h3 class="business__subTitle">
                    <?php echo nl2br(esc_html(get_field('business-subtitle-3'))); ?>
                </h3>
                <p class="business__text">
                    <?php echo nl2br(esc_html(get_field('business-description-3'))); ?>
                </p>
            </div>
        </div>
    </div>
</section>
<section id="target__member" class="member blContainer">
    <h2 class="member__title">メンバー紹介</h2>
    <div class="member__wrapper">
        <div class="member__contentBox">
            <div class="member__imgWrap">
                <img id="member__img" class="member__img member1" alt="社員紹介1"
                    src="<?php echo esc_url(get_theme_file_uri('img/member1.jpg')); ?>">
            </div>
            <div class="member__contentsWrap">
                <h3 class="member__name">
                    名前：<?php echo nl2br(esc_html(get_field('member-name1'))); ?>
                </h3>
                <!-- member-ageが未記入の場合、非表示。 -->
                <?php $age = get_field('member-age1'); ?>
                <?php if ($age): ?>
                    <h4 class="member__age">
                        年齢：<?php echo nl2br(esc_html($age)); ?>歳
                    </h4>
                <?php endif; ?>
                <!-- member-profileが未記入の場合非表示。 -->
                <?php $profile = get_field('member-profile1'); ?>
                <?php if ($profile): ?>
                    <div class="member__textWrap">
                        <p class="member__text">
                            <?php echo nl2br(esc_html($profile)); ?>
                        </p>
                    </div>
                <?php endif; ?>

            </div>
        </div>
        <div class="member__contentBox">
            <div class="member__imgWrap">
                <img id="member__img" class="member__img member2" alt="社員紹介2"
                    src="<?php echo esc_url(get_theme_file_uri('img/member2.png')); ?>">
            </div>
            <div class="member__contentsWrap">
                <h3 class="member__name">
                    名前：<?php echo nl2br(esc_html(get_field('member-name2'))); ?>
                </h3>
                <!-- member-ageが未記入の場合、非表示。 -->
                <?php $age = get_field('member-age2'); ?>
                <?php if ($age): ?>
                    <h4 class="member__age">
                        年齢：<?php echo nl2br(esc_html($age)); ?>歳
                    </h4>
                <?php endif; ?>

                <!-- member-profileが未記入の場合非表示。 -->
                <?php $profile = get_field('member-profile2'); ?>
                <?php if ($profile): ?>
                    <div class="member__textWrap">
                        <p class="member__text">
                            <?php echo nl2br(esc_html($profile)); ?>
                        </p>
                    </div>
                <?php endif; ?>
            </div>
        </div>
        <div class="member__contentBox">
            <div class="member__imgWrap">
                <img id="member__img" class="member__img member3" alt="社員紹介3"
                    src="<?php echo esc_url(get_theme_file_uri('img/member3.jpg')); ?>">
            </div>
            <div class="member__contentsWrap">
                <h3 class="member__name">
                    名前：<?php echo nl2br(esc_html(get_field('member-name3'))); ?>
                </h3>
                <!-- member-ageが未記入の場合、非表示。 -->
                <?php $age = get_field('member-age3'); ?>
                <?php if ($age): ?>
                    <h4 class="member__age">
                        年齢：<?php echo nl2br(esc_html($age)); ?>歳
                    </h4>
                <?php endif; ?>
                <!-- member-profileが未記入の場合非表示。 -->
                <?php $profile = get_field('member-profile3'); ?>
                <?php if ($profile): ?>
                    <div class="member__textWrap">
                        <p class="member__text">
                            <?php echo nl2br(esc_html($profile)); ?>
                        </p>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<div class="flexContainer blContainer">
    <div class="flexContainer__contents">
        <section id="target__recruit" class="recruit">
            <h2 class="recruit__title">採用情報</h2>
            <div class="recruit__imgWrap">
                <img id="recruit__img" class="recruit__img" alt="採用情報"
                    src="<?php echo esc_url(get_theme_file_uri('img/recruit3.jpg')); ?>">
            </div>
            <div class="recruit__textWrap">
                <div class="recruit__overlay">
                    <h3 class="recruit__subTitle">
                        一緒に汗をかいて、<br class="spOnlyBr">笑える仲間を探しています。
                    </h3>
                    <p class="recruit__text">
                        私たちは今、新しい仲間を募集しています。<br class="spOnlyBr">経験の有無は問いません。<br>
                        <br>
                        大切なのは、<br>
                        <span class="recruit__bold">「誰かの役に立ちたい」という気持ち</span>と、<br class="spOnlyBr">
                        <span class="recruit__bold">素直に学ぶ姿勢です。</span><br>
                        <br>
                        メンバーに気持ちよく働いてもらうために、<br class="spOnlyBr">働く環境などにも配慮しており、<br>
                        創業から退職者は一人も出ておりません。<br>
                        親しみやすい仲間や<br class="spOnlyBr">働きやすいアットホームな環境も弊社の強みの一つです。<br>
                        <br>
                        建設現場は、毎日が真剣勝負。<br>
                        でも現場を終えたあとに<br class="spOnlyBr">仲間と笑い合う時間も、この仕事の魅力です。<br>
                        <br>
                        <span class="recruit__bold">最初は何もできなくて当然。<br>
                            少人数だからこそ、<br class="spOnlyBr">一人ひとりを丁寧に育てていきます。</span><br>
                            <br>
                        社長も社員も、みんな家族のような存在です。<br>
                        <br>
                        「ここでなら頑張れる」
                        ──そう思える職場で、一緒に働いてみませんか？<br>
                        ご興味を持っていただけましたら、<br class="spOnlyBr">下記の募集要項をご参照ください。
                    </p>
                </div>
            </div>
            <div class="jobDescriptionPc blContainer">
                <table class="jobDescriptionPc__table">
                    <h3 class="jobDescriptionPc__title">募集要項</h3>
                    <tbody class="jobDescriptionPc__body">
                        <tr class="jobDescriptionPc__row">
                            <th class="jobDescriptionPc__header">年齢</th>
                            <td class="jobDescriptionPc__data">18歳 ~ 50歳</td>
                        </tr>
                        <tr class="jobDescriptionPc__row">
                            <th class="jobDescriptionPc__header">初任給</th>
                            <td class="jobDescriptionPc__data">経験者：40万円〜<br>未経験者：25万円〜<br>※スキルや経験に応じて要相談</td>
                        </tr>
                        <tr class="jobDescriptionPc__row">
                            <th class="jobDescriptionPc__header">必要事項</th>
                            <td class="jobDescriptionPc__data">やる気、元気、稼ぐ意欲のある方、大歓迎です！<br>皆んなで楽しく働きましょう!</td>
                        </tr>
                        <tr class="jobDescriptionPc__row">
                            <th class="jobDescriptionPc__header">勤務地</th>
                            <td class="jobDescriptionPc__data">朝の集合場所は埼玉県川口市か北葛飾郡松伏町になります。<br>現場は首都圏や関東近郊になります。<br>※遠方で朝の集合が難しい方は要相談とさせていただきます。</td>
                        </tr>
                        <tr class="jobDescriptionPc__row">
                            <th class="jobDescriptionPc__header">勤務時間</th>
                            <td class="jobDescriptionPc__data">8:30 〜 17:30　<br> ※現場の都合により前後することもございます。</td>
                        </tr>
                        <tr class="jobDescriptionPc__row">
                            <th class="jobDescriptionPc__header">手当</th>
                            <td class="jobDescriptionPc__data">残業手当・運転手当・資格手当</td>
                        </tr>
                        <tr class="jobDescriptionPc__row">
                            <th class="jobDescriptionPc__header">休日</th>
                            <td class="jobDescriptionPc__data">日・祝日</td>
                        </tr>
                        <tr class="jobDescriptionPc__row">
                            <th class="jobDescriptionPc__header">福利厚生</th>
                            <td class="jobDescriptionPc__data">忘年会、社員慰労会(年2回の呑み会)、BBQ(お盆、ご家族の参加可)、資格補助金等</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>
        <section class="blContainer">
            <div class="linePc">
                <p class="linePc__text">
                    LINEでお問い合わせされる方は、下のQRコードを読み取ってください。
                </p>
                <img class="linePc__qr" alt="LINE QRコード" width="250px"
                    src="<?php echo esc_url(get_theme_file_uri('img/line_account.jpg')); ?>">
            </div>

            <div class="lineSp">
                <p class="lineSp__text">
                    LINEでお問い合わせされる方は、下記のLINEアカウントにご連絡ください。
                </p>
                <div class="lineSp__iconWrap">
                    <a class="lineSp__iconLink" href="https://line.me/ti/p/Q699liBLCK" target="_blank" rel="noopener noreferrer">
                        <i class="lineSp__icon fa-8x fa-brands fa-line fa-square-line"></i>
                    </a>
                </div>
            </div>
        </section>
    </div>
    <?php get_sidebar(); ?>
    <div>
        <a id="go__top" href="#">トップに戻る</a>
    </div>
    <?php get_footer(); ?>