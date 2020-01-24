<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
    	<meta charset="utf-8">
    	<title></title>
  	</head>
  	<body>
    	<h1>Opdracht 1</h1>
		  	<h2>Wat is het verschil tussen een klasse en een object?<br>
	  		<br>Een object defineert de klasse en de klasse is het geheel van alle objecten bij elkaar.<br></h2><br>

    	<h1>Opdracht 2</h1>
    <h2>
    	<?php
        	Class User{

        	public $firstname = "Kevin";
          	public $lastname = "Blank";
        	public $birthdate = "11-01-1999";
        	}

        	$object = new User;
        	var_dump($object);
			echo $object->firstname;
        	echo "<br>";
    		echo $object->lastname;
    		echo "<br>";
        	echo $object->birthdate;
			?>
    	</h2>


		<h1>Opdracht 3</h1>
  			<h2>
    			Public:     Iedereen kan bij public komen.<br>
    			Private:    Word in zijn eigen klas gehouden.<br>
    			Protected:  Alleen te bereiken via overerving (extends).<br><br>

			    Waarom je niet alles public moet hebben:<br>
    			Passwords en usernames moeten buiten bereik blijven, als iedereen erbij kan zorg je voor situaties dat data kan worden gestolen.<br>
  			</h2>

		<h1>Opdracht 4</h1>
  		<h2>
    		<?php
    			Class UserClass{

      			public $firstname = "Kevin";
      			public $lastname = "Blank";
      			private $birthdate = "11-01-1999";
    			private $username = "name";
    			private $password = "password";

    			private function settings(){
        			echo "Deze functie is private";
      				}
    			}
    			echo "<br>";
    			$object2 = new UserClass;
    			var_dump($object2);
    			echo "<br><br>";
			
    			echo $object2->firstname;
    			echo"<br>";
    			echo $object2->lastname;
    			echo "<br>";
    		?>
  		</h2>

  		<h1>Opdracht 5</h1>
			<?php
    			Class UserClass1{

    			public $firstname = "Kevin";
    			public $lastname = "Blank";
				public $birthdate = "11-01-1999";
    			private $username = "name";
    			private  $password = "password";

    			private $_username;

				public function __construct($name) {
    				$this->_username = $name;
				}

    			public function getUsername() {
        			return $this->_username;
    				}
   				}

    			$name1 = new UserClass1('Kevin Blank');
				echo $name1->getUsername();
    		?>

    		<h1>Opdracht 6</h1>
    			<h2>Er word een html table gemaakt in php. Content word opgehaald op een OOP manier. De rijen worden toegewezen met de method append en 
       			dan in de cellen gestopt met de method getCells(). Het gaat om dat objecten tot een geheel word gemaakt.</h2>

     		<h1>Opdracht 7</h1>
       			<h2>Een constructor public laten is beter zodat je het overal kunnen aanroepen.</h2>

    		<h1>Opdracht 8</h1>
        		<h2>
        		   Appel extends fruit<br>
        		   BMW extends auto<br>
        		   Bus extends vervoermiddel<br>
       			</h2>

    		<h1>Opdracht 9</h1>
    			<h2>Auto extends bmw.</h2>
	
	</body>
</html>