<?php

declare(strict_types=1);
//    if(){

//    }



// $color = "blue00";

//   switch($color){

//     case "red": 
//         // code ..... 
//         echo 'color is red';
//         break;

//     case "blue": 
//         // code .... 
//         echo "color is blue" ;
//         break;

//     default: 
//     // code ... 
//     echo 'Error in Your Color';
//     break;    

//   }


//  $age = 40;

// switch ($age) {
//     case ($age <= 10):
//         # code...
//         echo 'Age <= 10';
//         break;

//     case ($age > 10 and $age <=20):

//         # code .... 
//         echo "age > 10 and age <=20";
//         break;


// }




// echo 'test messsage';
// echo 'test messsage';
// echo 'test messsage';


//   for ($i=1; $i <= 3; $i++) { 
//       # code...
//       echo 'test messsage <br>';
//   }



// $a = 1;
// while ($a <= 3 ) {
//     # code...
//     echo 'test messsage <br>';
//     $a++;
// }



// $a = 4;
// do {
//     # code...

//     echo 'test messsage <br>';

// } while ($a <= 3);


?>




<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>    <?php   // echo 'TEST TITLE';   
            ?>  </h1>

    <p>  <?php   // echo 'test content';
            ?>   </p>
</body>
</html> -->


<?php

//   $title = "test title";

// echo '
// <!DOCTYPE html>
// <html lang="en">
// <head>
//     <meta charset="UTF-8">
//     <meta http-equiv="X-UA-Compatible" content="IE=edge">
//     <meta name="viewport" content="width=device-width, initial-scale=1.0">
//     <title>Document</title>
// </head>
// <body>
//     <h1>'. $title  .'</h1>
// </body>
// </html>
// ';

?>



<?php  

    // break    continue 


    // for ($i=0; $i < 3 ; $i++) { 
    //     # code...

    //    if($i == 1 ){
    //      //  break;
    //        continue;
    //     }

    //    echo $i.'<br>';


    // }



// // code 

//    echo "test Welcome Message";



 # Functions ..... 


//  function printMessage($name,$id,$phone = null)
//  {
//      // code .... 

//      return 'welcome , '.$name.' & id = '.$id.' & phone = '.$phone;
//  }


//   $text =   printMessage().'ROOT';
//   echo $text;

// echo printMessage("root",2013,'010xxx');

// echo '<br>';
// echo printMessage("x",2014);

//     function addNumbers(int $num1,int $num2):int{

//        return ($num1+$num2);

//     }
//    echo addNumbers(2,2);




//$x = 20;    // global 

// echo $x; // 20   

// function printY(){
//     $y = 10;    // local 


// }

//echo $y;   // 



// function printX(){
//     global $x;
//     echo $x;
// }
// printX();  //  = 20 


// function x($z){
//     // code .... 
// }

// function y(){
//     $z= 1;
//     x($z);
// }

// function printx(){
//    static $x = 0;
//     echo $x .'<br>';
//     $x++;

// }


// printx();  // 0   0    0
// printx();  // 0   1    0 
// printx();  // 0   2    1 

// printx();
// printx();



$text = "php course";

//  echo   strlen($text);

// echo str_word_count($text);

//   echo   strrev($text);

//   echo    strpos($text,"course");

// echo str_replace("php","js",$text);


//  $arrayNew =  explode(' ',$text);

//  var_dump($arrayNew);


// $student = ["name" => "root" , "age" => 20];


// $text =  implode('||',$student);

//      var_dump($text);


//   $text = "          php          "; 

//   $text = trim($text);    //     ltrim    rtrime 
//   echo strlen($text);


    // var_dump(is_int(3.1));

    //    var_dump(is_float(3.2));

    // var_dump(is_numeric("test"));


    // echo pi();


    // 5,4,0,100    
    //echo max(5,400,0,100);
    // echo min(5,400,0,100);

    // echo sqrt(64);


    // echo round(0.7);

      echo  rand(10,20);



?>






