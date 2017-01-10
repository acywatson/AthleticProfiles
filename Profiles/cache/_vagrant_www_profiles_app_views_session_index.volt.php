<?php $this->assets->outputCss(); ?>

<div class="container-fluid session-index">

  <div class="row">

    <div class="col-lg-12">
    <div class="login-image">
    <?php
    echo $this->tag->image("img/SISU_Logo_2016_300x300.png");
    ?>
    <h1>Athletic Profile Creator</h1>
    </div>
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
    <div class="signup form-group">
    <p>Don't have an account yet?</p>
    <?php
    echo Phalcon\Tag::linkTo(["create", "Sign Up!", "class" => "btn btn-large btn-primary"]);
    ?>
    </div>

    </div>

  </div>

</div>
