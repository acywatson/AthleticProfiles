<?php $this->assets->outputCss(); ?>

<?= $this->getContent() ?>

<div class="container-fluid">

  <div class="row">

    <div class="col-lg-12">

      <h1>Hey! You're not supposed to be here...</h1>

      <h3>If you were logged in, you're session may have expired.</h3>

        <?php echo Phalcon\Tag::linkTo(["session", "Log Back In", "class" => "btn btn-primary btn-large"]); ?>

      <h3>If don't have an account yet, create one!</h3>

        <?php echo Phalcon\Tag::linkTo(["create/index", "Sign Up", "class" => "btn btn-primary btn-large"]); ?>

    </div>

  </div>

</div>
