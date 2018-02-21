<?php
 
   $name=$_POST['name'];
   $email=$_POST['email'];
   $mobile=$_POST['mobile'];
   $message=$_POST['message'];
   $conn=mysqli_connect("localhost","root","","myproject5");
   $sql="insert into contact(name,email,mobile,message) values('$name','$email','$mobile','$message')";
   
   $res=mysqli_query($conn,$sql);
   
   if($res==true)
   {
	   echo " data svaed successfully";
   }else
   {
	   echo "fail try again";
   }
?>