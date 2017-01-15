<?php $this->assets->outputCss(); ?>

{{content()}}

<div class="container-fluid">

  <div class="row">

    <div class="col-lg-12">

      <h1>WHAT HAVE YOU DONE?!</h1>

      <h3>Just kidding...the server is being wonky.  Totally (probably) not your fault.</h3>

        <?php echo Phalcon\Tag::linkTo(["index", "Go Home", "class" => "btn btn-primary btn-large"]); ?>

        <?php echo Phalcon\Tag::linkTo(["myprofile/index", "Go to My Profile", "class" => "btn btn-primary btn-large"]); ?>

    </div>

  </div>

</div>
