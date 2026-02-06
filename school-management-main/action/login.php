<?php
if(isset($_POST['login'])){
$email=$_POST['email'];
$password=$_POST['password'];
if($email==="example@gmail.com" && $password==="example"){
    $_SESSION['login']=true;
    header("Location:../index.html");
}
else{
    echo "Invalid Credential";
}
}


?>