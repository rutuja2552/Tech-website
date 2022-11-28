<?php
$host="localhost";
$user="root";
$password="";
$db="demo";

mysql_connect($host,$user,$password);
mysql_select_db($db);

if(isset($_POST['email'])){
    $uname=$_POST['email'];

    $sql="select * from registrationform user='".$uname."' limit 1";
$result=mysql_query($sql);
if(mysql_num_rows($result)==1){
    echo "You have successfully registered";
    exit();
}
else{
    echo"Unable to register";
}
}

?>