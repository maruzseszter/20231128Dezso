<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Szemely
 *
 * @author diak
 */
class Szemely {
  private $nev;
  private $kor;
  private $nyelv;
  public function __construct($nev,$kor,$nyelv) {
    $this->nev=$nev;  
    $this->kor=$kor;  
    $this->nyelv=$nyelv;  
  }
  public function getNev() {
    return $this->nev;
  }
  public function getKor() {
   return $this->kor;
  }
  public function getNyelv() {
   return $this->nyelv;
  }
  public function __toString() {
      $valasz="<tr><td>$this->nev</td>";
      $valasz.="<td>$this->kor</td>";
      $valasz.="<td>$this->nyelv</td>";
      return$valasz;
      
  }
}
