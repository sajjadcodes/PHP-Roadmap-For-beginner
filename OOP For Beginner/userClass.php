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

    public $username = 'ryu';

    public $email = "myemail@email.com";
    //constructor
    public function __construct(){

            

    }

    public function addFriend(){

        //$this keyword, this instance of the class


        return "$this->username";
    }


}




