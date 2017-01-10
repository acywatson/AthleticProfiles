<?php $this->assets->outputCss(); ?>

{{ get_doctype() }}

<html>

<div class="container-fluid register">
  <div class="row">
    <div class="col-lg-12">

      <h1>Create an Account</h1>

{{ form('create/signup', 'method': 'post') }}

  <fieldset>

  <div class="form-group">

    <label for="name">First Name</label>

    <div class="controls">

    {{ text_field("firstName", "size": 32, "class": 'form-control') }}

   </div>
  </div>

    <div class="form-group">
    <label for="name">Last Name</label>
    <div class="controls">
    {{ text_field("lastName", "size": 32, "class": 'form-control') }}
  </div>
 </div>
    <div class="form-group">
    <label for="type">Email</label>
    <div class="controls">
    {{ text_field("email", "size": 32, "class": 'form-control') }}
  </div>
 </div>
    <div class="form-group">
    <label for="type">Password</label>
    <div class="controls">
    {{ password_field("password", "size": 32, "class": 'form-control') }}
  </div>
 </div>
    <div class="form-group">
    {{ submit_button('Send', "class": 'btn btn-large btn-primary') }}
  </div>
</fieldset>

{{ end_form() }}

</div>
</div>
</div>

</html>
