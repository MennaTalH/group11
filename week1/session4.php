<?php

session_start();

// $age = "2_____0xxx";
//  echo    filter_var($age,FILTER_SANITIZE_NUMBER_INT);


// $email = "test(FCI)@yahoo.com";

//    $email = "testFciyahoo.com";

//     $email =   filter_var($email,FILTER_SANITIZE_EMAIL);

//    var_dump(filter_var($email,FILTER_VALIDATE_EMAIL));


//$url = "localhost/group11/session4.php";

// $url = "https://www.w3schoo��ls.co�m ";

// $url=  filter_var($url,FILTER_SANITIZE_URL);

// var_dump(filter_var($url,FILTER_VALIDATE_URL));



// $text = "<h1>test Account</h1>";

// echo  filter_var($text,FILTER_SANITIZE_STRING);

/*
  <h1>test Account</h1>

  &lt;   h1   &gt;      test Account&lt;/h1&gt;gt;

*/

//  $text = "<h1> test Account</h1>";
//  echo  filter_var($text,FILTER_SANITIZE_STRING);
// echo htmlspecialchars($text);







function Clean($input, $flag = 0)
{

    $input =  trim($input);

    if ($flag == 0) {
        $input =  filter_var($input, FILTER_SANITIZE_STRING);   // <>>>>>
    }
    return $input;
}





if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $name     = Clean($_POST['name']);
    $password = Clean($_POST['password'], 1);
    $email    = Clean($_POST['email']);


    # Validate ...... 

    $errors = [];

    # validate name .... 
    if (empty($name)) {
        $errors['name'] = "Field Required";
    }


    # validate email 
    if (empty($email)) {
        $errors['email'] = "Field Required";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['Email']   = "Invalid Email";
    }


    # validate password 
    if (empty($password)) {
        $errors['password'] = "Field Required";
    } elseif (strlen($password) < 6) {
        $errors['Password'] = "Length Must be >= 6 chars";
    }


    # Check ...... 
    if (count($errors) > 0) {
        // print errors .... 

        foreach ($errors as $key => $value) {
            # code...

            echo '* ' . $key . ' : ' . $value . '<br>';
        }
    } else {
        // echo 'Valid Data .... ';


        // $_SESSION['Username'] = $name;
        // $_SESSION['email']    = $email;


        // $_SESSION['user'] = ["name" => $name , "email" => $email];

        // $_SESSION['Message']    = "Welcome to php Course .... ";


        // echo 'Data Set to Session';



        $data =   implode('||', [$name, $email, $password]);

        if (setcookie("info", $data, time() + 86400, '/')) {
            echo 'Cookie Set To User Browser';
        } else {
            echo 'Error Try Again';
        }
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

        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

            <div class="form-group">
                <label for="exampleInputName">Name</label>
                <input type="text" class="form-control" required id="exampleInputName" aria-describedby="" name="name" placeholder="Enter Name">
            </div>


            <div class="form-group">
                <label for="exampleInputEmail">Email address</label>
                <input type="email" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp" name="email" placeholder="Enter email">
            </div>

            <div class="form-group">
                <label for="exampleInputPassword">New Password</label>
                <input type="password" class="form-control" required id="exampleInputPassword1" name="password" placeholder="Password">
            </div>


            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>


    <br>


    <a href="action.php?id=20130&name=testAccount">Student Info</a>



</body>






</html>




<!-- 
    https://tools.learningcontainer.com/sample-json-file.json 
   http://shopping.marwaradwan.org/api/Products/1/1/0/100/atoz

-->