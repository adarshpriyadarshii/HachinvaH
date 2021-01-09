<?php
if(isset($_POST['help'])){
    header("Location: help.php?error=You can ask for help");
        exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="loginS.css">
    <title>Login Successfull | HackinvaH</title>
</head>
<body>
    <form class="box" action="#" method="POST">
        <h1>SUCCESSFULL LOGIN</h1>
        
        
        <input type="submit" name="help" value="Help!" id="1"  >
        

    </form>
    
    

</body>
</html>