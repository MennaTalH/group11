<?php


if ($_SERVER['REQUEST_METHOD'] == "POST") {

    // CODE ...... 

    //   $name = $_POST['name'];



    if (!empty($_FILES['image']['name'])) {

        $imgName  = $_FILES['image']['name'];
        $imgTemp  = $_FILES['image']['tmp_name'];
        $imgType  = $_FILES['image']['type'];   //size 

        $nameArray =  explode('.', $imgName);
        $imgExtension =  strtolower(end($nameArray));

        $imgFinalName = time() . rand() . '.' . $imgExtension;



        $allowedExt = ['png', 'jpg'];

        if (in_array($imgExtension, $allowedExt)) {
            //  code .....  

            $disPath = 'uploads/' . $imgFinalName;

            if (move_uploaded_file($imgTemp, $disPath)) {
                echo 'File Uploaded';
            } else {
                echo 'Error In Uploading Try Again';
            }
        } else {
            echo 'InValid Extension';
        }
    } else {

        echo ' * Image Required';
    }
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
        <h2>Upload File</h2>

        <form action="<?php echo   htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" enctype="multipart/form-data">


            <!--         
        <div class="form-group">
                <label for="exampleInputName">Name</label>
                <input type="text" class="form-control"  required id="exampleInputName" aria-describedby=""   name="name" placeholder="Enter Name">
            </div> -->


            <div class="form-group">
                <label for="exampleInputPassword">Image</label>
                <input type="file" name="image">
            </div>


            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>


    <br>


</body>






</html>