<?php
$showAlert = true ;
// $showError = false; 
if ($_SERVER["REQUEST_METHOD"] == "POST"){
  include 'connect.php';
  $name = $_POST["name"];
  $email = $_POST["email"];
  $mobile = $_POST["mobile"];
  $message = $_POST["message"];
//   $exist=false;
   if($name && $mobile && $message && $name){
      $sql = "INSERT INTO `users` ( `name`, `email`, `mobile` , `message`) VALUES ('$name', '$email', '$mobile','$message')";
     $result = mysqli_query($con,$sql);
    if( $result){
      $showAlert =false;
     
    }
 
//   }else{
//     $showError = "Password is wrong";
 }
}

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>Fill Query</title>
</head>
  <body>
   
     

   <?php 
   if($showAlert == true){
   echo'<div class="alert alert-success" role="alert">
  Alert! <a href="#" class="alert-link">Your Message Register Successfully .</a>
</div> ';
} ?>
<!-- // if($showError){
//   echo'<div class="alert alert-danger" role="alert">
//  Alert! <a href="#" class="alert-link">Wrong Password</a>
// </div> ';
// }
//    -->
    

   <div class="container" >
    <h1 class="text-center">Fill Query</h1>
    <form action="/edu/contact.php" method="post">

  <div class="form group col-md-6">
    <label for="name" class="form-label">Name</label>
    <input type="text" class="form-control" id="name"  name = "name">
   
  </div>
  <div class="form group col-md-6">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" id="email" name="email">
    
  </div>
  <div class="form group col-md-6">
    <label for="mobile" class="form-label">Mobile</label>
    <input type="number" class="form-control" id="mobile" name="mobile">
    
  </div>
  <div class="form group col-md-6">
    <label for="message" class="form-label">Message</label>
    <input type="text" class="form-control" id="message" name="message">
    
  </div>
  
  <br>
  <button type="submit" class="btn btn-primary form group col-md-6">Send</button> <br></br>

  
   </form>
   </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>

</body>
</html>