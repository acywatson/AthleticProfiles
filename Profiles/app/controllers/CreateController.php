<?php

class CreateController extends ControllerBase
{

    public function indexAction()
    {

      $this->assets->addCss("css/style.css");
      $this->assets->addCss("https://fonts.googleapis.com/css?family=Pontano+Sans|Righteous", false);

    }

    public function signupAction(){

      if ($this->request->isPost()) {

                $profile = new Profiles([
                    'firstName'      => $this->request->getPost('firstName', 'striptags'),
                    'lastName'       => $this->request->getPost('lastName', 'striptags'),
                    'email'          => $this->request->getPost('email'),
                    'password'       => sha1($this->request->getPost('password')),
                    'strengthScore'  => 100,
                    'enduranceScore' => 100,
                    'balanceScore'   => 100,
                    'firstTime'      => 1
                ]);

                if ($profile->save()) {
                    return $this->dispatcher->forward([
                        'controller' => 'index',
                        'action' => 'index'
                    ]);
                }
                $this->flash->error($user->getMessages());

        }
    }


}
