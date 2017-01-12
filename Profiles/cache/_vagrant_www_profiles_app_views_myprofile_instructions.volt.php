<?php $this->assets->outputCss(); ?>

<div class="container-fluid instructions">
  <div class="row">
    <div class="col-lg-12">

<h1>Instructions</h1>

<h3>Complete the following:</h3>

<h4>12 min Bike/Row for max calories.</h4>
<h4>Rest exactly 60 seconds</h4>
<h4>Perform as many push ups as possible in 60 seconds</h4>
<h4>Hold a perfect forearm plank for as long as possible (stop at 60 seconds)</h4>
<h4>Perform as many pull ups or ring rows as possible in 60 seconds</h4>


<?php
echo Phalcon\Tag::linkTo(["myprofile/create", "Let's do it!", "class" => "btn btn-large btn-primary"]);
?>

<?php
echo Phalcon\Tag::linkTo(["index", "Eh. Nevermind...", "class" => "btn btn-large btn-primary"]);
?>

    </div> <!-- col-lg-12 -->
  </div> <!-- row -->
</div> <!-- container-fluid -->
