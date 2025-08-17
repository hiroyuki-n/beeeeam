<?php
// 画像ファイルの配列を定義
$images = ['img_1.png', 'img_2.png'];
?>

<div class="work_detail">
  <header class="work_header">
    <h1>マウナ・ケア</h1>
    <p class="work_subtitle">ブランドロゴデザイン</p>
    <p class="work_description">自然と癒しをテーマにしたヘルスケアブランドのロゴ制作</p>
  </header>

  <div class="work_content">
    <section class="project_overview">
      <h2>プロジェクト概要</h2>
      <p>マウナ・ケアは、自然療法と現代医学を融合させたヘルスケアサービスを提供するブランドです。ハワイの「マウナ」という言葉には「山」という意味があり、自然の力と癒しの象徴として選ばれました。</p>
    </section>

    <section class="design_concept">
      <h2>デザインコンセプト</h2>
      <p>「自然の恵みと癒しの力」をコンセプトに、以下の要素をデザインに反映しました：</p>
      <ul>
        <li><strong>自然の曲線</strong>：山の稜線をイメージした柔らかな曲線</li>
        <li><strong>癒しの色合い</strong>：緑と青を基調とした安心感のある配色</li>
        <li><strong>シンプルな構造</strong>：覚えやすく、様々な媒体で使用しやすいデザイン</li>
      </ul>
    </section>

    <section class="design_process">
      <h2>制作プロセス</h2>
      <p>クライアントとの綿密なヒアリングから始まり、ブランドの価値観とターゲット層を深く理解した上で、複数のデザイン案を制作。最終的に選ばれたデザインは、自然の美しさと現代的な洗練さを両立させたロゴとなっています。</p>
    </section>

    <section class="deliverables">
      <h2>制作物</h2>
      <p>ロゴデザイン、カラーバリエーション、使用ガイドライン、各種媒体用データ（Web、印刷物、看板など）を提供しました。</p>
    </section>
  </div>

  <div class="work_gallery">
    <h2>制作実績</h2>
    <?php foreach ($images as $image): ?>
      <div class="gallery_item">
        <img src="<?= $work_path . $image ?>" alt="マウナ・ケアロゴ - <?= $image ?>">
      </div>
    <?php endforeach; ?>
  </div>
</div>