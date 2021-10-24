<?php

include 'dbh.class.php';

class Login extends Dbh {
  protected function getUser($email, $pwd){
    $stmt = $this->connect()->prepare(
      'SELECT * FROM employee WHERE email=? AND password=?'
    );
    if(!($stmt->execute(array($email, $pwd)))) {
      $stmt = null;
      header('location: ../index.php?error=stmtfailed');
      exit();
    }
    if($stmt->rowCount() == 0){
      $stmt = null;
      header('location: ../index.php?error=nouserfound');
      exit();
    }
    
    $user = $stmt->fetchAll();
    
    session_start();
    $_SESSION['user_id'] = $user[0]['id'];
    $_SESSION['user_name'] = $user[0]['name'];
    $_SESSION['user_email'] = $user[0]['email'];
    $_SESSION['user_phone'] = $user[0]['phone'];
    $_SESSION['isAdmin'] = $user[0]['isAdmin'];
    //print_r($_SESSION);
    //die();
    header('location: ../index.php');
  }
  
  protected function getCustomer($email, $pwd){
    $stmt = $this->connect()->prepare(
      'SELECT * FROM customer WHERE email=? AND password=?'
    );
    if(!($stmt->execute(array($email, $pwd)))) {
      $stmt = null;
      header('location: ../index.php?error=stmtfailed');
      exit();
    }
    if($stmt->rowCount() == 0){
      $stmt = null;
      header('location: ../index.php?error=nouserfound');
      exit();
    }
    
    $user = $stmt->fetchAll();
    
    session_start();
    $_SESSION['user_id'] = $user[0]['id'];
    $_SESSION['user_name'] = $user[0]['name'];
    $_SESSION['user_email'] = $user[0]['email'];
    $_SESSION['user_phone'] = $user[0]['phone'];
    $_SESSION['isAdmin'] = $user[0]['isAdmin'];    
    // print_r($_SESSION);
    // die();
    header('location: ../index.php');
  }
}
