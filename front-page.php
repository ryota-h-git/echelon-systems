<?php get_header(); ?>

<body>
    <div class="p-logo-splash">
        <svg class="p-logo-splash__logo" id="logo" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 321.429 650.01">

            <!-- 塗り（下に置く） -->
            <g class="fill-logo">
                <path d="M315.118,5.924v99.5c-82.626,51.986-167.478,100.498-251.01,151l243.486,143.524c23.121,20.044,1.454,70.062-23.56,81.392L6.599,645.91c-2.947.918-.317-4.76-.393-6.482-1.461-33.143-3.482-74.176-1.125-107.037.175-2.438.699-4.849,1.308-7.197l83.05-49.45,2.677-2.809c-1.704-.162-3.223-1.003-4.678-1.833-20.831-11.89-48.106-26.27-67.233-39.766-5.93-4.184-12.437-9.644-13.853-17.147-1.261-6.684-1.302-18.687-1.279-25.717.044-13.819,1.987-27.664,1.051-41.545l150.988,88.575,40.018-22.09-1.664-2.337L15.795,305.746c-5.133-3.823-8.935-8.704-9.681-15.319-1.677-14.883-1.646-64.818,1.469-78.538,3.956-17.43,17.636-33.094,32.006-42.994C123.783,119.767,206.631,68.251,290.81,19.116c7.928-4.628,15.813-9.77,24.308-13.192Z" />
                <polygon points="315.118 165.924 315.118 338.924 169.138 252.423 315.118 165.924" />
            </g>

            <!-- 線（上に置く） -->
            <g class="line-logo">
                <path d="M315.118,5.924v99.5c-82.626,51.986-167.478,100.498-251.01,151l243.486,143.524c23.121,20.044,1.454,70.062-23.56,81.392L6.599,645.91c-2.947.918-.317-4.76-.393-6.482-1.461-33.143-3.482-74.176-1.125-107.037.175-2.438.699-4.849,1.308-7.197l83.05-49.45,2.677-2.809c-1.704-.162-3.223-1.003-4.678-1.833-20.831-11.89-48.106-26.27-67.233-39.766-5.93-4.184-12.437-9.644-13.853-17.147-1.261-6.684-1.302-18.687-1.279-25.717.044-13.819,1.987-27.664,1.051-41.545l150.988,88.575,40.018-22.09-1.664-2.337L15.795,305.746c-5.133-3.823-8.935-8.704-9.681-15.319-1.677-14.883-1.646-64.818,1.469-78.538,3.956-17.43,17.636-33.094,32.006-42.994C123.783,119.767,206.631,68.251,290.81,19.116c7.928-4.628,15.813-9.77,24.308-13.192Z" />
                <polygon points="315.118 165.924 315.118 338.924 169.138 252.423 315.118 165.924" />
            </g>

        </svg>

    </div>

    </div>
    <header class="l-header p-header">
        <h1 class="p-pc-header__logo">
            <a href="/">
                <img src="<?php echo get_template_directory_uri(); ?>/public/assets/img/logo-title-white.png" alt="Echelon Systems">
            </a>
        </h1>
        <div class="p-pc-header">
            <nav class="p-pc-header__nav">
                <ul>
                    <li><a href="#service">事業内容</a></li>
                    <li><a href="#works">開発実績</a></li>
                    <li><a href="#company">会社概要</a></li>
                    <li><a href="#company">採用情報</a></li>
                    <li><a href="#contact" class="c-contact-button">お問い合わせ</a></li>
                </ul>
            </nav>
        </div>
    </header>


    <main class="l-main">

        <section class="p-fv">
            <div class="p-fv__bg" aria-hidden="true">
                <canvas id="fvDots"></canvas>
            </div>
            <div class="l-container p-fv__inner">
                <div class="p-fv__wrapper">
                    <!-- 上部ラベル -->
                    <p class="c-badge p-fv__badge">
                        IT Solutions & DX Partner
                    </p>

                    <!-- メインコピー -->
                    <h2 class="p-fv__title">
                        テクノロジーで未来を創る<br>
                        <span class="p-fv__title-accent">信頼と革新</span>のパートナー
                    </h2>
                    <p class="p-fv__text">
                        エシュロンシステムは、業務システム開発からクラウド移行、DX推進まで、<br>
                        企業の成長を技術力で支援します。
                    </p>
                    <div class="p-fv__actions">
                        <a href="<?php echo esc_url(home_url('/contact/')); ?>"
                            class="c-btn c-btn--primary">
                            お問い合わせ
                            <span class="c-btn__icon">→</span>
                        </a>
                        <a href="#service"
                            class="c-btn c-btn--secondary">
                            サービスを見る
                        </a>
                    </div>
                    <ul class="p-fv__kpi c-kpi">
                        <li class="c-kpi__item">
                            <span class="c-kpi__value">500+</span>
                            <span class="c-kpi__label">開発実績</span>
                        </li>
                        <li class="c-kpi__item">
                            <span class="c-kpi__value">15年</span>
                            <span class="c-kpi__label">業界経験</span>
                        </li>
                        <li class="c-kpi__item">
                            <span class="c-kpi__value">98%</span>
                            <span class="c-kpi__label">顧客満足度</span>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <div class="l-inner">
            <!-- Problem : Project -->
            <section class="p-problem">
                <div class="l-container">
                    <!-- 見出しは再利用 → Component -->
                    <header class="c-sectionTitle">
                        <p class="c-sectionTitle__en">PROBLEM</p>
                        <h2 class="c-sectionTitle__jp">こんなお悩みありませんか？</h2>
                    </header>

                    <!-- カードは再利用 → Component -->
                    <ul class="p-problem__list">
                        <li class="c-card p-problem__item">
                            <div class="c-card__icon">
                                <img src="<?php echo get_template_directory_uri() ?>/public/assets/img/c-card-icon.png">
                            </div>
                            <h3 class="c-card__title">レガシーシステムの老朽化</h3>
                            <p class="c-card__text">古いシステムの保守コストが増大し、業務効率が低下している</p>
                        </li>
                        <li class="c-card p-problem__item">
                            <div class="c-card__icon">
                                <img src="<?php echo get_template_directory_uri() ?>/public/assets/img/c-card-icon.png">
                            </div>
                            <h3 class="c-card__title">DX推進の遅れ</h3>
                            <p class="c-card__text">デジタル化が進まず、競合他社との差が広がっている</p>
                        </li>
                        <li class="c-card p-problem__item">
                            <div class="c-card__icon">
                                <img src="<?php echo get_template_directory_uri() ?>/public/assets/img/c-card-icon.png">
                            </div>
                            <h3 class="c-card__title">開発リソースの不足</h3>
                            <p class="c-card__text">社内に専門的な技術者がおらず、システム開発が進まない</p>
                        </li>
                    </ul>
                </div>
            </section>

            <!-- Feature : Project -->
            <section class="p-feature" id="feature">
                <div class="l-container">
                    <header class="c-sectionTitle">
                        <p class="c-sectionTitle__en">FEATURE</p>
                        <h2 class="c-sectionTitle__jp">特徴</h2>
                    </header>

                    <div class="p-feature__items">
                        <article class="p-feature__item">
                            <h3 class="p-feature__title">特徴01</h3>
                            <p class="p-feature__text">説明文。</p>
                        </article>
                        <article class="p-feature__item">
                            <h3 class="p-feature__title">特徴02</h3>
                            <p class="p-feature__text">説明文。</p>
                        </article>
                    </div>
                </div>
            </section>

            <!-- Flow : Project -->
            <section class="p-flow">
                <div class="l-container">
                    <header class="c-sectionTitle">
                        <p class="c-sectionTitle__en">FLOW</p>
                        <h2 class="c-sectionTitle__jp">導入の</h2>
                    </header>

                    <ol class="p-flow__list">
                        <li class="p-flow__item">
                            <span class="p-flow__step">STEP 01</span>
                            <h3 class="p-flow__title">ヒアリング</h3>
                            <p class="p-flow__text">説明。</p>
                        </li>
                        <li class="p-flow__item">
                            <span class="p-flow__step">STEP 02</span>
                            <h3 class="p-flow__title">ご提案</h3>
                            <p class="p-flow__text">説明。</p>
                        </li>
                    </ol>
                </div>
            </section>

            <!-- Price : Project -->
            <section class="p-price">
                <div class="l-container">
                    <header class="c-sectionTitle">
                        <p class="c-sectionTitle__en">PRICE</p>
                        <h2 class="c-sectionTitle__jp">料金</h2>
                    </header>

                    <div class="p-price__cards">
                        <!-- 料金カードは将来再利用しやすい → Component -->
                        <div class="c-priceCard">
                            <h3 class="c-priceCard__title">ベーシック</h3>
                            <p class="c-priceCard__price">¥30,000</p>
                            <a class="c-btn c-btn--primary" href="<?php echo esc_url(home_url('/contact/')); ?>">相談する</a>
                        </div>
                    </div>
                     <span>テスト</span>
                </div>
            </section>

            <!-- FAQ : Project -->
            <section class="p-faq">
                <div class="l-container">
                    <header class="c-sectionTitle">
                        <p class="c-sectionTitle__en">FAQ</p>
                        <h2 class="c-sectionTitle__jp">よくある質問</h2>
                    </header>

                    <dl class="p-faq__list">
                        <div class="p-faq__item">
                            <dt class="p-faq__q">Q. 質問文</dt>
                            <dd class="p-faq__a">A. 回答文</dd>
                        </div>
                    </dl>
                </div>
            </section>

            <!-- CTA : Project -->
            <section class="p-cta">
                <div class="l-container p-cta__inner">
                    <h2 class="p-cta__title">まずはお気軽にご相談ください</h2>
                    <a class="c-btn c-btn--primary" href="<?php echo esc_url(home_url('/contact/')); ?>">お問い合わせ</a>
                </div>
            </section>
        </div>
    </main>
    <?php wp_footer(); ?>
</body>

</html>