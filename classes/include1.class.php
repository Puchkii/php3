<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
  
      <?php
      Class User{

     	public $firstname = "Kevin";
   		public $lastname = "Blank";
	  	private $birthdate = "11-01-1999";
		  private $email = "name";
  		private $password = "password";

      public function getPass(){
         return $this->wachtwoord;
       }
       public function __construct(){
       }
       public function __destruct(){
         echo '<br>';
         echo $this->birthdate;
         echo'<br>';
         echo $this->email;
         echo'<br>';
         echo $this->password;
       }
     }
      $Class =  new User;
      echo "<br>";
      echo $Class->firstname;
      echo"<br>";
      echo $Class->lastname;
     ?>
  </body>
</html>
