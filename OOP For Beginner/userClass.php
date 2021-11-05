<?php 


// Classes are like blueprints for objects. e.g  in real world Human being

//Properties: eys, noise, color, legs, hands etc
// Methods: see , smell, walk, speed etc 
// Train as an example
// Properties : length , colour, top speed, descrpiton the object

// Methods: Accelerate , brake

//  User  Class , properties and methods as unit

// Properties: username, email

// Methods: addFriend, postStatus

// object userOne, userTwo, userThree all have access to all all the properties and methods


// keyword class started, with Capital name 



class User {

    // properties
    //access modifier, private, public , protected
    private $username = 'ryu';

    private $email = "myemail@email.com";

    public $message ="Hello, I am a message";
    //constructor
    public function __construct($user,$email){

            $this->username = $user;
            $this->email=$email;

    }

    public function addFriend(){

        //$this keyword, this instance of the class


        return "$this->username";
    }


    // access more control way by using getter= return and setter = assign value

    //getters

    public function getUser(){
            return $this->username;
    }

    public function getEmail(){

        return $this->email;

    }

    //setters

    public function setEmail($email){

        if(strpos($email,'@') > -1){

            $this->email = $email;

        }
        else{

            echo "Please enter email address";
        }

    }


    public function setUser($user){



    }


}




class AdminUser  extends User{


    public $message ="This is override in admin";
    public  $level;
//constructor. child override parent. if you want to still parent load parent then use call parent parent constructor here.
    public function __construct($username, $email, $level){

        $this->level = $level;
        parent::__construct($username,$email);



    }

}
