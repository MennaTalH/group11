<?php

require '../dbConnection.php';
require '../helpers.php';

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $key     = Clean($_POST['key']);



    # Validate ...... 

    $errors = [];

    # validate name .... 
    if (empty($key)) {
        $errors['key'] = "Field Required";
    }




    # Check ...... 
    if (count($errors) > 0) {
        // print errors .... 

        foreach ($errors as $key => $value) {
            # code...

            echo '* ' . $key . ' : ' . $value . '<br>';
        }
    } else {

        # DB CODE .......  

         $sql = "select * from users where name like '%$key%'";
         
         $result = mysqli_query($con,$sql); 

         while($data = mysqli_fetch_assoc($result)){

              echo '* Id : '.$data['id'].' Name : '. $data['name'].'<br>';
         }

    }
}




?>




<!DOCTYPE html>
<html lang="en">

<head>
    <title>Search</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container">
        <h2>Search Users </h2>

        <form action="<?php echo  htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" enctype="multipart/form-data">

            <div class="form-group">
                <label for="exampleInputName">Search kEY</label>
                <input type="text" class="form-control"  id="exampleInputName" aria-describedby="" name="key" placeholder="Enter Search Key">
            </div>




            <button type="submit" class="btn btn-primary">GO!!</button>
        </form>
    </div>


</body>

</html>