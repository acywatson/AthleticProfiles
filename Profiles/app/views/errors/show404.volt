<?php $this->assets->outputCss(); ?>

{{content()}}

<div class="container-fluid">

  <div class="row">

    <div class="col-lg-12">

      <h1>Um...this page doesn't exist.</h1>

      <h3>Sorry.  If you think it should, feel free to email us. Otherwise...</h3>

        <?php echo Phalcon\Tag::linkTo(["index", "Go Home", "class" => "btn btn-primary btn-large"]); ?>

        <?php echo Phalcon\Tag::linkTo(["myprofile/index", "Go to My Profile", "class" => "btn btn-primary btn-large"]); ?>

    </div>

  </div>

</div>
