<?php
class User
{   
    private $err = "";
    public function signup($POST)
    {   
        $data = [];
        $db = Database::getInstance();
        $data['userFirstName'] = trim($POST['userFirstName']);
        $data['userLastName'] = trim($POST['userLastName']);
        $data['userEmail'] = trim($POST['userEmail']);
        $data['userPassword'] = trim($POST['userPassword']);

        if(empty($data['userEmail']) || !preg_match("/^[a-zA-Z0-9_-]+@[a-zA-Z]+.[a-zA-Z]+$/",$data['userEmail'])){
            $this->err .= "Not a valid email <br>";
        }
        if(empty($data['userFirstName']) || !preg_match("/^[a-zA-Z]+$/",$data['userFirstName'])){
            $this->err .= "Enter valid First Name <br>";
        }
        if(empty($data['userLastName']) || !preg_match("/^[a-zA-Z]+$/",$data['userLastName'])){
            $this->err .= "Enter valid Last Name <br>";
        }
        if(strlen($data['userPassword']) < 8){
            $this->err .= "Password must be atleast 8 charecters <br>";
        }
         //check email address 
        // $arr = [];
        // $sql = "SELECT * FROM users WHERE userEmail = :userEmail limit 1";
        // $arr['userEmail'] = $data['userEmail'];
        // $check = $db->read($sql,$arr);
        // if(is_array($check)){
        //   $this->err .= "Email already in use <br>";
        // }
        if($this->err == ""){
          //save
          $data['userType'] = "Customer";
          $data['userAltName'] = $this->generateUniqueId(11);
          $data['userJoined'] = date("Y-m-d H:i:s");

          $query = "INSERT INTO `users` (`userAltName`, `userEmail`, `userFirstName`,
           `userLastName`, `userPassword`, `userJoined`,  `userType`)
           VALUES (:userAltName,:userEmail,:userFirstName,:userLastName,:userPassword,:userJoined,:userType)";
        
         $result = $db->write($query,$data);
         if($result){
             header("Location: ". ROOT . "login");
             die;
         }

        }
        
        $_SESSION['err'] = $this->err;


    }

    public function login()
    {

    }

    public function getUser()
    {

    }

    private function generateUniqueId($strength = 16) 
    {
       $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
       $input_length = strlen($permitted_chars);
       $random_string = '';

       for($i = 0; $i < $strength; $i++) {

           $random_character = $permitted_chars[mt_rand(0, $input_length - 1)];
           $random_string .= $random_character;

       }

       return $random_string;
   
    }
}