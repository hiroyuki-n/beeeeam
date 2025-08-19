<?php
include('../assets/inc/header.php');

/**
 * contents.php から $title を取得する共通関数
 */
function extractTitleFromContents($path, $default)
{
  if (file_exists($path)) {
    $content = file_get_contents($path);
    if (preg_match('/\$title\s*=\s*[\'"](.+?)[\'"]\s*;/', $content, $matches)) {
      return $matches[1];
    }
  }
  return $default;
}

/**
 * カテゴリ内の記事一覧を取得
 */
function getCategoryArticles($category)
{
  $articles = [];
  $category_path = __DIR__ . '/' . $category;

  if (is_dir($category_path)) {
    foreach (scandir($category_path) as $entry) {
      if ($entry === '.' || $entry === '..') continue;
      $subdir = $category_path . '/' . $entry;
      if (is_dir($subdir) && file_exists($subdir . '/contents.php')) {
        $articles[] = $entry;
      }
    }
  }
  return $articles;
}

/**
 * 記事タイトルを取得
 */
function getNoteTitle($note_dir)
{
  return extractTitleFromContents(__DIR__ . '/' . $note_dir . '/contents.php', basename($note_dir));
}

/**
 * カテゴリタイトルを取得
 */
function getCategoryTitle($category)
{
  return extractTitleFromContents(__DIR__ . '/' . $category . '/contents.php', $category);
}

/**
 * ✅ note ディレクトリ直下からカテゴリを自動取得
 * （contents.php を持つフォルダのみカテゴリ扱い）
 */
$category_dirs = [];
foreach (scandir(__DIR__) as $entry) {
  if ($entry === '.' || $entry === '..') continue;
  $path = __DIR__ . '/' . $entry;
  if (is_dir($path) && file_exists($path . '/contents.php')) {
    $category_dirs[] = $entry;
  }
}

/**
 * カテゴリごとの記事一覧を一括取得
 */
$category_articles = [];
foreach ($category_dirs as $category) {
  $category_articles[$category] = getCategoryArticles($category);
}

/**
 * 現在のカテゴリとサブ記事を判定
 */
$current_category = '';
$current_sub_article = '';

foreach ($category_dirs as $category) {
  if (isset($_GET[$category])) {
    $current_category = $category;
    foreach ($category_articles[$category] as $article) {
      if (isset($_GET[$article])) {
        $current_sub_article = $article;
        break;
      }
    }
    break;
  }
}



?>

<div class="page_note">
  <nav>
    <div class="note_nav">
      <ul>
        <?php foreach ($category_dirs as $category): ?>
          <li>
            <a href="/note/?<?= htmlspecialchars($category) ?>">
              <?= htmlspecialchars(getCategoryTitle($category)) ?>
            </a>
            <?php if (!empty($category_articles[$category])): ?>
              <ul>
                <?php foreach ($category_articles[$category] as $article): ?>
                  <li>
                    <a href="/note/?<?= htmlspecialchars($category) ?>&<?= htmlspecialchars($article) ?>">
                      <?= htmlspecialchars(getNoteTitle($category . '/' . $article)) ?>
                    </a>
                  </li>
                <?php endforeach; ?>
              </ul>
            <?php endif; ?>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </nav>

  <?php if ($current_category && $current_sub_article): ?>
    <div class="inner">
      <?php include(__DIR__ . "/{$current_category}/{$current_sub_article}/contents.php"); ?>
    </div>
  <?php elseif ($current_category): ?>
    <!-- カテゴリページ -->
    <div class="inner">
      <?php include(__DIR__ . "/{$current_category}/contents.php"); ?>
    </div>
  <?php else: ?>
    <div class="inner">
      <!-- 一覧ページ -->
      <h1>記事一覧</h1>
      <p>カテゴリから記事を選択してください。</p>
    </div>
  <?php endif; ?>
</div>

<?php include('../assets/inc/footer.php'); ?>