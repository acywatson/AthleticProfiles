<?php $this->assets->outputCss(); ?>

<?= $this->elements->getMenu() ?>
<div class="container-fluid">

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

            echo "<p>";

            echo '<label for="', $element->getName(), '">', $element->getLabel(), "</label>  ";

            echo $element;

            echo "</p>";
        }

    ?>

    <input class="btn btn-primary btn-large" type="submit" value="Save Changes" />
</form>
    </div>
  </div>
</div>
