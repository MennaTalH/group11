<?php

// CRUD    
/*
   C : CREATE  ** 
   R : READ 
   U : UPDATE 
   D : DELETE 
*/
require 'dbConnection.php';
require 'checkLogin.php';

require 'helpers.php';


# Fetch Departments .... 
$sql = "select * from departments";
$dep_op  = mysqli_query($con,$sql);


# Fetch data based on Id ...... 
$id = $_GET['id'];

$sql = "select * from users where id = $id";
$op  = mysqli_query($con,$sql);

$data= mysqli_fetch_assoc($op); 







if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $name     = Clean($_POST['name']);
    $email    = Clean($_POST['email']);
    $dep_id   = Clean($_POST['dep_id']);


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

        # validate Department 
        if (empty($dep_id)) {
            $errors['Department'] = "Field Required";
        } elseif (!filter_var($dep_id,FILTER_VALIDATE_INT)) {
            $errors['Department'] = "Invalid Department Id";
        }
    



 # Validate Image ..... 
 if (!empty($_FILES['image']['name'])) {
       
   $imgName  = $_FILES['image']['name'];
   $imgTemp  = $_FILES['image']['tmp_name'];
   $imgType  = $_FILES['image']['type'];   //size 

   $nameArray =  explode('.', $imgName);
   $imgExtension =  strtolower(end($nameArray));
   $imgFinalName = time() . rand() . '.' . $imgExtension;
   $allowedExt = ['png', 'jpg'];

   if (!in_array($imgExtension, $allowedExt)) {
       $errors['Image']   = "Not Allowed Extension";
   }

}




    # Check ...... 
    if (count($errors) > 0) {
        // print errors .... 

        foreach ($errors as $key => $value) {
            # code...

            echo '* ' . $key . ' : ' . $value . '<br>';
        }
    } else {

  
        if (!empty($_FILES['image']['name'])) {


            $disPath = 'uploads/' . $imgFinalName;

            if (move_uploaded_file($imgTemp, $disPath)) {

               # delete old image .... 
               unlink('./uploads/'.$data['image']);
            }

            
        }else{
            $imgFinalName = $data['image'];
        }
    

        # DB CODE .......  

        $sql = "update users set name = '$name' , email = '$email' , image = '$imgFinalName' , dep_id = $dep_id where  id = $id";

        $op  =  mysqli_query($con,$sql);


        if($op){

          $_SESSION['Message']  = 'Raw Updated'; 

          header("Location: index.php");
         


        }else{
            echo 'Error Try Again '.mysqli_error($con);
        }

        mysqli_close($con);

    }
}

/*
   
 create db   (blog)    >>> table [title , content , category ]     
 create connection by php code .... 

*/


?>




<!DOCTYPE html>
<html lang="en">

<head>
    <title>Edit</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container">
        <h2>Edit Account</h2>

        <form action="edit.php?id=<?php echo $id;?>" method="post"  enctype="multipart/form-data">

            <div class="form-group">
                <label for="exampleInputName">Name</label>
                <input type="text" class="form-control" required id="exampleInputName" aria-describedby="" name="name"  value= "<?php echo $data['name'];?>"  placeholder="Enter Name">
            </div>


            <div class="form-group">
                <label for="exampleInputEmail">Email address</label>
                <input type="email" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value= "<?php echo $data['email'];?>" placeholder="Enter email">
            </div>

            <!-- <div class="form-group">
                <label for="exampleInputPassword">New Password</label>
                <input type="password" class="form-control" required id="exampleInputPassword1" name="password" placeholder="Password">
            </div> -->



            
            <div class="form-group">
                <label for="exampleInputPassword">Departments</label>
                <select class="form-control"  name="dep_id" >
                 
                <?php 
                   while($dep_data = mysqli_fetch_assoc($dep_op)){
                ?>

                <option value="<?php echo $dep_data['id'];?>"    <?php if($data['dep_id'] ==  $dep_data['id']) { echo 'selected';}?>   ><?php echo $dep_data['title'];?></option>

                <?php }  ?>

                </select>    
            </div>



            <div class="form-group">
                <label for="exampleInputPassword">Image</label>
                <input type="file" name="image">
            </div>

       

           <img src="./uploads/<?php echo $data['image'];?>"   height="50"  width="50">

           <br>


            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>


</body>

</html>