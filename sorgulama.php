<?php
$username = $_POST['username'];
$password = $_POST['password'];
$usercontrol ="g201210382@ogr.sakarya.edu.tr";
$passcontrol ="g201210382";

if($username and $password){
 
} else {
header("location:login.html");
}
if($usercontrol == $username and $passcontrol == $password){
    echo "HOŞGELDİNİZ g201210382";
    header("Refresh: 5; url=index.html");
}
else{ 
    echo "Kullanıcı Adı Veya Şifre Hatalı..";
    header("Refresh: 3; url=login.html");
}
?>