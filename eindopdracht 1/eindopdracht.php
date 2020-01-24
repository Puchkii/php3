<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <h1>Eindopdracht</h1>
    <?php
    Class home{
      const BR ='<br>';
      private $tax;
      private $tax1;
      private $rooms = 6;
      private $toilets = 3;
      private $heating = "Yes";
      private $straat = "Brummelkampen";
      private $homeNumber = "11";
      private $residence = "Assen";
      private $squareMeter = 400;
      private $WOZ_worth = 400.000;

      public function __construct(){
        echo "Number of rooms: ",$this->rooms.self::BR;
        echo "Number of toilets: ",$this->toilets.self::BR;
        echo "Heating: ",$this->heating.self::BR;
        echo "Home Number: ",$this->homeNumber.self::BR;
        echo "residence: ",$this->residence.self::BR;
        echo "squareMeter: ",$this->squareMeter.self::BR;
        echo "WOZ-Worth: ",$this->WOZ_worth.self::BR;
        echo "<br>";
      }

      public function tax(){
        if($this->WOZ_worth <= 100.000){
          echo "de WOZ tax is: ",$this->tax = 600,self::BR;
        }
        elseif ($this->WOZ_worth <= 200.000) {
          echo "de WOZ tax is: ",$this->tax = 2000,self::BR;
        }
        elseif ($this->WOZ_worth > 200.000) {
          echo "The WOZ tax is: ",$this->tax = 6000,self::BR;
        }

        if($this->rooms <= 1){
          echo "The room tax is: ",$this->tax1 = 600,self::BR;
        }
        elseif ($this->rooms <= 2 ) {
          echo "The room tax is: ",$this->tax1 = 2000,self::BR;
        }
        elseif ($this->rooms > 3) {
          echo "The room tax is: ",$this->tax1 = 6000,self::BR;
          echo "total: ",$this->tax + $this->tax1,self::BR;
        }
      }

      public function __destruct(){
      }
    }

    $Class = new home;
    echo $Class->tax();

     ?>
  </body>
</html>
