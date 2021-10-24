<?php
require_once 'login.class.php';

class LoginContr extends Login {
  private $email;
  private $pwd;


  public function __construct($email, $pwd) {
    $this->email = $email;
    $this->pwd = $pwd;
  }

  public function loginUser(){
    if($this->emptyInput() == false){
      header('location: ../index.php?error=emptyinput');
    }

    $this->getUser($this->email, $this->pwd);
  }

  public function loginCus(){
    if($this->emptyInput() == false){
      header('location: ../index.php?error=emptyinput');
    }

    $this->getCustomer($this->email, $this->pwd);
  }

  private function emptyInput(){
    $result = true;
    if(empty($this->email) || empty($this->pwd)){
      $result = false;
    } 
    return $result;
  }

}
