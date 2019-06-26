<?php

class create
{

  public $Name;
  public $School;
  public $GraduateDate;
  public $Major;
  public $Degree;

  public function __construct($values=[])
  {
  // is coalescing operator is going to check the value
    $this-> Name= $values['Name'] ?? '';
    $this-> School= $values['School'] ?? '';
    $this->GraduateDate = $values['GraduateDate'] ?? '';
    $this->Major = $values['Major'] ?? '';
    $this->Degree = $values['Degree'] ?? '';


  }
}
?>