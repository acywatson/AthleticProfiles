<?php
class ErrorsController extends ControllerBase
{

    public function initialize()
    {
        $this->tag->setTitle('Oops!');

    }

    public function show404Action()
    {
      $this->flash->error("Error Code 404 - Resource not found.");
    }

    public function show401Action()
    {
      $this->flash->error("Error Code 401 - Access Denied");
    }

    public function show500Action()
    {
      $this->flash->error("Error Code 500 - Internal Server Error");

    }

}
