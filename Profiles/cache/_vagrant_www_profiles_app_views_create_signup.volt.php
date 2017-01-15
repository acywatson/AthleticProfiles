<?php

$this->assets->outputCss();

?>

<?= $this->tag->getDoctype() ?>

<html>

<div class="container-fluid register">
  <div class="row">
    <div class="col-lg-12">

<h1>Create an Account</h1>

<form method="post" action="/Profiles/create/signup">

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

</div>
</div>
</div>

</html>
