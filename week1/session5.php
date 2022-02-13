<?php 

//  $_SESSION['KEY'] = "VALUE";



//    if(isset($_COOKIE['studentInfo']) && isset($_COOKIE['studentID'])){
//     echo  $_COOKIE['studentInfo'];
//     echo  $_COOKIE['studentID'];
//    }else{
//      setcookie("studentInfo","Root Account",time()+86400,'/');    // 86400 
//      setcookie("studentID",20130299,time()+86400,'/'); 
  
//     }


//    $data =   implode('||',['name' => "ahmed" , "age" => 20]);

        // setcookie("studentID",'',time()-86400,'/'); 


    //    print_r(explode('||',$_COOKIE['studentID']));

    // echo $_COOKIE['studentID'];


    /* 
    
     title   [required|leng : 5 ch ]
     content [required|leng : 50 ch , 100 ch  ]
     
     validate form .... 
     store data in Cookie File ...... 
     create page to display data ..... 
         
    */


    // $file =   fopen('info.txt',"a")   or  die("Unable to open File");

    // $text = "node js \n";
    // fwrite($file,$text);


    // $text = "c# \n";
    // fwrite($file,$text);

    // fclose($file);



    # Read From File .... 


//  $file = fopen('info.txt','r') or die('unable to open file');

//     // echo  fread($file,filesize('info.txt'));

//    while(!feof($file)){

//     // echo fgets($file).'<br>';
//     echo fgetc($file).'<br>';
//    }
//    fclose($file); 

//  $student =  ' {
//        "name" : "Root", 
//        "age"  : 30,
//        "GPA"  : 3.4 
//    }';


    //  $data = json_decode($student);    // return data as object .... 

    //  echo $data->name.' || '.$data->GPA;



   // $data = json_decode($student,true);   // return data as Array . 

    // var_dump($data);

    // echo $data['name'];

    // foreach($data as $key => $value){
    //     echo $key . ' : '.$value.'<br>';
    // }




    // https://tools.learningcontainer.com/sample-json-file.json  

      $dataJson =    file_get_contents('https://tools.learningcontainer.com/sample-json-file.json');

 
    // //  '{
    //     "Name": "Test",
    //     "Mobile": 12345678,
    //     "Boolean": true,
    //     "Pets": [
    //       "Dog",
    //       "cat"
    //     ],
    //     "Address": {
    //       "Permanent address": "USA",
    //       "current Address": "AU"
    //     }
    //   }';




    //  $data = json_decode($dataJson,true);


    // echo  implode('||',$data['Pets']).'<br>';



    //   echo "name : ".$data['Name'].'<br>';
    //   echo "Phone : ".$data['Mobile'].'<br>';

    //   echo "*******Pets ********* <br>"; 


   

    //   foreach($data['Pets'] as $value){
    //       echo $value.'<br>';
    //   }



    //   echo "********Address ********* <br>"; 

    //   foreach($data['Address'] as $key => $value){
    //       echo $key .' : '.$value.'<br>';
    //   }


    // $student = ["name" => "test" , "age" =>20 , "gpa" => 3.3 ];
    //     echo   json_encode($student);


//   date(format , timestamp );
/*
d 01 - 31 
D sun 
m 01 - 12 
M jan 
F full Month Name ... 
y 22  
Y 2022
***************************** 

h  01-12 
H  00:23
i  00:59 
s  00:59
a  am,pm
A  AM,PM 
*/ 


//  echo   date_default_timezone_get();
// date_default_timezone_set('africa/cairo');

// echo date('Y-m-d h:i:s a ').'<br>';
