<?php 
$conn = mysqli_connect('localhost', 'adarsh', '123456', 'login');
if(!$conn){
    echo 'Connection Error: ' . mysqli_connect_error();
}

if(isset($_POST['login'])){
    
    $uname=$_POST['username'];
    $password=$_POST['password'];
    
    $sql="SELECT * from login where user='".$uname."'AND Pass='".$password."' ";
    
    $result=mysqli_query($conn,$sql);
    
    
    
    if(mysqli_num_rows($result)===1){
        
        header("Location: loginS.php?error=You Have Successfully Logged in");
        exit();
    }
    else{
        
        header("Location: loginF.php?error=You Have Entered Incorrect Password");
        exit();
    }
    mysqli_free_result($result);      
}
mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Login Form | HackinvaH</title>
</head>
<body>
    <form class="box" action="#" method="POST">
        <h1>LOGIN</h1>
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="password" placeholder="Password">
        <input type="submit" name="login" value="Login" id="1"  >

    </form>
    
    

</body>
</html>