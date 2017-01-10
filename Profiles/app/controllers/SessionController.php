<?php

class SessionController extends ControllerBase
{

  public function initialize()
  {
      $this->tag->setTitle('Sign Up/Sign In');

  }

  public function indexAction()
  {
      if (!$this->request->isPost()) {
          $this->tag->setDefault('email', 'youremail@yourdomain.com');
          $this->tag->setDefault('password', 'phalcon');
      }
  }

  /**
   * Register an authenticated user into session data
   *
   * @param Profiles $profile
   */

    private function _registerSession($profile)
    {
        $this->session->set(
            "auth",
            [
                "id"   => $profile->id,
                "email" => $profile->email,
                "firstName" => $profile->firstName,
                "lastName" => $profile->lastName
            ]
        );
    }

    /**
     * This action authenticate and logs a user into the application
     */
    public function startAction()
    {
        if ($this->request->isPost()) {
            // Get the data from the user
            $email    = $this->request->getPost("email");
            $password = $this->request->getPost("password");

            // Find the user in the database
            $profile = Profiles::findFirst(
                [
                    "(email = :email:) AND password = :password:",
                    "bind" => [
                        "email"    => $email,
                        "password" => sha1($password),
                    ]
                ]
            );

            if ($profile !== false) {
                $this->_registerSession($profile);

                $this->flash->success(
                    "Welcome " . $profile->firstName
                );

                // Forward to the 'myprofile' controller if the user is valid
                return $this->dispatcher->forward(
                    [
                        "controller" => "myprofile",
                        "action"     => "index",
                    ]
                );
            }

            $this->flash->error(
                "Wrong email/password"
            );
        }

        // Forward to the login form again
        return $this->dispatcher->forward(
            [
                "controller" => "session",
                "action"     => "index",
            ]
        );
    }

/**
    * Finishes the active session redirecting to the index
    *
    * @return unknown
    */
   public function endAction()
   {
       $this->session->remove('auth');
       $this->flash->success('Goodbye!');
       return $this->dispatcher->forward(
           [
               "controller" => "index",
               "action"     => "index",
           ]
       );
    }
  }
