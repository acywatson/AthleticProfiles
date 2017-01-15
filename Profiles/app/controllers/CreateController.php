<?php

class CreateController extends ControllerBase
{

    public function indexAction()
    {

      $this->assets->addCss("css/style.css");
      $this->assets->addCss("https://fonts.googleapis.com/css?family=Pontano+Sans|Righteous", false);

      $this->view->form = new SignupForm;

    }

    public function signupAction(){

      $this->assets->addCss("css/style.css");
      $this->assets->addCss("https://fonts.googleapis.com/css?family=Pontano+Sans|Righteous", false);

      $form = new SignupForm;

      if ($form->isValid($this->request->getPost()) != false) {

        $email = $this->request->getPost('email');

        $userExists = Profiles::findFirst("email='$email'");

        if($userExists){

          $this->flash->error("This email address is already registered.");

          //email address already exists.  Redirect back to signup form and throw an error.

          return $this->dispatcher->forward([
              'action' => 'index',
          ]);

        }else{

                $profile = new Profiles([
                    'firstName'      => $this->request->getPost('firstName', 'striptags'),
                    'lastName'       => $this->request->getPost('lastName', 'striptags'),
                    'email'          => $this->request->getPost('email', 'email'),
                    'password'       => sha1($this->request->getPost('password')),
                    'strengthScore'  => 100,
                    'enduranceScore' => 100,
                    'balanceScore'   => 100,
                    'calScore'       => 100,
                    'firstTime'      => 1
                ]);

                if ($profile->save()) {
                    return $this->dispatcher->forward([
                        'controller' => 'session',
                        'action' => 'index'
                    ]);
                }
                $this->flash->error($profile->getMessages());
            }

        }
        $this->view->form = $form;
    }
}
