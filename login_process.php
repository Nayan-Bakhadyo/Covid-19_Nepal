<?PHP
 $uname=$_POST['username'];
 $pass=$_POST['password'];

 if($uname=='admin'){
     if($pass=='nepal_covid@19'){
         header("location:admin_index.php");
     }
     else{
        header("location:index.php");
   }   
 }
 else{
      header("location:index.php");
 }
 
 ?>