<?php

use Phalcon\Forms\Form;
use Phalcon\Forms\Element\Text;
use Phalcon\Forms\Element\Select;
use Phalcon\Forms\Element\Password;
use Phalcon\Validation\Validator\PresenceOf;
use Phalcon\Validation\Validator\Email;
use Phalcon\Validation\Validator\Numericality;

class SignupForm extends Form
{
    public function initialize()
    {

      $firstName = new Text("firstName");

      $firstName->setLabel("First Name");

      $firstName->setAttribute("class", "form-control");

      $firstName->addValidators(array(
        new PresenceOf(array(

          'message' => "Your name is required."

        ))
      ));

      $this->add($firstName);

      $lastName = new Text("lastName");

      $lastName->setLabel("Last Name");

      $lastName->setAttribute("class", "form-control");

      $lastName->addValidators(array(
        new PresenceOf(array(

          'message' => "Your name is required."

        ))
      ));

      $this->add($lastName);

      $email = new Text("email");

      $email->setLabel("Email Address");

      $email->setAttribute("class", "form-control");

      $email->addValidators(array(
        new PresenceOf(array(

          'message' => "Your email address is required."

        )),
        new Email(array(

          'message' => "Please enter a valid email address."

        ))
      ));

      $this->add($email);

      $password = new Password("password");

      $password->setLabel("Password");

      $password->setAttribute("class", "form-control");

      $password->addValidators(array(
        new PresenceOf(array(

          'message' => "A password is required."

        ))
      ));

      $this->add($password);

    }
}
