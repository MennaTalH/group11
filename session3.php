<?php

// $age = 20;
// $name = "root";


// $student = ["ahmed",30,3.4];   // indexed

// $students = array("ahmed",30,3.4);


// echo $student;

// print_r($student);
// Array ( [0] => ahmed [1] => 30 [2] => 3.4 )



// echo  $student[2];


// foreach($student as $key => $value){

//     echo   '* '.$key.' || '.$value.'<br>';

// }


// echo   count($student);



// for ($i=0; $i < count($student) ; $i++) { 
//     # code...

//    echo '* '.$i.' || '.$student[$i].'<br>';

// }



// $student  = ["name" => "root","age"  => 30,"GPA" => 3.4];


// // print_r($student);

// // echo $student["name"];

// foreach($student as $key => $value){

//     echo   '* '.$key.' || '.$value.'<br>';

// }




// $students = [

//      ["name" => "root","age"  => 30,"GPA" => 3.4],
//      ["name" => "root2","age"  => 33,"GPA" => 3.00],
//      ["name" => "root3","age"  => 34,"GPA" => 3.2]

// ];



// // print_r($students);


// // echo $students[0]['name'];


// foreach($students  as $value){



//     foreach($value as $key => $raw){

//        echo  '* '.$key .' '.$raw.' || ';

//     }

//     echo '<br>';
// }



// $colors = ["a",'c','b'];     

/// sort     rsort 

// sort($colors);

// rsort($colors);


// $studentsAges = ["x" => 25 , "y" => 20 , "root" => 30];

// // asort  arsort    value ..... 
// // ksort  krsort    KEY ....... 

// // asort($studentsAges);

// // arsort($studentsAges);

// // ksort($studentsAges);
// krsort($studentsAges);

// print_r($studentsAges);




// $x = 20;



// // print_r($GLOBALS);


// function printX(){


//     echo $GLOBALS['x'];
// }


// printX();


// echo $_SERVER['PHP_SELF'];
// echo   $_SERVER['SERVER_NAME'];
//    echo $_SERVER['HTTP_HOST'];
// echo  $_SERVER['SCRIPT_NAME'];
// ECHO $_SERVER['SERVER_SOFTWARE'];
//echo   $_SERVER['REMOTE_ADDR'];
// echo   $_SERVER['SERVER_ADDR'];
// echo $_SERVER['QUERY_STRING'];

// echo $_SERVER['REQUEST_METHOD'];


// $_REQUEST[]




// Filters ..... 


// $age = 20.1;

// var_dump(filter_var($age,FILTER_VALIDATE_INT));

// $email = "testyahoo.com";

//  var_dump(filter_var($email,FILTER_VALIDATE_EMAIL));


// $url = "localhost/group11/session3.php";

//     var_dump(filter_var($url,FILTER_VALIDATE_URL));

// $ip = "127.0.0";

//         var_dump(filter_var($ip,FILTER_VALIDATE_IP));



// filter_validate_float


//   $status = false;
    
//   var_dump(filter_var($status,FILTER_VALIDATE_BOOLEAN));




function Clean($input,$flag = 0){

    $input =  trim($input);

    if($flag == 0){
    $input =  filter_var($input,FILTER_SANITIZE_STRING);   // <>>>>>
    }
    return $input;
}





 if($_SERVER['REQUEST_METHOD'] == "POST"){
   
    $name     = Clean($_POST['name']);
    $password = Clean($_POST['password'],1);
    $email    = Clean($_POST['email']);


   # Validate ...... 

   $errors = []; 

   # validate name .... 
   if(empty($name)){
       $errors['name'] = "Field Required"; 
   }


   # validate email 
   if(empty($email)){
       $errors['email'] = "Field Required";
   }elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
      $errors['Email']   = "Invalid Email";
   }


   # validate password 
   if(empty($password)){
       $errors['password'] = "Field Required";
   }elseif(strlen($password) < 6){
       $errors['Password'] = "Length Must be >= 6 chars";
   }


  # Check ...... 
  if(count($errors) > 0){
      // print errors .... 

    foreach ($errors as $key => $value) {
        # code...

        echo '* '.$key.' : '.$value.'<br>';
    }



  }else{
      echo 'Valid Data .... ';
  }




    // $name     = $_REQUEST['name'];
    // $password = $_REQUEST['password'];
    // $email    = $_REQUEST['email'];


    // echo $name.' || '.$email.' || '.$password;
 }

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <title>Register</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container">
        <h2>Register</h2>
      
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post"  >

            <div class="form-group">
                <label for="exampleInputName">Name</label>
                <input type="text" class="form-control"  required id="exampleInputName" aria-describedby=""   name="name" placeholder="Enter Name">
            </div>


            <div class="form-group">
                <label for="exampleInputEmail">Email address</label>
                <input type="email" class="form-control"  required  id="exampleInputEmail1" aria-describedby="emailHelp" name="email" placeholder="Enter email">
            </div>

            <div class="form-group">
                <label for="exampleInputPassword">New Password</label>
                <input type="password" class="form-control" required id="exampleInputPassword1"   name="password" placeholder="Password">
            </div>


            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>


    <br>


    <a href="action.php?id=20130&name=testAccount">Student Info</a>



</body>






</html> 


