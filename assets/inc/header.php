<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>デザインスタジオ ビーム</title>
    <link rel='stylesheet' href='/assets/css/style.css?<?= strtotime('now') ?>'>
</head>

<body>

    <header>
        <div class="upper">
            <div class="description">ビームは福岡の制作事務所です。主にウェブ制作をしています。</div>
            <div class="outsourcing">
                <a href="/partnership.php">
                    <img src="/assets/img/common/header/outsourcing.svg">
                    <span>外注先をお探しの制作会社様へ</span>
                </a>
            </div>
        </div>
        <div class="inner">
            <div class="logo">
                <img src="/assets/img/common/header/hand.svg">
                <a href="/"><img src="/assets/img/common/header/logo.svg" alt="デザインスタジオ ビーム"></a>
            </div>
            <ul>
                <li><a href="/works/"><img class="illust" src="/assets/img/common/icon/present.svg">実績</a></li>
                <li><a href="/about.php"><img class="illust" src="/assets/img/common/icon/present.svg">できること</a></li>
                <li><a href="/price.php"><img class="illust" src="/assets/img/common/icon/money.svg">費用について</a></li>
                <li><a href="#"><img class="illust" src="/assets/img/common/icon/voice.svg">よくあるご質問</a></li>
                <li><a href="#"><img class="illust" src="/assets/img/common/icon/mail.svg">お問い合わせ</a></li>
            </ul>
        </div>
    </header>
    <?php $works = ['paper_miaraka', 'logo_amami', 'logo_maunakea', 'logo_pumpkin', 'logo_masaki', 'web_gnu']; ?>