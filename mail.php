<?php

  $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
  $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
  $subject = filter_var($_POST['subj'], FILTER_SANITIZE_STRING);
  $msg = filter_var($_POST['msg'], FILTER_SANITIZE_STRING);

  
  //check if fields not empty
  if(!empty($name) && !empty($email) && !empty($subject) && !empty($msg)){
    //check if email is valid
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
      //check on name length
      if(strlen($name) > 3){
        //check on message length
        if(strlen($msg) >= 20){
          //send message
          $header = 'From: ' . $email . "\r\n";
          mail('hosny.abbes@gmail.com', $subject, $msg, $header);
          echo 'success';
        
        }else{echo 'Message must be more than 20 characters';}
      }else{echo 'Name is too short';}
    }else{echo 'Please enter a valid email';}
  }else{echo 'Fields cant be empty';}
  


?>