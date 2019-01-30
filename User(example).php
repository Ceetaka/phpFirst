

<?php
include "Profile.php";
class User extends Profile{

    //property
    public $username = 'johndoe';
    public $firstName = 'John';
    public $lastName = 'Doe';
    public $single;

    //method
    public function __construct($par1,$par2){
        $this->single = $par1;
        $this->username = $par2;
    }
    
    public function display(){
        return $this->data1;
    }

    public function hello_world(){
        return $this->firstName;
    }

    public function find_user($name){
        $userFound = $name;
        return "The name of the user is ".$userFound;
    }
} 
//creat on instance of the class
// $user = new User;

// echo $user->firstName." ".$user->lastName;

// echo $user->hello_world();
?>