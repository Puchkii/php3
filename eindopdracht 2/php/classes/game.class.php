<?php
  class Game {
    private $numbers = array(1,1,2,2,3,3,4,4,5,5,6,6,7,7,8,8);
    private $cards = array();
    private $finished = false;

    //session aanmaken zodat de staat van kaarten blijft
    public function __construct($new){
      session_start();
      if(isset($_SESSION['game']) && !$new){
        $this->cards = $_SESSION['game'];

      } else {//kaarten twee keer pakken
        for ($i=0; $i < count($this->numbers); $i++) {
          $card = new Card();
          $card->setNumber($this->numbers[$i]);
          array_push($this->cards, $card);
        }
        shuffle($this->cards);
        for($i = 0; $i<count($this->cards); $i++){
          $this->cards[$i]->setIndex($i);
        }
      }
    }
    //methodes om een html presentatie te krijgen van de kaarten
    public function getHtml(){
      $output = "";
      //shuffle($this->cards);
      for ($r=0; $r < 4; $r++) {
        for ($c=0; $c < 4; $c++) {
          $output .= $this->cards[$r*4 + $c]->getHtml();
        }
        $output .= "<br>";
      }
      return $output;
    }

    //de staten van de game
    public function getFinished() {
      return $this->finished;
    }

    private function countcards(){
      return count($this->cards);
    }

    public function save(){
      $_SESSION['game'] = $this->cards;
    }

  //open en close
  public function turnCard($index) {
    $debug = "";
    $guessed = 0;
    $firstopen = null;
    $open = array();
    $this->cards[$index]->turn();
    $debug .= "$index: ".$this->cards[$index];

    for ($i=0; $i < $this->countCards(); $i++) {
      if ($this->cards[$i]->getState() == "guessed") {
        $guessed++;
      }

      if ($this->cards[$i]->getState()=="open") {
        array_push($open, $this->cards[$i]);
      }
    }

    //staten en beurten van de kaarten
    switch(count($open)){
      case 0:
      break;
      case 1:
      break;
      case 2:
      if ($open[0]->getNumber()==$open[1]->getNumber()) {
        $open[0]->setState("guessed");
        $open[1]->setState("guessed");
        $guessed+=2;
      }
      break;
      case 3:
      if($open[0] != $this->cards[$index]) $open[0]->turn();
      if($open[1] != $this->cards[$index]) $open[1]->turn();
      if($open[2] != $this->cards[$index]) $open[2]->turn();
    }

    if ($guessed == 16) {
      $this->finished = true;
    }

    echo $debug . "<br>";
  }

  public function check(){
    for ($i=0; $i < $this->countCards(); $i++) {
      if ($this->cards[$i]->getState()=="open") {
        $this->cards[$i]->turn(true);
      }
    }
  }
}
?>
