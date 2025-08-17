<?php
// 画像ファイルの配列を定義
$images = ['img_1.png', 'img_2.png'];
?>

<div class="work_detail">
    <header class="work_header">
        <h1>デイサービス みあらか</h1>
        <p class="work_subtitle">パンフレット・チラシデザイン</p>
        <p class="work_description">高齢者向けデイサービス施設の魅力を伝える温かみのあるパンフレット制作</p>
    </header>

    <div class="work_content">
        <section class="project_overview">
            <h2>プロジェクト概要</h2>
            <p>福岡県宗像市にある「デイサービス みあらか」様のパンフレット・チラシを制作いたしました。施設の理念である「安心をつくり、安心をとどける。」というメッセージを軸に、利用者様とご家族に安心感を与えるデザインを心がけました。</p>
        </section>

        <section class="design_concept">
            <h2>デザインコンセプト</h2>
            <p>「温かみのある安心感」をコンセプトに、以下の要素をデザインに反映しました：</p>
            <ul>
                <li><strong>親しみやすい色合い</strong>：水色と白を基調とした明るく清潔感のある配色</li>
                <li><strong>読みやすいレイアウト</strong>：高齢者の方にも見やすい文字サイズと構成</li>
                <li><strong>温かみのあるイラスト</strong>：利用者様の笑顔や活動の様子を表現</li>
                <li><strong>分かりやすい情報整理</strong>：施設の魅力が伝わりやすい構成</li>
            </ul>
        </section>

        <section class="content_structure">
            <h2>パンフレットの構成</h2>
            <div class="structure_details">
                <h3>表面：基本情報とアクセス</h3>
                <ul>
                    <li><strong>施設理念</strong>：「安心をつくり、安心をとどける。」のメッセージ</li>
                    <li><strong>一日の過ごし方</strong>：時間別のスケジュールと活動内容</li>
                    <li><strong>アクセスマップ</strong>：周辺施設を含む詳細な地図</li>
                    <li><strong>連絡先情報</strong>：電話番号、住所、営業時間</li>
                </ul>

                <h3>裏面：サービス詳細と施設紹介</h3>
                <ul>
                    <li><strong>交流プログラム</strong>：囲碁、麻雀、創作活動などの様子</li>
                    <li><strong>イベント情報</strong>：屋外レクリエーションや食事会</li>
                    <li><strong>健康管理</strong>：看護師による健康チェックと食事調整</li>
                    <li><strong>運動プログラム</strong>：集団運動、歩行訓練、温水プール</li>
                </ul>
            </div>
        </section>

        <section class="design_features">
            <h2>デザインの特徴</h2>
            <p>高齢者向けサービスという特性を考慮し、以下の点に特に配慮しました：</p>
            <ul>
                <li><strong>視認性の向上</strong>：適切な文字サイズとコントラスト</li>
                <li><strong>情報の階層化</strong>：重要度に応じた情報の整理</li>
                <li><strong>親しみやすさ</strong>：イラストや写真を効果的に配置</li>
                <li><strong>実用性</strong>：持ち運びやすく、保管しやすいサイズ</li>
            </ul>
        </section>

        <section class="deliverables">
            <h2>制作物</h2>
            <p>パンフレット・チラシ、印刷用データ、Web用データ、各種媒体用データを提供しました。施設の魅力を最大限に引き出すデザインで、利用者様の増加に貢献しています。</p>
        </section>
    </div>

    <div class="work_gallery">
        <h2>制作実績</h2>
        <?php foreach ($images as $image): ?>
            <div class="gallery_item">
                <img src="<?= $work_path . $image ?>" alt="デイサービスみあらかパンフレット - <?= $image ?>">
            </div>
        <?php endforeach; ?>
    </div>
</div>