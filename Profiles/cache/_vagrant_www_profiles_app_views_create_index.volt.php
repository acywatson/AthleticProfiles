<?php $this->assets->outputCss(); ?>

<?= $this->tag->getDoctype() ?>

<html>

<div class="container-fluid register">
  <div class="row">
    <div class="col-lg-12">

      <h1>Create an Account</h1>

<?= $this->tag->form(['create/signup', 'method' => 'post']) ?>

  <fieldset>

  <div class="form-group">

    <label for="name">First Name</label>

    <div class="controls">

    <?= $this->tag->textField(['firstName', 'size' => 32, 'class' => 'form-control']) ?>

   </div>
  </div>

    <div class="form-group">
    <label for="name">Last Name</label>
    <div class="controls">
    <?= $this->tag->textField(['lastName', 'size' => 32, 'class' => 'form-control']) ?>
  </div>
 </div>
    <div class="form-group">
    <label for="type">Email</label>
    <div class="controls">
    <?= $this->tag->textField(['email', 'size' => 32, 'class' => 'form-control']) ?>
  </div>
 </div>
    <div class="form-group">
    <label for="type">Password</label>
    <div class="controls">
    <?= $this->tag->passwordField(['password', 'size' => 32, 'class' => 'form-control']) ?>
  </div>
 </div>
    <div class="form-group">
    <?= $this->tag->submitButton(['Send', 'class' => 'btn btn-large btn-primary']) ?>
  </div>
</fieldset>

<?= $this->tag->endForm() ?>

</div>
</div>
</div>

</html>
