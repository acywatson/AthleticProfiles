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

      $strengthScore = new Text("strengthScore");

      $strengthScore->setLabel("Strength Score");

      $this->add($strengthScore);

      $enduranceScore = new Text("enduranceScore");

      $enduranceScore->setLabel("Endurance Score");

      $this->add($enduranceScore);

      $balanceScore = new Text("balanceScore");

      $balanceScore->setLabel("Balance Score");

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
      $this->add($sport);
    }
}
