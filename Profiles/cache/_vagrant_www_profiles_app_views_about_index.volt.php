<?php $this->assets->outputCss(); ?>


<?= $this->elements->getMenu() ?>
<?= $this->getContent() ?>

<div class="container-fluid">

  <div class="row">

    <div class="col-lg-12">

      <h1>About</h1>

      <?= $this->getContent() ?>

    </div>

  </div>

</div>
