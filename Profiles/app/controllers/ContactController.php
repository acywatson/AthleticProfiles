<?php

class ContactController extends ControllerBase
{

  public function indexAction(){

    $this->assets->addCss("css/style.css");
    $this->assets->addCss("https://fonts.googleapis.com/css?family=Pontano+Sans|Righteous", false);

  }

  public function sendAction(){


  }

}
