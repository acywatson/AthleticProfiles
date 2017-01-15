<?php $this->assets->outputCss(); ?>

{{ elements.getMenu() }}

<div class="container-fluid create-profile">
  <div class="row">
    <div class="col-lg-12">

<h1>Create Your Athletic Profile</h1>

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
                    echo "<div class='alert alert-danger'>";
                    echo $message;
                    echo "</div>";
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
    <input type="submit" value="Create" class="btn btn-large btn-primary"/>
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

    </div> <!-- col-lg-12 -->
  </div> <!-- row -->
</div> <!-- container-fluid -->
