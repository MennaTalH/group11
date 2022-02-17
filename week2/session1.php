<?php 



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

// //  echo date('Y'); 

// echo time();

   // 2021/3/3 
   //echo strtotime('3-3-2021   9:10 am');    // 1614759000 
  //  echo  date('d/M,Y  h:i:s a',1614759000);


/*

users  [name ,email,password] 
Blog   [title,content,image]




User Table  
id    name      email       password         
 1     x           x@x        123
 2     y           y@y        456 




Blog Table 
title    content      image


# Task .... 
Hospital management system that have 3 main types of users 1-admins 2-doctors 3-Patients.
With the following data.
Admins   (name, email, password ) ,
Patients (name, email, password)  ,
Doctors  (name, email, password   , specialize(text) , gender).....
nurse (name,email,password)

Doctors have appointments(day , from , to) and
Patients can reserve these appointments.
Note : doctor can accept or refuse reservations.
Requirments : create a database structure.


*/







?>