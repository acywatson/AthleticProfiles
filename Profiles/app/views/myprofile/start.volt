<?php $this->assets->outputCss(); ?>

<div class="container-fluid profile-start">
  <div class="row">
    <div class="col-lg-12">

<h1>Create Your Athletic Profile</h1>

<h3>Ready to get started now?  You'll just need a few things:</h3>

<ul>

<li>Workout attire - whatever you're comfortable in.</li>
<li>Access to a an Airdyne-type Bike or a Rower that measures "calories"</li>
<li>A sturdy, secure bar that you can do pull ups from, OR </li>
<li>A set of rings if you plan to do ring rows</li>

</ul>

<p>The profile creation process will take about 15 minutes, once you start.</p>

<?php
echo Phalcon\Tag::linkTo(["myprofile/instructions", "I'm ready now!", "class" => "btn btn-large btn-primary"]);
?>

<?php
echo Phalcon\Tag::linkTo(["myprofile/create", "I'll do it later!", "class" => "btn btn-large btn-primary"]);
?>

    </div> <!-- col-lg-12 -->
  </div> <!-- row -->
</div> <!-- container-fluid -->
