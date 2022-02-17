<?php 

/*

1:1  
1:M  (M:1)
M:M 
##################################################3

students [name ,email,password] 
departments [title,code] 
subjects [title,code]  





# Students ..... 
 id   name     email      password       dep_id
 1     x       x@x         123             2
 2     y       y@y         456             2



# departments 
id     title     code    
1       cs       cs12
2       it       it45 



students         departments 
1                   1
m                   1
========================
m        :          1
####################################################################################################


# Subjects 
id  title   code 
1    pl1     cs1 
2    pl2     cs2 
3    SW      cs3 
4    Ne      it1 


students      subjects  
1                m 
m                1 
===================== 
m        :       m



# stsSubjects ... 
id   std_id    sub_id  
1     1         3
2     1         4   
 
########################################################################################### 


# managers 
id   name   email    dep_id 
1     x      x@x       1

# departments 
id   title   
1     CC 



managers        departments 
1                1
1                1
======================
1                1













# Task .... 
Hospital management system that have 3 main types of users 1-admins 2-doctors 3-Patients.
With the following data.
Admins   (name, email, password ) ,   phone 
Patients (name, email, password)  ,
Doctors  (name, email, password   , specialize(text) , gender).....
nurse (name,email,password)


Doctors have appointments(day , from , to) and
Patients can reserve these appointments.
Note : doctor can accept or refuse reservations.
Requirments : create a database structure.




# Admin 
id    name    email     password     phone 
1      admin   a@a       123         010xxxx 

# Doctors 
id    name    email     password     specialize   gender
1     doc1     d@d       456          x            male


# Patient 
id    name    email     password
1     p1       p@p      789
2     p2       p2@p     889



# nurse 
id    name    email     password
1     n1       p@p      789
2     n2       p2@p     889


===================================================================================================

# UserTypes 
id     title 
1       admin 
2       doctor 
3       patient


# Users 
id    name    email     password       type_id     
1      root   root@a     123             1         
2      pa     p@p        456             3         
3      do     d@d        789             2 
4      d2     d2@d       777             2         


# doctorDetails
id     specialize   gender       doc_id
1       x           male          3 
2       y           male          4 


# AdminDetails 
id   phone     admin_id 
1    010xxxx   1 






users     types 
1          1
m          1
=============
m          1  



===================================================================================================







# Appointments
id    day     from      to       doc_id      
1     SUN     9:00 am   9:20 am   1            



doctors    appointemnts 
1             m 
1             1
================ 
1             m 





patient        appo  
1               m 
m               1
=====================
m               m 



 # Reservation    
 id     app_id    p_id     date       approve 
 1       1        1         13/2       0
 2       1        2         20/2       1
 3       1        3         27/2       1     

                                 





*/









?>





