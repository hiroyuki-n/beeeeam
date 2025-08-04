<?php include('../assets/inc/header.php') ?>

<?php
$current_work = isset($_GET[array_key_first($_GET)]) ? array_key_first($_GET) : '';
$current_work = in_array($current_work, $works) ? $current_work : '';

if ($current_work): ?>
  <div class="works_contents">
    <div class="gallery">
      <?php
      $files = array_merge(
        glob("$current_work/*.{jpg,jpeg,png,gif}", GLOB_BRACE),
        glob("$current_work/*.mp4", GLOB_BRACE)
      );
      foreach ($files as $file):
        $filename = basename($file);
        if ($filename === 'thumbnail.png') continue;
        if (strpos($filename, '_') === 0) continue; // ファイル名の頭に「_」がある場合はスキップ

        $web_path = "../works/$current_work/" . $filename;
        $ext = pathinfo($file, PATHINFO_EXTENSION);

        if ($ext === 'mp4'): ?>
          <video autoplay loop muted width="100%">
            <source src="<?= $web_path ?>" type="video/mp4">
          </video>
        <?php else: ?>
          <img src="<?= $web_path ?>">
      <?php endif;
      endforeach; ?>
    </div>
  </div>
<?php else: ?>
  <div class="works_list">
    <?php foreach ($works as $work): ?>
      <div class="btn">
        <a href="?<?= $work ?>"><img src="<?= $work ?>/thumbnail.png"></a>
      </div>
    <?php endforeach; ?>
  </div>
<?php endif; ?>

<?php include('../assets/inc/footer.php'); ?>