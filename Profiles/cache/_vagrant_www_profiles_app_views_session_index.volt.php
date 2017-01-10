<?= $this->elements->getMenu() ?>

<div class="container-fluid session-index">

  <div class="row">

    <div class="col-lg-12">

<?= $this->getContent() ?>

<?= $this->tag->form(['session/start', 'role' => 'form']) ?>
            <fieldset>
                <div class="form-group">
                    <label for="email">Username/Email</label>
                    <div class="controls">
                        <?= $this->tag->textField(['email', 'class' => 'form-control']) ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <div class="controls">
                        <?= $this->tag->passwordField(['password', 'class' => 'form-control']) ?>
                    </div>
                </div>
                <div class="form-group">
                    <?= $this->tag->submitButton(['Login', 'class' => 'btn btn-primary btn-large']) ?>
                </div>
            </fieldset>
        </form>

    </div> <!-- col-lg -->
  </div> <!-- row -->

  <div class="row">

    <div class="col-lg-12">
    <p>No Account Yet?</p>
    <?php
    echo Phalcon\Tag::linkTo("create", "Sign Up!");
    ?>

    </div>

  </div>

</div>
