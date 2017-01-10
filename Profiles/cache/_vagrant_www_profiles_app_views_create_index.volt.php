<?= $this->tag->getDoctype() ?>

<html>

<?= $this->tag->form(['create/signup', 'method' => 'post']) ?>

    <label for="name">First Name</label>
    <?= $this->tag->textField(['firstName', 'size' => 32]) ?>

    <label for="name">Last Name</label>
    <?= $this->tag->textField(['lastName', 'size' => 32]) ?>

    <label for="type">Email</label>
    <?= $this->tag->textField(['email', 'size' => 32]) ?>

    <label for="type">Password</label>
    <?= $this->tag->passwordField(['password', 'size' => 32]) ?>

    <?= $this->tag->submitButton(['Send']) ?>

<?= $this->tag->endForm() ?>


</html>
