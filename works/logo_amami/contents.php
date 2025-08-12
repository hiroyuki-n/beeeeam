<?php
// 画像ファイルの配列を定義
$images = ['img01.png', 'img02.png', 'img03.png', 'img04.png', 'img05.png'];
?>

<div class="work_detail">
    <header class="work_header">
        <h1>あまみ理髪店</h1>
        <p class="work_subtitle">奄美ロゴ</p>
        <p class="work_description">奄美ロゴの制作実績です。</p>
    </header>

    <div class="work_gallery">
        <?php foreach ($images as $image): ?>
            <div class="gallery_item">
                <img src="<?= $work_path . $image ?>" alt="あまみ理髪店ロゴ - <?= $image ?>">
            </div>
        <?php endforeach; ?>
    </div>
</div>