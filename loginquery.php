
<?php
$error='';
if(isset($_POST['submit'])){
    if(empty($_POST['user'])  || empty($_POST['pass'])){
        $error="Username or Password was invalid";
    }
    else{
        $user=$_POST['user'];
        $pass=$_POST['pass'];

        $conn = mysqli_connect("localhost","root","");
        $db = mysqli_select_db($conn,"adminlogin");
        $query = mysqli_query($conn,"select * from usertable where pass='$pass' and user='$user'" );
        $rows = mysqli_num_rows($query);
        if($rows == 1){
            header("Location: welcome.php");
        }
        else{
            $error = "Username or Password is Invalid";
        }
        mysqli_close($conn);

    }
}
?>