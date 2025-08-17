<aside class="flexContainer__sidebar">
    <section class="president">
        <h2 class="president__title">代表取締役</h2>
        <div class="president__imgWrap">
            <img id="president__img" class="president__img" alt="代表取締役"
            src="<?php echo esc_url(get_theme_file_uri('img/president1.jpg')); ?>">
        </div>
        <h3 class="president__name">
            <?php echo nl2br(esc_html((get_field('president-name')))); ?>
        </h3>
        <!-- president-profileに値がある場合に表示。ない場合は非表示。  -->
        <?php $profile = get_field('president-profile'); ?>
        <?php
        if ($profile): ?>
        <p class="president__profile">
            <?php echo nl2br(esc_html(($profile))); ?>
        </p>
        <?php endif; ?>
    </section>

    <!-- administrative-nameに値がある場合は表示。ない場合は非表示。 -->
    <?php $administrative = get_field('administrative-name'); ?>
    <?php
    if ($administrative): ?>
        <section class="administrative">
            <h2 class="administrative__title">事務メンバー</h2>
            <div class="administrative__imgWrap">
                <img id="administrative__img" class="administrative__img" alt="事務員"
                src="<?php echo esc_url(get_theme_file_uri('img/administrative@1x.png')); ?>"
                srcset="<?php echo esc_url(get_theme_file_uri('img/administrative@1x.png')); ?> 1x,
                <?php echo esc_url(get_theme_file_uri('img/administrative@2x.png')); ?>">
            </div>
            <h3 class="administrative__name">
                <?php echo nl2br($administrative); ?>
            </h3>
            <p class="administrative__profile">
                <?php echo nl2br(esc_html(get_field('administrative-profile'))); ?>
            </p>
        </section>
    <?php endif; ?>

</aside>
</div>