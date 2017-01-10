<?php
class ErrorsController extends ControllerBase
{

    public function initialize()
    {
        $this->tag->setTitle('Oops!');

    }

    public function show404Action()
    {
      $this->flash->error("404");
    }

    public function show401Action()
    {
      $this->flash->error("401");
    }

    public function show500Action()
    {
      $this->flash->error("500");
    }

}
