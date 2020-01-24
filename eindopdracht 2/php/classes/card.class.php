<?php
  class Card{
    private $index;
    private $number;
    private $state = "closed";

    public function setIndex($index){
      $this->index = $index;
    }

    public function getHtml(){
      //de staat van een kaart
      switch($this->state){
        case "open":
        return "<button type=\"button\"  class=\"open\" name=\"button\">" . $this->number . "</button>";
        break;
        case "closed":
        return "<a href=\"?id=" . $this->index . "\"><button  class=\"closed\" name=\"button\">?</button></a>";
        break;
        case "guessed":
        return "<button type=\"button\" class=\"guessed\" name=\"button\">" . $this->number . "</button>";
        break;
      }
    }

    public function turn(){
      if ($this->state == "closed") {
        $this->state = "open";
      }else{
        $this->state = "closed";
      }
    }

    public function getState(){
      return $this->state;
    }

    public function setState($state){
      $this->state = $state;
    }

    public function getNumber(){
      return $this->number;
    }

    public function setNumber($number){
      $this->number = $number;
    }

    public function __toString(){
      return "Number: $this->number, State: $this->state";
    }
  }
 ?>
