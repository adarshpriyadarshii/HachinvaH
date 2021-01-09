<?php 
$conn = mysqli_connect('localhost', 'adarsh', '123456', 'question');
if(!$conn){
    echo 'Connection Error: ' . mysqli_connect_error();
}
if(isset($_POST['submit'])){
    
  $uname=mysqli_real_escape_string($conn,$_POST['uname']);
  $question=mysqli_real_escape_string($conn,$_POST['Query']);
 
   {
      $ques=$question;
      $sql="INSERT INTO question (uname, que) values ('$uname','$ques')";
      $result=mysqli_query($conn,$sql);
      if($result){
          header("Location: helpS.php?error=You Have Successfully Submitted Query");
      exit();
      }else{
          header("Location: help.php?error=You Have Successfully not Submitted Query");
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
    <title>Help | HackinvaH</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Query Portal</h1>
    <form class="box" action="#" method="POST">
    <div class="box">
     <div>
      <p id="name">Name : <input name="uname" type="text" id="name" required></p>
      <p id="query">Your Query : </p>
      <div class="text-container">
      <textarea id="text" name="Query" id="query" cols="50" rows="7" required ></textarea>
    </div> 
    
    </div>
    <input type="submit" value="Send" class="submit" name="submit">
    <input type="submit" value="Back to Home" class="home" onclick="myF()">
    </div>
    </form>
    
</body>
<script>
function myF() {
  location.replace("http://localhost/hackathon/Home/HomePage.html")
}
</script>
</html>