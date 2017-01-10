<?php $this->assets->outputCss(); ?>


<div class="container-fluid">

  <div class="row">

    <div class="jumbotron">

    <h1>SISU Strong</h1>
    <h3>Athletic Profile Creator</h3>

    <?php
    echo "<p>";
    echo Phalcon\Tag::linkTo(["create", "Create Account", "class" => "btn btn-primary btn-large"]);
    echo "</p>";
    echo "<p>";
    echo Phalcon\Tag::linkTo(["session", "Log In", "class" => "btn btn-primary btn-large"]);
    echo "</p>";
    ?>

    </div>

    <div class="col-lg-12">



    </div> <!-- col-lg-12 -->
  </div> <!-- row -->
</div> <!-- container-fluid -->
