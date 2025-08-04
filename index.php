  <?php include('assets/inc/header.php') ?>
  <div class="page_top">
    <div class="mainvisual">
      <img class="bg" src="/assets/img/page/top/mainvisual/bg.svg">
      <div class="txt">
        <img src="/assets/img/page/top/mainvisual/logo.svg">
        <span>福岡のデザインスタジオです。<br>主にウェブサイトの制作をしています。</span>
      </div>
      <img class="hand" src="/assets/img/page/top/mainvisual/hand.svg">
    </div>
    <div class="works_list">
      <?php foreach ($works as $work): ?>
        <div class="btn">
          <a href="/works/?<?= $work ?>">
            <img src="/works/<?= $work ?>/thumbnail.png">
          </a>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
  <?php include('assets/inc/footer.php') ?>