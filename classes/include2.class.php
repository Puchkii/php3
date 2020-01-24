<!DOCTYPE html>
<html lang="en" dir="ltr">
  	<head>
    	<meta charset="utf-8">
    	<title></title>
  	</head>
  	<body>

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
  	
	</body>
</html>