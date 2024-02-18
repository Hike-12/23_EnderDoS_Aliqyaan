<!doctype html>
<html lang="en">
  <head>
    <title>Login Page</title>
    <style>
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 40vh;     
        }
        .container {
            display: grid;
            grid-template-columns: 1fr 1fr; 
          }
          
          .container img {
            grid-column: 2; 
          }
    </style>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body style="background-color: rgb(136, 206, 253);">
    <div className="flex flex-col md:flex-row items-center justify-content: center; min-h-screen bg-[#e2e8f0]">
        <div className="flex-1 flex items-center justify-content: center;" style="display: flex; justify-content: left; padding: 30px ;margin-left: 130px;">
          <img
            className="max-w-xs md:max-w-md lg:max-w-lg"
            src="C:\hackathon4\IMG_4021-transformed.jpg"
            style = "align-items: center;"
            width = "350.0;"
            height="300.0;"
            alt="Healthcare Startup Logo"
          />
        </div>
        <div class="container" style="position: absolute; top: 0; opacity:1.0; object-fit: contain;">
            <img src="C:\hackathon4\final.jpg" 
                 alt="Doctor"
                 height="100%"
                 width="208%">
  </div>
          </div> 
    <div class="container" style="height: fit-content; color:black; padding:auto; display: flex; justify-content: left;">
        <form method="post" action="login.php"> 
            <div class="mb-3 green-background">
                <label for="exampleInputEmail1" class="form-label" style="display: block; width: fit-content; margin: 0 auto; text-align: left;background-color: #4bf33c; box-shadow: 0 4px 8px rgba(13, 218, 173, 0.1);">Email address</label>
                <input type="email" class="form-control limited-width" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your email here"style="padding: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); "name ="username">
                <div id = "emailHelp" class="form-text" style="display: inline-block; padding: 10px; background-color: #f0f0f0; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">We'll never share your email with anyone else!</div>
            </div>
            
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label" style="display: block; width: fit-content; margin: 0 auto; text-align: left;background-color: #4bf33c; box-shadow: 0 4px 8px rgba(13, 218, 173, 0.1);">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter your password here" name= "password">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Remember Me</label>
            </div>
            <button type="submit" class="btn btn-primary" name="login_Btn">Submit</button>
        </form>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>


<?php
  $conn=mysqli_connect("localhost", "root ","");
  if(isset($_POST['login_Btn']))
  {
    $username=$_POST['username'];
    $password=$_POST['password'];
    $sql= "SELECT * FROM websitelogin.logindetails WHERE username='$username'";
    $result=mysqli_query($conn,$sql);
    while($row=mysqli_fetch_assoc($result)){
      $resultPassword= $row['password'];
      if($password== $resultPassword)
      {
        header('Location:homepage1hox.html')
      }
      else
      {
        echo "<script>
        alert('Login unsuccessful');
        </script>";
      }
    }

  }
