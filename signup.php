<?php 
$conn = mysqli_connect('localhost', 'adarsh', '123456', 'login');
if(!$conn){
    echo 'Connection Error: ' . mysqli_connect_error();
}
$sql1 = 'SELECT * from login ';
$result1 = mysqli_query($conn, $sql1);
$login = mysqli_fetch_all($result1, MYSQLI_ASSOC);
if(isset($_POST['signup'])){
    
    $uname=mysqli_real_escape_string($conn,$_POST['username']);
    $password=mysqli_real_escape_string($conn,$_POST['password']);
    $cpassword=mysqli_real_escape_string($conn,$_POST['password2'],);
     if($password!=$cpassword){
        header("Location: signupF.php?error=Your Passwords does not match");
        exit();
    }else{
        $pass=$password;
        $sql="INSERT INTO login (user,pass) values ('$uname','$pass')";
        $result=mysqli_query($conn,$sql);
        if($result){
            header("Location: loginform.php?error=You Have Successfully signed in");
        exit();
        }else{
            header("Location: signupF.php?error=You Have Successfully Logged in");
        exit();
        }mysqli_free_result($result);
    }
          
}
mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="signup.css">
    <title>Sign up Form | HackinvaH</title>
</head>
<body>
    <form class="box" action="#" method="POST">
        <h1>signup</h1>
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="password" placeholder="Set Password">
        <input type="password" name="password2" placeholder="Confirm Password">
        <input type="submit" name="signup" value="SIGNUP" id="1"  >

    </form>
    
    

</body>
</html>