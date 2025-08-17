<?php
include('../assets/inc/header.php');

// 記事ディレクトリを自動で検出
function getArticleDirectories()
{
  $base_dir = __DIR__;
  $directories = [];

  if ($handle = opendir($base_dir)) {
    while (false !== ($entry = readdir($handle))) {
      if ($entry != "." && $entry != ".." && is_dir($base_dir . '/' . $entry)) {
        // index.phpとassets以外のディレクトリを記事として扱う
        if ($entry !== 'assets' && $entry !== 'inc') {
          $directories[] = $entry;
        }
      }
    }
    closedir($handle);
  }

  // ディレクトリ名でソート
  sort($directories);
  return $directories;
}

// 記事のタイトルを取得する関数
function getArticleTitle($dir)
{
  $contents_file = $dir . '/contents.php';
  if (file_exists($contents_file)) {
    // contents.phpの内容を読み込み
    $content = file_get_contents($contents_file);

    // h1タグからタイトルを抽出
    if (preg_match('/<h1[^>]*>(.*?)<\/h1>/s', $content, $matches)) {
      // HTMLタグを除去してテキストのみを取得
      return strip_tags($matches[1]);
    }
  }

  // タイトルが取得できない場合はディレクトリ名を返す
  return $dir;
}

// 記事ディレクトリの一覧を取得
$article_dirs = getArticleDirectories();

// 現在の記事を取得
$current_article = '';
if (!empty($_GET)) {
  $current_article = array_key_first($_GET);
  $current_article = in_array($current_article, $article_dirs) ? $current_article : '';
}

// 個別記事の表示
if ($current_article): ?>
  <div class="page_note">
    <div class="inner">
      <?php
      $contents_file = "{$current_article}/contents.php";
      include($contents_file);
      ?>
    </div>

    <div class="article_navigation">
      <a href="index.php" class="back_to_list">← 記事一覧に戻る</a>
    </div>
  </div>
<?php else: ?>
  <!-- 記事一覧の表示 -->
  <div class="note_list">


    <div class="articles_grid">
      <?php foreach ($article_dirs as $dir): ?>
        <?php $article_title = getArticleTitle($dir); ?>
        <li><a href="?<?= htmlspecialchars($dir) ?>"><?= htmlspecialchars($article_title) ?></a></li>
      <?php endforeach; ?>
    </div>
  </div>
<?php endif; ?>

<?php include('../assets/inc/footer.php'); ?>