<?php

use Phalcon\Forms\Form;
use Phalcon\Forms\Element\Text;
use Phalcon\Forms\Element\Select;
use Phalcon\Validation\Validator\PresenceOf;
use Phalcon\Validation\Validator\Email;
use Phalcon\Validation\Validator\Numericality;

class CreateForm extends Form
{
    public function initialize()
    {
      
      $calScore = new Text("calScore");

      $calScore->setLabel("Calorie Score");

      $calScore->setAttribute("class", "form-control");

      $this->add($calScore);

      $strengthScore = new Text("strengthScore");

      $strengthScore->setLabel("Push Up Score");

      $strengthScore->setAttribute("class", "form-control");

      $this->add($strengthScore);

      $enduranceScore = new Text("enduranceScore");

      $enduranceScore->setLabel("Plank Score");

      $enduranceScore->setAttribute("class", "form-control");

      $this->add($enduranceScore);

      $balanceScore = new Text("balanceScore");

      $balanceScore->setLabel("Ring Row/Pull Up Score");

      $balanceScore->setAttribute("class", "form-control");

      $this->add($balanceScore);

      $sport = new Select(
                "sport",
                [

                  "BMX"    => "BMX Racing"  ,
                  "BMXF"   => "BMX Fresstyle",
                  "MTBDH"  => "Downhill MTB",
                  "MTBE"   => "Enduro MTB",
                  "MTBXC"  => "Cross-Country MTB",
                  "MX"     => "Motocross",
                  "MXSX"   => "Supercross",
                  "MXE"    => "Endurocross",

                ]

            );
      $sport->setLabel("Sport");

      $sport->setAttribute("class", "form-control");

      $this->add($sport);
    }
}
