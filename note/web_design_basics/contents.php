<?php
// 記事の詳細内容
$article_title = 'Webデザインの基本原則';
$article_description = '良いWebデザインを作るための基本的な原則とテクニックを紹介します。';
$article_date = '2025-08-12';
$article_category = 'デザイン';
?>

<div class="article_content">
  <header class="article_header">
    <div class="article_meta">
      <span class="category"><?= htmlspecialchars($article_category) ?></span>
      <time datetime="<?= $article_date ?>"><?= date('Y年n月j日', strtotime($article_date)) ?></time>
    </div>
    <h1><?= htmlspecialchars($article_title) ?></h1>
    <p class="description"><?= htmlspecialchars($article_description) ?></p>
  </header>

  <div class="article_body">
    <section class="content_section">
      <h2>Webデザインの基本原則</h2>
      <p>優れたWebデザインを作るためには、いくつかの基本的な原則を理解することが重要です。これらの原則に従うことで、ユーザビリティが高く、見た目も美しいサイトを制作できます。</p>
    </section>

    <section class="content_section">
      <h2>1. 視覚的階層（Visual Hierarchy）</h2>
      <p>情報の重要度に応じて、視覚的な優先順位をつけることが重要です：</p>
      <ul>
        <li><strong>見出しのサイズ</strong> - H1、H2、H3の適切な使い分け</li>
        <li><strong>色のコントラスト</strong> - 重要な要素を目立たせる</li>
        <li><strong>スペーシング</strong> - 要素間の適切な余白</li>
        <li><strong>フォントの太さ</strong> - 強調したい部分の表現</li>
      </ul>
    </section>

    <section class="content_section">
      <h2>2. 一貫性（Consistency）</h2>
      <p>サイト全体でデザインの一貫性を保つことで、ユーザーの理解を助けます：</p>
      <ul>
        <li><strong>カラーパレット</strong> - 統一された色使い</li>
        <li><strong>タイポグラフィ</strong> - フォントファミリーの統一</li>
        <li><strong>ボタンスタイル</strong> - インタラクション要素の統一</li>
        <li><strong>レイアウト</strong> - ページ構造の一貫性</li>
      </ul>
    </section>

    <section class="content_section">
      <h2>3. レスポンシブデザイン</h2>
      <p>様々なデバイスで適切に表示されるデザインが現代では必須です：</p>
      <ul>
        <li><strong>モバイルファースト</strong> - 小さい画面から設計</li>
        <li><strong>フレキシブルグリッド</strong> - 柔軟なレイアウト</li>
        <li><strong>タッチフレンドリー</strong> - タッチ操作に適したサイズ</li>
        <li><strong>パフォーマンス</strong> - 軽量で高速な表示</li>
      </ul>
    </section>

    <section class="content_section">
      <h2>4. ユーザビリティ</h2>
      <p>ユーザーが直感的に操作できるデザインを心がけましょう：</p>
      <ul>
        <li><strong>ナビゲーション</strong> - 分かりやすいメニュー構造</li>
        <li><strong>フィードバック</strong> - 操作結果の明確な表示</li>
        <li><strong>エラー処理</strong> - 分かりやすいエラーメッセージ</li>
        <li><strong>アクセシビリティ</strong> - 様々なユーザーへの配慮</li>
      </ul>
    </section>

    <section class="content_section">
      <h2>5. パフォーマンスとSEO</h2>
      <p>デザインだけでなく、技術的な要素も重要です：</p>
      <ul>
        <li><strong>画像最適化</strong> - 適切なサイズとフォーマット</li>
        <li><strong>CSS/JS最適化</strong> - ファイルサイズの削減</li>
        <li><strong>セマンティックHTML</strong> - 検索エンジンへの配慮</li>
        <li><strong>ページ速度</strong> - ユーザー体験の向上</li>
      </ul>
    </section>

    <section class="content_section">
      <h2>まとめ</h2>
      <p>Webデザインの基本原則を理解し、実践することで、ユーザーにとって使いやすく、見た目も美しいサイトを制作できます。</p>

      <p>これらの原則は、トレンドが変わっても基本的な価値を持ち続ける、Webデザインの基礎となるものです。</p>
    </section>
  </div>
</div>