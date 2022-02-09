<?php 
 session_start();

//  echo $_SESSION['Username'].'<br>';

//  echo $_SESSION['email'].'<br>';


//   foreach ($_SESSION['user'] as $key => $value) {
//       # code...
//       echo ' * '.$key .' : '.$value.'<br>';
//   }


  if(count($_SESSION) > 0){

  echo $_SESSION['Message'].'<br>';
  echo $_SESSION['user']['name'];
  }else{
    echo ' No Session <br> ';
  }


//    if(isset($_SESSION['Message'])){
//        // code 
//    }





//    $age = 20; 


//    if(isset($age)){
//        echo $age;
//    }else{
//        echo 'not found';
//    }
?>
