<?php

include("loginquery.php");

?>

<html>
<head>

<style>

.login{
    width:360px;
    margin:30px auto;
    font:Cambria, "Hoefler Text";
    border-radius: 10px;
    border:3px solid #ddd;
    padding:10px;
    margin-top:70px;

}
input[type=text], input[type=password]{
    width:90%;
    padding:12px;
    margin:10px;
    font-size:18px;
}
input[type=submit]{
    width:100%;
    background-color:yellow;
    padding:10px;
    cursor:pointer;
}

</style>
</head>
<body>
<div class="login">
    <h1 align="center">Login</h1>
    <form action="" method="post">
    <input type="text" placeholder="UserName" id ="user" name="user"><br>
    <input type="password" placeholder="Password" id="pass" name="pass"><br>
    <input type="submit" value="Login" name="submit">
</div>

<span><?php echo $error;  ?></span>
</body>
</html>