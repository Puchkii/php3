<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

<h1>Opdracht 10</h1>

    <?php
     echo "<h1>Test 1</h1>";
      /*   class User {
          protected $_username;

            public function __construct($name) {
              $this->_username = $name;
          }

          public function getUsername() {
              return $this->_username;
          }
      }
      $class = new User;
      $class->getUsername();*/

      echo "<h1>Test 2</h1>";
      /*  class User {
      protected $_username;

        public function __construct($name) {
          $this->_username = $name;
      }

      public function getUsername() {
          return $this->_username;
      }
    }

      class Customer extends User {
          private $_customerId;

          public function __construct($username, $customerId) {
              $this->_username = $username;
              $this->_customerId = $customerId;
          }
      }

      $customer = new Customer('jan', 1);
      echo $customer->getUsername();*/

    echo "<h1>Test 3</h1>";

      /*class User {
      protected $_username;

        public function __construct($name) {
          $this->_username = $name;
      }

      public function getUsername() {
          return $this->_username;
      }
  }

  class Customer extends User {
      private $_customerId;

      public function __construct($username, $customerId) {
          $this->_username = $username;
          $this->_customerId = $customerId;
      }

      public function getUsername() {
          return 'De gebruikersnaam is: '.$this->_username;
      }
  }

  $customer = new Customer('jan', 1);
  echo $customer->getUsername();*/
  echo "<h1>Test 4</h1>";

    class User {
      protected $_username;

        public function __construct($name) {
          $this->_username = $name;
      }

      public function getUsername() {
          return $this->_username;
      }
  }

  class Customer extends User {
      private $_customerId;

      public function __construct($username, $customerId) {
          $this->_username = $username;
          $this->_customerId = $customerId;
      }

      public function getUsername() {
          if($this->_username == 'jan') {
              return parent::getUsername();
          }
          else {
              return 'De gebruikersnaam is: '.$this->_username;
          }
      }
  }

  $jan = new Customer('jan', 1);
  $inge = new Customer('inge', 2);

  echo $jan->getUsername(). '<br />' .$inge->getUsername();

    echo "<h1>Geteste code is nu als comment neergezet zodat het niet vastloopt.</h1>";




     ?>
          <h1>Opdracht 11</h1>
       <h2>
           Het is handig om het implementeren simpeler en sneller te maken omdat je niet een object hoeft te maken die zijn methodes aanroept.
       </h2>

  </body>
</html>
