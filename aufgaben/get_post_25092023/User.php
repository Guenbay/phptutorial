<?php

class User 
{
    
    public $usrname;
    public $email;
    private $password;


    public function eintragen($wert, $art)
    {
        
        if ($art == "name")
        {
            $this->usrname = $wert;
            return $this->usrname;
        }

        if ($art == "email")
        {
            $this->email = $wert;
            return $this->email;
        }

        if ($art == "password")
        {
            $this->password = $wert;
            return $this->password;
        }
    }

//    public function setusrname($usrname)
//        {
//            return $this->usrname;
//        }
//
//    public function setemail($email)
//        {
//            return $this->email;
//        }
//
//    public function setpassword($password)
//        {
//            return $this->password;
//        }
}
    
 ?>
