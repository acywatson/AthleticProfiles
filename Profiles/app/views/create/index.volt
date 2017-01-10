{{ get_doctype() }}

<html>

{{ form('create/signup', 'method': 'post') }}

    <label for="name">First Name</label>
    {{ text_field("firstName", "size": 32) }}

    <label for="name">Last Name</label>
    {{ text_field("lastName", "size": 32) }}

    <label for="type">Email</label>
    {{ text_field("email", "size": 32) }}

    <label for="type">Password</label>
    {{ password_field("password", "size": 32) }}

    {{ submit_button('Send') }}

{{ end_form() }}


</html>
