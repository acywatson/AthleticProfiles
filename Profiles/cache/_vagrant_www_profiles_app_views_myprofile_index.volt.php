<?php $this->assets->outputCss(); ?>

<?= $this->elements->getMenu() ?>

<div class="container-fluid profile">

  <div class="row">

    <div class="col-lg-12">

<?= $this->getContent() ?>

<h1><?= $firstName ?> <?= $lastName ?>'s Profile</h1>

<h3>Sport: <?= $sport ?> </h3>

<h3>Push Up Score: <?= $strengthScore ?></h3>

<h3>Plank Score: <?= $enduranceScore ?></h3>

<h3>Ring Row/Pull Up Score: <?= $balanceScore ?></h3>

<br>

<?php

echo Phalcon\Tag::linkTo(["myprofile/edit", "Update Profile", "class" => "btn btn-primary btn-large"]);

?>

    </div> <!-- col-lg-12 -->

  </div> <!-- row -->

</div>
