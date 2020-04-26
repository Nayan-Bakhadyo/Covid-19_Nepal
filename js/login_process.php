<?PHP
 $uname=$_POST['username'];
 $pass=$_POST['password'];

 if($uname=='admin'){
     if($pass=='admin'){
         header("location:admin_page.php");
     }
     else{
        header("location:index.php");
   }   
 }
 else{
      header("location:index.php");
 }
 
 ?>