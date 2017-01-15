<?php $this->assets->outputCss(); ?>

<?= $this->elements->getMenu() ?>

<div class="container-fluid edit-profile">

  <div class="row">

    <div class="col-lg-12">

<h1>Edit Your Athletic Profile</h1>

<form method="post" action="/Profiles/myprofile/save">
    <?php

        // Traverse the form

        foreach ($form as $element) {
            // Get any generated messages for the current element
            $messages = $form->getMessagesFor(
                $element->getName()
            );

            if (count($messages)) {
                // Print each element
                echo '<div class="messages">';

                foreach ($messages as $message) {
                    echo $message;
                }

                echo "</div>";
            }

            echo '<div class="form-group">';

            echo '<label for="', $element->getName(), '">', $element->getLabel(), "</label>  ";

            echo '<div class="controls">';

            echo $element;

            echo "</div></div>";
        }

    ?>
    <div class="form-group">
    <input class="btn btn-primary btn-large" type="submit" value="Save Changes" />
    </div>
</form>

<h2>Instructions</h2>
<p>To test (or re-test), complete the following:</p>
<ul>

  <li>12 min Bike/Row for max calories.</li>
  <li>Rest exactly 60 seconds</li>
  <li>Perform as many push ups as possible in 60 seconds</li>
  <li>Hold a perfect forearm plank for as long as possible (stop at 60 seconds)</li>
  <li>Perform as many pull ups or ring rows** as possible in 60 seconds</li>

</ul>

<p>**For ring rows, adjust rings so they are at hip height.  Your feet should be directly under the rings before completing your first rep.</p>

    </div>
  </div>
</div>
