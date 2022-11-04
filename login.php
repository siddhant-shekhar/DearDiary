<?php
if(isset($_POST['uname'])&isset($_POST['uname'])){
    function validate($data){
        $data=trim($data);
        $data=stripslashes($data);
        $data=htmlspecialchars($data);
        return $data;
    }
$uname=$_POST['uname'];
$pass=$_POST['password'];
if(empty($uname)){
    header("Location:index.php?error=user Name is required");
    exit();
}else if(empty($pass)){
    header("Location:index.php?error=password is required");
    exit();
}else{
    echo "Valid input";
}
}
else{
    header("Location:index.php");
    exit();
}