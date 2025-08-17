<?php
include('../assets/inc/header.php');

// 現在の制作実績を取得
$current_work = '';
if (!empty($_GET)) {
  $current_work = array_key_first($_GET);
  $current_work = in_array($current_work, $works) ? $current_work : '';
}

// 制作実績詳細ページの表示
if ($current_work): ?>
  <div class="works_contents">
    <?php
    $contents_file = "{$current_work}/contents.php";
    if (file_exists($contents_file)) {
      $work_path = "{$current_work}/";
      include($contents_file);
    }
    ?>
  </div>
<?php else: ?>
  <!-- 制作実績一覧の表示 -->
  <div class="works_list">
    <?php foreach ($works as $work): ?>
      <div class="btn">
        <a href="?<?= htmlspecialchars($work) ?>">
          <img src="<?= htmlspecialchars($work) ?>/thumbnail.png" alt="<?= htmlspecialchars($work) ?>">
        </a>
      </div>
    <?php endforeach; ?>
  </div>
<?php endif; ?>

<?php include('../assets/inc/footer.php'); ?>