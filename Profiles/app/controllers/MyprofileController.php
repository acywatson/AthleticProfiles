<?php

use Phalcon\Flash;
use Phalcon\Session;
use Phalcon\Mvc\Dispatcher;

class MyprofileController extends ControllerBase{

  public function indexAction(){

    $this->assets->addCss("css/style.css");
    $this->assets->addCss("https://fonts.googleapis.com/css?family=Pontano+Sans|Righteous", false);

    $auth = $this->session->get("auth");

    $this->view->firstName = $auth['firstName'];
    $this->view->lastName  = $auth['lastName'];

    $profile = Profiles::findFirst($auth['id']);

    $this->view->strengthScore = $profile->strengthScore;
    $this->view->enduranceScore = $profile->enduranceScore;
    $this->view->balanceScore = $profile->balanceScore;
    $this->view->sport = $profile->sport;

    if($profile->firstTime){

      $this->dispatcher->forward([

        'controller' => 'myprofile',
        'action'     => 'start',

      ]);

    }

  }

  public function createAction(){

    $this->assets->addCss("css/style.css");
    $this->assets->addCss("https://fonts.googleapis.com/css?family=Pontano+Sans|Righteous", false);

    $this->view->form = new CreateForm;

  }

  public function editAction(){

    $this->assets->addCss("css/style.css");
    $this->assets->addCss("https://fonts.googleapis.com/css?family=Pontano+Sans|Righteous", false);

    $this->view->form = new CreateForm;

  }

  public function saveAction(){

  $this->assets->addCss("css/style.css");
  $this->assets->addCss("https://fonts.googleapis.com/css?family=Pontano+Sans|Righteous", false);

  $auth = $this->session->get("auth");

  $profile = Profiles::findFirst($auth['id']);

  if ($this->request->isPost()) {

    $profile->strengthScore = $this->request->getPost('strengthScore','striptags');
    $profile->enduranceScore = $this->request->getPost('enduranceScore','striptags');
    $profile->balanceScore = $this->request->getPost('balanceScore','striptags');
    $profile->sport = $this->request->getPost('sport','striptags');

    $profile->firstTime = 0;

    if ($profile->save()){

      $this->flash->success("Profile successfully updated!");

      $this->dispatcher->forward([

        'controller' => 'myprofile',
        'action'     => 'index',

      ]);

    };

  }

 }

 public function startAction(){

   $this->assets->addCss("css/style.css");
   $this->assets->addCss("https://fonts.googleapis.com/css?family=Pontano+Sans|Righteous", false);



 }

 public function instructionsAction(){

   $this->assets->addCss("css/style.css");
   $this->assets->addCss("https://fonts.googleapis.com/css?family=Pontano+Sans|Righteous", false);



 }

}
