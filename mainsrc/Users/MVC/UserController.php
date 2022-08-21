<?php

namespace App\Users\MVC;

use App\App\AbstractMVC\AbstractController;
use App\Users\UserDatabase;

/** Der UserController dient dazu Anwendungscode und HTML-Code zu trennen */
class UserController extends AbstractController {

    public function __construct(UserDatabase $userDatabase){
        $this->userDatabase = $userDatabase;
    }

    function checkMembership(){
        $userid = $_SESSION["userid"];
        $singleUser = $this->userDatabase->getSingleUser($userid);
        
        if ($_SESSION["membership"] === "pro") {

            $this->pageload("Users", "learningAreaPro", [
                "singleUser" => $singleUser,
                ]);

        }
        if ($_SESSION["membership"] === "enterprise") {

            $this->pageload("Users", "enterpriseLearning", [
                "singleUser" => $singleUser,
                ]);
            // header("Location: /Users/learningAreaPro"); 

        } else {
            $this->pageload("Users", "freeLearning", [
                "singleUser" => $singleUser,
                ]);
        }
        
    }

    public function getAllUsers() {

        $getmembers = $this->userDatabase->getMembers();

        $this->pageload("Users", "userlink", [ 
            # AUF DIE GENAUE SCHREIBWEISE ACHTEN
            "getmembers" => $getmembers,
            ]);
    }

    public function userprofile() {
    $userid = $_GET["userid"];
    $singleUser = $this->userDatabase->getSingleUser($userid);

        /** Hier werden die 3 Parameter übergeben für die Funktion Pageload aus dem AbstractControler
         *  directory, page und das Array mit den variablen */
        $this->pageload("Users", "user", [ 
            # AUF DIE GENAUE SCHREIBWEISE ACHTEN
            "singleUser" => $singleUser,
            ]);
    }


    public function updateUserProfile() {
        $pwdFail = null;
        $UpdateSuccess = null;
        $emailFail = null;

    $userid = $_GET["userid"];
    $singleUser = $this->userDatabase->getSingleUser($userid);

    if (!empty($_POST)){
        $firstname = $_POST["firstname"];
        $lastname = $_POST["lastname"];
        $username = $_POST["username"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $password_confirm = $_POST["password_confirm"];
        $bio = $_POST["bio"];
        $userid = $_GET["userid"];
        $submit = $_POST["submit"];


        // Validate password strength
        $uppercase = preg_match('@[A-Z]@', $password);
        $lowercase = preg_match('@[a-z]@', $password);
        $number    = preg_match('@[0-9]@', $password);
        $specialChars = preg_match('@[^\w]@', $password);

        
        if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8 || $_POST["password"] !== $_POST["password_confirm"] ) {
            $password = "";
            $pwdFail = 'Password should match and be at least 8 characters in length and should include at least one upper case letter, one number, and one special character. SORRY DUDE!';
        }
        // var_dump($_POST["email"]);
        else {
            // $user = $this->userDatabase->getUserByEmail($email);
            // if (empty($user)){

                $password_hash = password_hash($password, PASSWORD_DEFAULT);
                #speichert den user ein
                $this->userDatabase->updateUser($firstname,$lastname,$username,$email,$password_hash, $bio,$userid);


                
                
                header("Location: /Users/userprofile?userid=$userid>"); 
                
        }
    }

        /** Hier werden die 3 Parameter übergeben für die Funktion Pageload aus dem AbstractControler
         *  directory, page und das Array mit den variablen */
        $this->pageload("Users", "userprofile", [ 
            # AUF DIE GENAUE SCHREIBWEISE ACHTEN
            "singleUser" => $singleUser,
            "pwdFail" => $pwdFail,
            "UpdateSuccess" => $UpdateSuccess,
            "emailFail" => $emailFail,

            ]);
    }




    public function teacherProfile() {    

    $rick = $this->userDatabase->getSingleUser(1);
    $morty = $this->userDatabase->getSingleUser(2);
    $jerry = $this->userDatabase->getSingleUser(3);
    $summer = $this->userDatabase->getSingleUser(4);
    
        $this->pageload("Users", "teachers", [ 
            # AUF DIE GENAUE SCHREIBWEISE ACHTEN
            "rick" => $rick,
            "morty" => $morty,
            "jerry" => $jerry,
            "summer" => $summer,

            ]);
    }



 
     }



